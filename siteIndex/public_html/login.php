<?php
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>
<div class="container" id="loginbox">
  <div class="panel" style="background-color: unset; -webkit-box-shadow: unset; box-shadow: unset;">
    <div class="panel-body">
      <ul class="list-group">
       <li class="list-group-item"><h4>Username</h4></li>
       <li class="list-group-item"><input/></li>
       <li class="list-group-item"><h4>Password</h4></li>
       <li class="list-group-item"><input/></li>
       <li class="list-group-item"><input type="submit"></li>
       <li class="list-group-item" style="height: 45px"><hr style="border-top: dotted 1px;" /></li>
       <li class="list-group-item" style="text-align: left; border: 0px"><a href=#>Forgot Password</a></li>
       <li class="list-group-item" style="text-align: left; border: 0px"><a href=#>Register Here</a></li>
      </ul>
    </div>
  </div>
</div>


<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
