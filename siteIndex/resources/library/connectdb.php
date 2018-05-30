<?php
function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

try {
	//connect to db
	$pdo = new PDO('mysql:host=localhost;dbname=ifb299', 'tim', 'pass');
	//enable error
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

	//Check if the error is 1045 meaning DB login details incorrect
	if (strpos($e, '1045') !== false) {
		// Set DB login for local dev machine
		try {
			$pdo = new PDO('mysql:host=localhost;dbname=ifb299', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			$e = clean($e);
			$e = "'".'INCORRECT DATABASE USER LOGIN DETAILS --------\r\n \r\n'.$e."'";
			$erroralert = '<script> alert(' . (string)$e . '); </script>';
			echo $erroralert;
		}
	}
}

?>
