<?php
    $userfn = 'No name set';
    require_once("../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(LIBRARIES_PATH . "/isloggedin.php");
    $basename = "Welcome ".$_SESSION["user"][3];
    require_once(TEMPLATES_PATH . "/banner.php");
    // Set the nav bar for usertype
      if ($_SESSION["user"][0] == 'Student') {
        require_once(TEMPLATES_PATH . "/studentnav.php");
        $_SESSION["user"][4] = "/studentnav.php";
      } elseif ($_SESSION["user"][0] == 'Teacher') {
        require_once(TEMPLATES_PATH . "/teachernav.php");
        $_SESSION["user"][4] = "/teachernav.php";
      } elseif ($_SESSION["user"][0] == 'Admin') {
        require_once(TEMPLATES_PATH . "/adminnav.php");
        $_SESSION["user"][4] = "/adminnav.php";
      }


?>
<div class="container">
  <div class="panel" id="tempprorf">
    <div id="tempprof">
    </div>
  </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
    // Check if came from teachreg and throw success
    if (isset($_SESSION["reg"])) {
      if ($_SESSION["reg"][0] == true){
        echo "<script type='text/javascript'>alert('Teacher Successfully Registered');</script>";
        unset($_SESSION["reg"]);
      } else {
        echo "<script type='text/javascript'>alert('Teacher Not Registered! Try Again');</script>";
        unset($_SESSION["reg"]);
      }
    } elseif (isset($_SESSION["classreg"])) {
      if ($_SESSION["classreg"][0] == true){
        echo "<script type='text/javascript'>alert('You are already registered for this class.');</script>";
        unset($_SESSION["classreg"]);
      } else {
        echo "<script type='text/javascript'>alert('Registration Successful');</script>";
        unset($_SESSION["classreg"]);
      }
    }
?>
