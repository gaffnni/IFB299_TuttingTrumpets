<?php
$basename = 'Confirm Class Registration';
require_once("../../../resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");
require_once(LIBRARIES_PATH . "/isloggedin.php");
require_once(TEMPLATES_PATH . "/banner.php");
if (!isset($_SESSION["user"])) {
  header('Location: ../login.php');
}
require_once(TEMPLATES_PATH . $_SESSION["user"][4]);
require_once(LIBRARIES_PATH . "/classregfunc.php");
?>

<div class="container">
  <div class="panel">
    <h1>Registration <?php echo $classregresult ?></h1>
  </div>
</div>

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>
