<?php
require_once("connectdb.php");
//REGISTER FORM ----------------------------------------------------------------------
$salt = random_int(11, 11);
$currentdate = date("m-d-Y");
$hasinst = false;

//sql statement
$regsql = "INSERT INTO `studentsaccounts`(`Id`, `FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `HomePhone`, `MobPhone`, `EmailAddress`, `Password`, `Salt`, `ParentsId`, `CreateDate`, `UpdateDate`)
            VALUES (NULL, :firstname, :lastname, :DOB, :address, :gender, NULL, :mobphone, :email, SHA2(CONCAT(:password, salt), 0), :salt, NULL, :createdate, NULL)";

//need to do:
//--validate
//--login on succeful registration

//prepare values
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'regform') {
  global $stmt, $salt;
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $dob = $_POST['firstname'];
  $username = $_POST['usrname'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $mobphone = $_POST['mobphone'];
  $email = $_POST['email'];
  //$hasinst = $_POST['hasinst'];

  //Submit Values
  $stmt = $pdo->prepare($regsql);
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
  echo "<h1>" . $submittedresult . "</h1>";
  header('Location: loginresult.php');
}


?>
