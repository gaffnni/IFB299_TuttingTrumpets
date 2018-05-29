<?php
    $basename = '-Name-';
    require_once("../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
    // Set the nav bar for usertype
    if (!isset($_SESSION["user"])) {
      header('Location: ../login.php');
    } else {
      if ($_SESSION["user"][0] == 'student') {
        require_once(TEMPLATES_PATH . "/studentnav.php");
        $_SESSION["user"][3] = "/studentnav.php";
      } elseif ($_SESSION["user"][0] == 'teacher') {
        require_once(TEMPLATES_PATH . "/teachernav.php");
        $_SESSION["user"][3] = "/teachernav.php";
      } elseif ($_SESSION["user"][0] == 'admin') {
        require_once(TEMPLATES_PATH . "/adminnav.php");
        $_SESSION["user"][3] = "/adminnav.php";
      }
    }

?>

<div class="container">
  <div class="panel" id="tempprorf">
    <div id="tempprof">
    </div>
    <!-- <h1>-Insert Profile-<br></h1><p><?php //echo print_r($_SESSION["user"])?></p> -->
  </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
