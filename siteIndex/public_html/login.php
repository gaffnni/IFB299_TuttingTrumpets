<?php
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>
<<<<<<< HEAD

<html lang="en">
  <head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  </head>
=======
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
>>>>>>> da899f3faba1c08751ca4b812739db79f57e0a70

  <body class="text-center">
	  <div class="container">
    <form class="form-signin col-lg-5 col-md-6 col-sm-8 col col-xs-9">
      <h1 class="h3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control " placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
	  </div>
  </body>
</html>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
