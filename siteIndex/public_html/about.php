<?php
    require_once("../resources/config.php");
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
	<h2>About Us</h2>
  </div>
</div>
	<div class="col-md-12">
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">Heading</h3>
	  </div>
	  <div class="panel-body">
		Such as a saxaphone, piano, and other sorts! We got all sorts of instruments, all sorts of sizes, and colors, that make all sorts different sounds! We got all sorts of instruments, all sorts of sizes, and colors, that make all sorts different sounds! We got all sorts of instruments, all sorts of sizes, and colors, that make all sorts different sounds!
	  </div>
	</div>
  </div>
  <div class="col-md-12">
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">Message from the Director</h3>
	  </div>
	  <blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
	</div>
  </div>
</div>
<div class="jumbotron">
	<div class="container">
	<p>Some random pic</p>
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
