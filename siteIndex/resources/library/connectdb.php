<?php
try {
	//connect to db
	$pdo = new PDO('mysql:host=localhost;dbname=ifb299', 'root', '');
	//enable error
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
		echo $e;
	$errdivs = '<div id="errcont">';
	$errdive = '</div>';
	//Check if the error is 1062 meaning duplicate entry into a unique constrained column
	//two fields have this constraint Email, and Username
	if (strpos($e, '1062') !==false) { //check for 1062 error by seeing it is contained in the PDOException string
		$error = true; //set error to true to trigger the error display
		if (strpos($e, 'email') == true) { // checks if it is an email duplicate first
			$outputerror = '<p>Duplicate Email</p><p>This email has already been used</p>';
		} elseif (strpos($e, 'username') == true) { // checks to see if is a username error
			$outputerror = '<p>Duplicate Username</p><p>This username has already been used, Please change</p>';
		} else {
			$outputerror = '<h2>Unknown error occured</h2>';
		}

	}
}
?>
