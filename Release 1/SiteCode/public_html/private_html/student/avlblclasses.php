<?php
$basename = 'Available Courses';
require_once("../../../resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");
require_once(LIBRARIES_PATH . "/isloggedin.php");
require_once(TEMPLATES_PATH . "/banner.php");
if (!isset($_SESSION["user"])) {
  header('Location: ../login.php');
}
require_once(TEMPLATES_PATH . $_SESSION["user"][3]);

?>

<div class="container">
  <form action="<?php echo STUDENT_PATH . '/regclass.php';?>" name="classregform" method="POST" id="classregform">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Student Register for classes</h3>
        </div>
        <div class="panel-body" >
          <table class="table">
            <tr>
              <th>#</th>
              <th>Class Title</th>
              <th>Description</th>
              <th>Difficulty</th>
              <th>Teacher</th>
              <th>Duration</th>
            </tr>
            <tbody>
              <?php require_once(LIBRARIES_PATH . "/getclasses.php"); ?>
            </tbody>
          </table>
          <input type="submit" class="btn btn-primary" value="submit" form="classregform">
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
