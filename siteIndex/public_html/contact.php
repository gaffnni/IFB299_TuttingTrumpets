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
=======
<div class="container">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">General Inquiries</h3>
      </div>
      <div class="panel-body" id="contactdet">
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">Phone:</td>
                <td id="cellright">+88 6645 9985</td>
              </tr>
              <tr>
                <td id="cellleft">Email:</td>
                <td id="cellright">hello@pinelandmusic.com</td>
              </tr>
              <tr>
                <td id="cellleft">Fax:</td>
                <td id="cellright">+88 6645 9986</td>
              </tr>
              <tr>
                <td id="cellleft">Address:</td>
                <td id="cellright">68/798 Gumtree Road<br>
                  Pineland 6577<br>
                  Forest Country
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <iframe width=100% height=600px frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKYImb3eGk2sRMKje81qjAgU&key=AIzaSyDPgUfyiWPK76IytvsJ6-hfmEPOpl6NOLg" allowfullscreen></iframe>
    </div>
  </div>
</div>
>>>>>>> da899f3faba1c08751ca4b812739db79f57e0a70

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
