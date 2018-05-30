<?php
$basename = 'Class Creation';
$form = 'teacherregform';
require_once("../../../resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");
require_once(LIBRARIES_PATH . "/isloggedin.php");
require_once(TEMPLATES_PATH . "/banner.php");
require_once(LIBRARIES_PATH . "/createclass.php");
require_once(TEMPLATES_PATH . $_SESSION["user"][4]);

?>

<div class="container">
  <form action="" name="classcreateform" method="POST" id="classcreateform">
    <div class="col-md-6">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Teachers Information</h3>
        </div>
        <div class="panel-body" >
          <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">Teacher :</td>
                <td id="cellright">
                  <select name="teacherId">
                  <option value="" disabled selected>Select</option>
                  <?php // List all teachers
                  // Will put into own function eventually too lazy right now
                  $sql = "SELECT Id, FirstName, LastName FROM teachersaccounts";
                  $stmt = $pdo->prepare($sql);
                  $stmt->execute();
                  $rows = $stmt->fetchAll();
                  echo $rows;
                  foreach ($rows as $row) {
                    $id = $row['Id'];
                    echo "<option value=". $id .">". $row['FirstName']." ". $row['LastName'] ."</option>";
                  }
                  ?>
                  </select>
              </td>
              </tr>
              <tr>
                <td id="cellleft">Start Date :</td>
                <td id="cellright"><input required type="date" class="date" name="startdate"></td>
              </tr>
              <tr>
                <td id="cellleft">End Date :</td>
                <td id="cellright"><input required type="date" class="date" name="enddate"></td>
              </tr>
              <tr>
                <td id="cellleft">Time :</td>
                <td id="cellright"><input id="time" type="time" name="time"></td>
              </tr>
              <tr>
                <td id="cellleft">Instruments :</td>
                <td id="cellright">
                  <select name="instrumentId">
                    <!-- Will change to list all available in DB !-->
                    <option value="" disabled selected>Select</option>
                    <?php // List all teachers
                    // Will put into own function eventually too lazy right now
                    $sql = "SELECT Id, Name FROM instruments";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $rows = $stmt->fetchAll();
                    echo $rows;
                    foreach ($rows as $row) {
                      $id = $row['Id'];
                      echo "<option name="."instrumentId"." value=". $id .">". $row['Name'] ."</option>";
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td id="cellleft">Description :</td>
                <td id="cellright">
                  <textarea required rows="4" cols="30" name="description"></textarea>
                </td>
              </tr>
              <tr>
                <td id="cellleft">Proficiency :</td>
                <td id="cellright">
                  <select name="proficiency">
                    <option value="" disabled selected>Select</option>
                    <option value="1">Novice</option>
                    <option value="2">Advcanced Beginner</option>
                    <option value="3">Competent</option>
                    <option value="4">Proficient</option>
                    <option value="5">Expert</option>

                  </select>
                </td>
              </tr>
              <tr>
                <td id="cellleft">Max Number of Students :</td>
                <td id="cellright">
                  <input type="number" placeholder="Max Number of Students" name="maxnumstu" min="1" max="10">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Lesson Cost :</td>
                <td id="cellright"><input required type="number" name="cost" placeholder="Cost"></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" class="btn btn-primary" value="submit" form="classcreateform">
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
