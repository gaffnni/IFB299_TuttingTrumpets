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

$loginSQL = "Select a.Id,
CASE
	WHEN sa.Id is not null Then sa.Id
	WHEN ta.Id is not null Then ta.Id
	WHEN aa.Id is not null Then aa.Id
END AS AccountId,
CASE
	WHEN sa.Id is not null Then 'Student'
	WHEN ta.Id is not null Then 'Teacher'
	WHEN aa.Id is not null Then 'Admin'
END AS AccountType,
CASE
	WHEN sa.Id is not null Then sa.Password
	WHEN ta.Id is not null Then ta.Password
	WHEN aa.Id is not null Then aa.Password
END AS Password,
CASE
	WHEN sa.Id is not null Then sa.Salt
	WHEN ta.Id is not null Then ta.Salt
	WHEN aa.Id is not null Then aa.Salt
END AS Salt
From accounts a
left join studentsaccounts sa on a.StudentId = sa.Id
left join adminaccounts aa on a.AdminId = aa.Id
left join teachersaccounts ta on a.TeacherId = ta.Id
Where Username = :username;"

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
