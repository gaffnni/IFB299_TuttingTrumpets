<?php
include ("connectdb.php");

// REGISTER FORMS STUDENT & TEACHER ----------------------------------------------------------------------
$salt = random_int(100000, 999999);
$currentdate = date("Y-m-d-H-i-s");
$hasinst = false;
$hasparent = false;

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

//sql statements
$checkUsernamesql = "Select 1
From `accounts`
Where `Username`=:username;";

$sturegsql = "INSERT INTO `studentsaccounts`(`FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `PhoneNumber`, `EmailAddress`, `FacebookURL`, `RequireInstrument`, `Salt`, `Password`)
VALUES (:firstname, :lastname, :DOB, :address, :gender, :mobphone, :email, null, :reqinst, :salt, SHA2(CONCAT(:password, :salt), 0));
INSERT INTO `accounts`(`Username`, `StudentId`)
SELECT :username, LAST_INSERT_ID();";

$teacherregsql = "INSERT INTO `teachersaccounts`(`FirstName`, `LastName`, `DateOfBirth`, `Address`, `Gender`, `PhoneNumber`, `EmailAddress`, `Salt`, `Password`, `AdminCreationId`)
VALUES (:firstname, :lastname, :DOB, :address, :gender, :mobphone, :email, :salt, SHA2(CONCAT(:password, :salt), 0), :adminid);
INSERT INTO `accounts`(`Username`, `TeacherId`)
SELECT :username, LAST_INSERT_ID();";

$parentsql = "INSERT INTO `parentdetails`(`FirstName`, `LastName`, `PhoneNumber`, `Email`)
VALUES (:pfirstname, :plastname, :pphone, :pemail);
UPDATE 'studentsaccounts'
SET ParentsId = LAST_INSERT_ID(), UpdateDate = CURRENT_TIMESTAMP
WHERE Id = :studentid;";

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
    if (isset($_POST['reqinst'])) {
      $reqinst = 1;
    } else {
      $reqinst = 0;
    }
    // Check if parent details are used then prepeare
    if ($_POST['pfname'] !== ""){
      $pfirstname = $_POST['pfname'];
      $plastname = $_POST['plname'];
      $pphone = $_POST['ptel'];
      $pemail = $_POST['pemail'];
      $hasparent = true;
    }
	$stmt = $pdo->prepare($checkUsernamesql);
	$stmt->bindValue(':username',$username);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_NUM);
	
	if (!empty($rows[0])) {
		// Define student register sql query to stmnt and bind values
		$stmt = $pdo->prepare($sturegsql);
		$stmt->bindValue(':username', $username);
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
		$stmt->bindValue(':reqinst', $reqinst);
		$stmt->execute();
		$submittedresult = $stmt->rowCount();
		console_log( $submittedresult );
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
	} else {
		echo "Incorect Username";
		$loginresult = false;
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
	$stmt = $pdo->prepare($checkUsernamesql);
	$stmt->bindValue(':username',$username);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_NUM);
	
	if (!empty($rows[0])) {
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
	} else {
		echo "Incorect Username";
		$loginresult = false;
	}    
  }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
