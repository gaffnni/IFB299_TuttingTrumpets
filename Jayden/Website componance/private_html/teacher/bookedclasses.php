<?php
    $basename = 'Available Courses';
    require_once("../../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
    require_once(TEMPLATES_PATH . $_SESSION["user"][3]);
?>

<div class="container">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="regform" method="POST" id="regform">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Teacher view classes</h3>
      </div>
      <div class="panel-body" >
        <table class="table table-bordered table-striped">

        <tr>
          <th>#</th>
          <th>Class Title</th>
          <th>Description</th>
          <th>Date/Time</th>
        </tr>
	  	<tbody>
        <tr>
          <th scope="row">1</th>
          <td id="title"> </td>
          <td id="desc"></td>
          <td id="date"> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td id="title"> </td>
          <td id="desc"></td>
          <td id="date"> </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td id="title"> </td>
          <td id="desc"></td>
          <td id="date"> </td>
        </tr>
		<tr>
          <th scope="row">4</th>
          <td id="title"> </td>
          <td id="desc"></td>
          <td id="date"> </td>
        </tr>
      	</tbody>


          </table>
          <input type="submit" class="btn btn-primary" value="submit" form="regform">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-body" style="padding-top: 75px">
        <img src="img/logo.jpg" height=100% width=100% style="border: 2px solid black">
      </div>
    </div>
  </div>

</form>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
