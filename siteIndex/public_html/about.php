<?php
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>

<div class="container">
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">A message from the Director</h3>
      </div>
      <div class="panel-body">Music comes from the sounds of vibrations whizzing through the air to pleasure our ear senses – Mika Williams Pinelands Music School founder<br><br>
Established in 2018, Pinelands Music School aims to educate the young generation of all ages above 10 about the beauty of music and instrument playing. We have a fabulous group of highly experienced teaching staff, carefully selected by our founder Mika through a rigorous hiring process. Our qualified teachers have years of experience teaching common instruments such as but not limited to the guitar, piano, cello, voice  and percussion. Our teachers can also provide lessons on ethic instruments such as the Harmonium, Tablas, Santurs and Vinas if desired, bringing the cultural aspect of music to life in our classrooms. Students also have the options to express interest in having a teacher with certain language skills for international students or students with minimal English abilities.<br><br>
Pinelands music school is open to children above the age of 10. Registration can be done through our easy registration link above. Don’t have an instrument? Not a problem! Registered students can hire instruments through our instrument rental page.Think you’re qualified to join our tremendously talented teaching staff? Contact Mika through our contacts us page!
So come along and join our wonderous music school guaranteed to provide joy in our lives through learning and musicality!
</div>
    </div>
  </div>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
