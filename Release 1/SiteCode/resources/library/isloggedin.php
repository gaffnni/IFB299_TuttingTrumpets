<?php
$gotologin = 'Location:' . INDEX_PATH . 'login.php';
if (!isset($_SESSION["user"])) {
 header($gotologin);
}
?>
