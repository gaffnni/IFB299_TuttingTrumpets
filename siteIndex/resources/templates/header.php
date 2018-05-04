<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . '/css.css'?>">
</head>
<body>

<div class="container">
  <header class="blog-header">
    <div class="text-center blog-header-logo">
      <h1>
        Pinelands Music School
      </h1>
    </div>
    <img src="<?php echo IMAGES_PATH . '/icon.png'?>" style="position: absolute" />
    <img class="img-hor" src="<?php echo IMAGES_PATH . '/icon.png'?>" />
  </header>

  <nav class="col-md-6 col-md-offset-3 navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo INDEX_PATH . 'index.php'?>">Home</a></li>
        <li><a href="<?php echo INDEX_PATH . 'about.php'?>">About</a></li>
        <li><a href="<?php echo INDEX_PATH . 'contact.php'?>">Contact</a></li>
        <li><a href="<?php echo INDEX_PATH . 'login.php'?>">Log In</a></li>
        <li><a href="<?php echo INDEX_PATH . 'register.php'?>">Register</a></li>
      </ul>
  </nav>

</div>
