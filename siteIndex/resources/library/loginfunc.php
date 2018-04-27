<?php
require_once("connectdb.php");


//DEBUGGING
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}



//sql username stmt
$loginusrsql = "SELECT * FROM accounts WHERE Username= :username";

//sql password stmt
$stdntloginpasssql = "SELECT * FROM studentsaccounts WHERE Password= :password";
$tchrloginpasssql = "SELECT * FROM teachersaccounts WHERE Password= :password";
$adminloginpasssql = "SELECT * FROM adminaccounts WHERE Password= :password";

//check both fields are filled
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'loginform'  && !empty($_POST['username']) && !empty($_POST['password'])) {

  //assign POST data to normal variables
  $username = $_POST['username'];
  $stmt = $pdo->prepare($loginusrsql);
  $stmt->bindValue(':username', $username);
  $stmt->execute();
  $rows = $stmt->fetch(PDO::FETCH_NUM);
  debug_to_console( $stmt->fetch(PDO::FETCH_NUM) );
  debug_to_console( $stmt->fetch(PDO::FETCH_ASSOC) );
  if($rows > 0) {
    $logintried = true;
    $loginsuc = true;
    $salt = $rows[2];
    $firstname = $rows[5];
    //check password
    $password = $_POST['password'] . $salt;
    $password = hash('sha256', $password);
    $stmt2 = $pdo->prepare($loginpasssql);
    $stmt2->bindValue(':password', $password);
    $stmt2->execute();
    $passrows = $stmt2->fetch(PDO::FETCH_NUM);
    //check if eturns any rows if true then password is correct
    if($passrows > 0) {
      //create cookie for logged in user - time for 1 day
      $cookie_value = $username;
      $cookie_name = 'user';
      session_start();
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
      $_SESSION['loggedin'] = true;
      $_SESSION['firstname'] = $firstname;
      header('location: indexloggedin.php');
    }

  } else {
    $logintried = true;
      $loginsuc = false;
      $outputerror = '<p>Wrong Username and/or Password</p>';
   }
}
