<?php
require_once("connectdb.php");

//DEBUGGING - REMOVE WHEN COMPLETE --------------
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

// Session variables
//        value[0] = usertype
//        value[1] = accountId
//        value[2] = userId
//        value[3] = navRef
$_SESSION["user"] = array();

//sql username stmt
$loginusrsql = "SELECT * FROM accounts WHERE Username= :username";

//sql password stmt
$stdntloginpasssql = "SELECT Id, Salt, Password FROM studentsaccounts WHERE Id= :studentid";
$tchrloginpasssql = "SELECT Id, Salt, Password FROM teachersaccounts WHERE Id= :teacherid";
$adminloginpasssql = "SELECT Id, Password FROM adminaccounts WHERE Id= :adminid";

//check both fields are filled
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'loginform'  && !empty($_POST['username']) && !empty($_POST['password'])) {
  //assign POST data to normal variables
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $stmt = $pdo->prepare($loginusrsql);
  $stmt->bindValue(':username', $username);
  $stmt->execute();
  $rows = $stmt->fetch(PDO::FETCH_NUM);

  // Check user type
  if (!empty($rows[2])) {
    global $pass;
    $userid = $rows[2];
    $acctid = $rows[0];
    // Get User Pass + info
    $stmt = $pdo->prepare($stdntloginpasssql);
    $stmt->bindValue(':studentid', $userid);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_NUM);
    $password = $pass . $rows[1];
    // Check Password
    if (hash('sha256', $password) == $rows[2]) {
      // Login Successful  -> Go to account page
      // Set Session Data
      $_SESSION["user"] = array("student", $acctid, $rows[0]);
      header('Location: private_html/profile.php');
    } else {
      echo "Incorect Password";
    }
  } elseif (!empty($rows[3])) {
    $acctid = $rows[3];
    // Get User Pass + info
    $stmt = $pdo->prepare($tchrloginpasssql);
    $stmt->bindValue(':teacherid', $acctid);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_NUM);
    $password = $pass . $rows[1];
    // Check Password
    if (hash('sha256', $password) == $rows[2]) {
      // Go to account page
      $_SESSION["user"] = array("teacher", $acctid, $rows[0]);
      header('Location: private_html/profile.php');
    } else {
      echo "Incorect Password";
    }
  } elseif (!empty($rows[4])) {
    $acctid = $rows[4];
    // Get User Pass + info
    $stmt = $pdo->prepare($adminloginpasssql);
    $stmt->bindValue(':adminid', $acctid);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_NUM);
    $password = $pass . $rows[1];
    echo $pass;
    echo $rows[1];
    // Check Password
    if (/*hash('sha256', $password)*/$pass == $rows[1]) {
      // Go to account page
      $_SESSION["user"] = array("admin", $acctid, $rows[0]);
      header('Location: private_html/profile.php');
    } else {
      echo "Incorect Password";
    }
  } else {
    echo "Incorect Username";
    $loginresult = false;
    // Failed login popup --------------
  }
  // if($rows > 0) {
  //   $logintried = true;
  //   $acctid =
  //   $loginsuc = true;
  //   $salt = $rows[2];
  //   $firstname = $rows[5];
  //   //check password
  //   $password = $_POST['password'] . $salt;
  //   $password = hash('sha256', $password);
  //   $stmt2 = $pdo->prepare($loginpasssql);
  //   $stmt2->bindValue(':password', $password);
  //   $stmt2->execute();
  //   $passrows = $stmt2->fetch(PDO::FETCH_NUM);
  //   //check if eturns any rows if true then password is correct
  //   if($passrows > 0) {
  //     //create cookie for logged in user - time for 1 day
  //     $cookie_value = $username;
  //     $cookie_name = 'user';
  //     session_start();
  //     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
  //     $_SESSION['loggedin'] = true;
  //     $_SESSION['firstname'] = $firstname;
  //     header('location: indexloggedin.php');
  //   }
  //
  // } else {
  //   $logintried = true;
  //     $loginsuc = false;
  //     $outputerror = '<p>Wrong Username and/or Password</p>';
  //  }
}
