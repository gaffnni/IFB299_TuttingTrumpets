<?php
    require_once("resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>
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

<div class="jumbotron">
  <div class="container">
    <h1>Learn to play various instruments</h1>
    <p>Come on down to Pineland Music School<br>
    We got all sorts of instruments, all sorts of sizes, and colors, that make all sorts different sounds!</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
</div>


  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">We got the best instruments</h3>
      </div>
      <div class="panel-body">
        Such as a saxaphone, piano, and other sorts!
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">We got the best instruments</h3>
      </div>
      <div class="panel-body">
        Such as a saxaphone, piano, and other sorts!
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">We got the best instruments</h3>
      </div>
      <div class="panel-body">
        Such as a saxaphone, piano, and other sorts!
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">We got the best instruments</h3>
      </div>
      <div class="panel-body">
        Such as a saxaphone, piano, and other sorts!
      </div>
    </div>
  </div>
  <nav class="navbar fixed-bottom">
    <div class="col-md-4 col-md-offset-4">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
</div>
</body>
</html>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
