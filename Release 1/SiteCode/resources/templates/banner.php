<?php
if ($basename == 'contact' or $basename == 'about') {
  $basename = $basename . ' us';
}

if ($basename == 'login') {
  $basename = 'Sign In';
}

?>
<div class="container">
  <div id="banner" style="color: white">
    <h1>
      <?php echo ucwords($basename) ?>
    </h1>
  </div>
</div>
