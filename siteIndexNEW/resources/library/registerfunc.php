<?php
include ("connectdb.php");
//REGISTER FORM ----------------------------------------------------------------------
$salt = 3;//random_int(100000, 999999);
$currentdate = date("Y-m-d-H-i-s");
$hasinst = false;
$hasparent = false;

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

//sql statement
$sturegsql = "INSERT INTO `studentsaccounts`(`Id`, `FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `HomePhone`, `MobPhone`, `EmailAddress`, `Password`, `Salt`, `ParentsId`, `CreateDate`, `UpdateDate`)
            VALUES (NULL, :firstname, :lastname, :DOB, :address, :gender, NULL, :mobphone, :email, CONCAT(:password, :salt), :salt, NULL, :createdate, NULL);";

$acctregsql = "INSERT INTO `accounts`(`Id`, `Username`, `StudentId`, `TeacherId`, `AdminId`) VALUES (NULL, :username, :studentid, NULL, NULL);";

$parentsql = "INSERT INTO `parentdetails`(`Id`, `StudentId`,`FirstName`, `LastName`, `PhoneNumber`, `Email`, `CreateDate`, `UpdateDate`) VALUES (NULL, :studentid, :pfirstname, :plastname, :pphone, :pemail, :createdate, NULL);";

//need to do:
//--validate

try {
//prepare values
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'regform') {
  global $stmt, $salt, $last_id;
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $mobphone = $_POST['mobphone'];
  $email = $_POST['email'];
  // Check if parent details are used then prepeare
  if ($_POST['pfname'] !== ""){
    $pfirstname = $_POST['pfname'];
    $plastname = $_POST['plname'];
    $pphone = $_POST['ptel'];
    $pemail = $_POST['pemail'];
    $hasparent = true;
  }
  //$hasinst = $_POST['hasinst'];
  // Define student register sql query to stmnt and bind values
  $stmt = $pdo->prepare($sturegsql);
  $stmt->bindValue(':firstname', $firstname);
  $stmt->bindValue(':lastname', $lastname);
  $stmt->bindValue(':DOB', $dob);
  $stmt->bindValue(':address', $address);
  $stmt->bindValue(':gender', $gender);
  $stmt->bindValue(':mobphone', $mobphone);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':password', $password);
  $stmt->bindValue(':salt', $salt);
  $stmt->bindValue(':createdate', $currentdate);
  $stmt->execute();
  $submittedresult = $stmt->rowCount();
  console_log( $submittedresult );
  // Get Id of last insert
  $last_id = $pdo->lastInsertId();
  // Define sql query and  insert row into acct table
  //    with Id from studentsaccounts
  $stmt = $pdo->prepare($acctregsql);
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':studentid', $last_id);
  $stmt->execute();
  // If parent have been included, bind values,
  //   insert into table with student acct ID
  if ($hasparent == true) {
    $stmt = $pdo->prepare($parentsql);
    $stmt->bindValue(':studentid', $last_id);
    $stmt->bindValue(':pfirstname', $pfirstname);
    $stmt->bindValue(':plastname', $plastname);
    $stmt->bindValue(':pphone', $pphone);
    $stmt->bindValue(':pemail', $pemail);
    $stmt->bindValue(':createdate', $currentdate);
    $stmt->execute();
  }
  if ($submittedresult == 1) {
    $regsuccess = true;
    header('Location: regresult.php');
    echo $regsuccess;
  } else {
    $regsuccess = false;
    header('Location: regfresult.php');
    echo $regsuccess;
  }

}

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>