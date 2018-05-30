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
      <p><a class="btn btn-primary btn-lg" href="/about.php" role="button">Learn more</a></p>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Voice:</h3>
    </div>
    <div class="panel-body">
      Here at pinelands music school, we believe that singing comes the soul rather than the voice. Whether you sing professionally or just in the shower, our brilliant teaching crew can train your vocals to really feel that internal passion in your voice just waiting to be released.
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Drums:</h3>
    </div>
    <div class="panel-body">
      When ordinary people think of drums they think of sticks hitting woods. However there’s much more to it. Students will learn that playing the drums is an art form requiring precision and accuracy in timing which our staff can teach to perfection.
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Ethnic Instruments:</h3>
    </div>
    <div class="panel-body">
    Brisbane s known for being a multicultural society, and here at Pinelands music school we aim to promote this wonderful idea of multiculturalism by providing lessons in ethnic instruments such as the the harmonium, Tablas, Santurs, Vina and many others. Contact our friendly staff for information on what ethnic instruments we can teach!
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Our Staff:</h3>
    </div>
    <div class="panel-body">
      Our teaching staff consists of 7 professional musicians all carefully chosen by Mika through a rigorous hiring process, sign through firm contracts. Music teachers here all have a PHD in music and teaching and more than 5 years teaching experience of all different kinds of students.
    </div>
  </div>
</div>
</div>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
