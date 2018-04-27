<?php
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>

<<<<<<< HEAD
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}
.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}
</style>
<body>

<div class="container">
  <header class="blog-header py-3">
    <div class="text-center blog-header-logo">
      <h1>
        Pinelands Music School
      </h1>
    </div>
  </header>
  <nav class="navbar navbar-inverse">
    <div class="col-md-4 col-md-offset-4">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>

<div clss="container">
	<div class="jumbotron">
		<h2>Register</h2>
	</div>
	<div class="jumbotron">
		<h2>Student</h2>
		<form>
		  <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  </div>
			
	</div>
</div>

=======
<div class="container">
<form action="/action_page.php" method="get">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Student Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright"><input required  type="text" name="fname" placeholder="Given Names"></td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright"><input required  type="text" placeholder="Family Name" name="lname"></td>
              </tr>
              <tr>
                <td id="cellleft">Password :</td>
                <td id="cellright"> <input required type="password" name="pwd" placeholder="Password"></td>
              </tr>
              <tr>
                <td id="cellleft">Date of Birth :<br><p class="text-muted"> Under 18 will be required</br>to give parent information<p></td>
                <td id="cellright"><input required type="date" class="bday" name="bday"></td>
              </tr>
              <tr>
                <td id="cellleft">Address :</td>
                <td id="cellright"><textarea required rows="4" cols="30" placeholder=""></textarea></td>
              </tr>
              <tr>
                <td id="cellleft">Gender :</td>
                <td id="cellright"><input type="radio" name="gender" value="male"> Male<br>
                  <input type="radio" name="gender" value="female"> Female<br>
                  <input type="radio" name="gender" value="other"> Other </td>
              </tr>
              <tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright"><input required type="tel" name="tel" placeholder="Phone Number"></td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright"><input required type="email" name="usremail" placeholder="Email"></td>
              </tr>
              <tr>
                <td id="cellleft">Facebook :</td>
                <td id="cellright"><input type="url" name="fburl" placeholder="Facebook URL"></td>
              </tr>
              <tr>
                <td id="cellleft">Instrument Hire :</td>
                <td id="cellright"> <select>
                  <!-- Will change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">saxophone</option>
                  <option value="trumpet">trumpet</option>
                  <option value="marraccas">marraccas</option>
                  <option value="triangle">triangle</option>
                </select> </td>
              </tr>
              <tr>
                <td id="cellleft">Has Own Instrument :</td>
                <td id="cellright"><input type="checkbox" name="hasinst" value="true"></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" class="btn btn-primary" value="Submit">
      </div>
    </div>
  </div>
  <div class="col-md-6 pinput" id="pinput">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Parent Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright"><input required type="text" placeholder="Given Names" name="pfname"></td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright"><input required type="text" placeholder="Family Name" name="plname"></td>
              </tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright"><input required type="tel" name="ptel"></td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright"><input required type="email" name="pusremail"></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-body" style="padding-top: 75px">
        <img src="img/logo.jpg" height=100% width=100% style="border: 2px solid black">
      </div>
    </div>
  </div>

</form>
</div>

>>>>>>> da899f3faba1c08751ca4b812739db79f57e0a70

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
