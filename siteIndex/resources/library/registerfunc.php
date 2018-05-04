<?php
include ("connectdb.php");

// REGISTER FORMS STUDENT & TEACHER ----------------------------------------------------------------------
$salt = 3;//random_int(100000, 999999);
$currentdate = date("Y-m-d-H-i-s");
$hasinst = false;
$hasparent = false;

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

//sql statementa
$sturegsql = "INSERT INTO `studentsaccounts`(`Id`, `FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `PhoneNumber`, `EmailAddress`, `Password`, `Salt`, `ParentsId`, `CreateDate`, `UpdateDate`)
VALUES (NULL, :firstname, :lastname, :DOB, :address, :gender, :mobphone, :email, SHA2(CONCAT(:password, :salt), 0), :salt, NULL, :createdate, NULL);";

$teacherregsql = "INSERT INTO `teachersaccounts`(`Id`, `FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `PhoneNumber`, `EmailAddress`, `Password`, `Salt`, `AdminCreationId`, `CreateDate`, `UpdateDate`)
VALUES (NULL, :firstname, :lastname, :DOB, :address, :gender, :mobphone, :email, SHA2(CONCAT(:password, :salt), 0), :salt, :adminid, :createdate, NULL);";

$acctregsql = "INSERT INTO `accounts`(`Id`, `Username`, `StudentId`, `TeacherId`, `AdminId`) VALUES (NULL, :username, :studentid, NULL, NULL);";
$teacheracctregsql = "INSERT INTO `accounts`(`Id`, `Username`, `StudentId`, `TeacherId`, `AdminId`) VALUES (NULL, :username, NULL, :teacherid, NULL);";

$parentsql = "INSERT INTO `parentdetails`(`Id`, `StudentId`,`FirstName`, `LastName`, `PhoneNumber`, `Email`, `CreateDate`, `UpdateDate`) VALUES (NULL, :studentid, :pfirstname, :plastname, :pphone, :pemail, :createdate, NULL);";

//need to do:
//--validate

try {
  // Check if student registration and set vars
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'sturegform') {
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
      header('Location: regresult.php');
      echo $regsuccess;
    }
  // Check if teacher registration
  } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'teacherregform') {
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
    $adminid = $_SESSION['user'][2];
    // Bind Values
    $stmt = $pdo->prepare($teacherregsql);
    $stmt->bindValue(':firstname', $firstname);
    $stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':DOB', $dob);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':gender', $gender);
    $stmt->bindValue(':mobphone', $mobphone);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':salt', $salt);
    $stmt->bindValue(':adminid', $adminid);
    $stmt->bindValue(':createdate', $currentdate);
    $stmt->bindValue(':adminid', $adminid);
    $stmt->execute();
    $submittedresult = $stmt->rowCount();
    console_log( $submittedresult );
    // Get Id of last insert
    $last_id = $pdo->lastInsertId();
    // Define sql query and  insert row into acct table
    //    with Id from studentsaccounts
    $stmt = $pdo->prepare($teacheracctregsql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':teacherid', $last_id);
    $stmt->execute();
    $submittedresult = $stmt->rowCount();
    if ($submittedresult == 1) {
      $regsuccess = true;
      header('Location: ../profile.php');
      echo $regsuccess;
    } else {
      $regsuccess = false;
      header('Location: ../profile.php');
      echo $regsuccess;
    }

  }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
