<?php

    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    session_unset();
    session_destroy(); 
?>
<div class="container">
<div class="jumbotron">
  <div class="container" style="color: white">
    <h1>Learn to play music</h1>
    <p>Come on down to Pineland Music School<br>
      We got all sorts of instruments, all sorts of sizes, and colors, that make all sorts different sounds!</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
</div>

<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">We got the best instruments</h3>
    </div>
    <div class="panel-body">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>

<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">We got the best instruments</h3>
    </div>
    <div class="panel-body">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>

<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">We got the best instruments</h3>
    </div>
    <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">We got the best instruments</h3>
    </div>
    <div class="panel-body">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>

</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
