<?php
    $basename = 'Your Booked Classes';
    require_once("../../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(LIBRARIES_PATH . "/isloggedin.php");
    require_once(TEMPLATES_PATH . "/banner.php");
    require_once(TEMPLATES_PATH . $_SESSION["user"][4]);
?>

<div class="container">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="regform" method="POST" id="regform">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Teacher view classes</h3>
      </div>
      <div class="panel-body" >
        <table class="a table table-bordered table-striped">
        <tr>
          <th>Class Title</th>
          <th>Description</th>
          <th>Proficiency</th>
          <th>Date/Time</th>
          <th>Number of Students</th>
          <!-- <th>Students Pending</th> -->
          <th>Add or Remove Students</th>
        </tr>
	  	<tbody>
        <tr>
          <?php require_once(LIBRARIES_PATH . "/getclasses.php"); ?>
        </tr>

      	</tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-body" style="padding-top: 75px">
        <img src="<?php echo IMAGES_PATH . '/logo.jpg'?>" height=100% width=100% style="border: 2px solid black">
      </div>
    </div>
  </div>

</form>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
