<?php
// Check to See if logged in
$gotologin = 'Location:' . INDEX_PATH . 'login.php';
if (!isset($_SESSION["user"])) {
 header($gotologin);
}

// Check user isnt trying to access other user accounts


?>
