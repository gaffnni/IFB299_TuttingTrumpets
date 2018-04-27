<?php
    $basename = "Registration Successful";
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>

<div class="container">
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Click to Log In</h3>
      </div>
      <div class="panel-body">
        <a class="btn btn-primary" href="login.php">Log In</a>
      </div>
    </div>
  </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
