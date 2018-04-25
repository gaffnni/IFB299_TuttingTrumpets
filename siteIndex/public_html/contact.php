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
    <h2>Contact Us</h2>
    
  </div>
</div>
<div class="row">
<div class="jumbotron col-lg-7">
  <div class="container">
	  <h3>General Enquiry</h3>
	  <div class="panel">
		   <h5>Phone: 1800 pinelands</h5>
		</div>
	  <div class="panel">
		   <h5>Email: info@pineland.com</h5>
		</div>
	  <div class="panel">
		   <h5>Fax: 12345</h5>
		</div>
	  <div class="panel">
		   <address>
			  <strong>Pineland.</strong><br>
			  234 pinestreet, pinefields<br>
			  Pinetown<br>
			  <abbr title="Phone">P:</abbr> 1800 pineland
			</address>
		</div>
	</div>
	
  </div>
	
	<pre>map here<pre><br></br><br></br><br></br></pre></pre>

</div>
<div class="jumbotron">


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
