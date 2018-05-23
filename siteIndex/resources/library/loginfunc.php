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
//        value[0] = accountId
//        value[1] = userId
//        value[2] = accountType
//        value[3] = password
//        value[4] = salt

//sql login stmt

//sql password stmt
$stdntloginpasssql = "SELECT Id, Salt, Password FROM studentsaccounts WHERE Id= :studentid";
$tchrloginpasssql = "SELECT Id, Salt, Password FROM teachersaccounts WHERE Id= :teacherid";
$adminloginpasssql = "SELECT Id, Salt, Password FROM adminaccounts WHERE Id= :adminid";

//check both fields are filled
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $form == 'loginform'  && !empty($_POST['username']) && !empty($_POST['password'])) {
  //assign POST data to normal variables
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $stmt = $pdo->prepare($loginSQL);
  $stmt->bindValue(':username', $username);
  $stmt->execute();
  $rows = $stmt->fetch(PDO::FETCH_NUM);

  // Check user type
  if (!empty($rows[0])) {
    global $pass;
    $userid = $rows[1];
    $acctid = $rows[0];
    $password = $pass . $rows[4];
    // Check Password
    if (hash('sha256', $password) == $rows[3]) {
      // Login Successful  -> Go to account page
      // Set Session Data
      $_SESSION["user"] = array($row[2], $acctid, $rows[0]);
      header('Location: private_html/profile.php');
    } else {
      echo "Incorect Password";
    }  
  } else {
    echo "Incorect Username";
    $loginresult = false;
    // TO DO -Failed login popup --------------
  }
}
