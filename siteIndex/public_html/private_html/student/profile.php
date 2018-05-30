<?php
    $form = 'sturegform';
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
    require_once(LIBRARIES_PATH . "/registerfunc.php");
?>
<div class="container">
<form onsubmit="return validateForm()" action="" name="regform" method="POST" id="regform" >
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Student Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
			<tr>
                <td id="cellleft">
					<img src="../../img/profilepic.png" height=80 width=80 style="border: 2px solid black">
				</td>
                <td id="cellright">
                  <input type="submit" class="btn btn-primary" value="submit" form="picbutton">
                </td>
              </tr>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright">
                  <input required  type="text" name="firstname" placeholder="Given Names">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright">
                  <input required  type="text" placeholder="Family Name" name="lastname">
                </td>
              </tr>
                <td id="cellleft">About Me :</td>
                <td id="cellright">
                  <textarea required rows="4" cols="30" placeholder="" name="address">
                  </textarea></td>
              </tr>
              <tr>
                <td id="cellleft">Instrument 1 :</td>
                <td id="cellright"> <select>
                  <!-- Change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">saxophone</option>
                  <option value="trumpet">trumpet</option>
                  <option value="marraccas">marraccas</option>
                  <option value="triangle">triangle</option>
                </select> </td>
              </tr>
		  <div class="col-md-6 col-md-offset-6">
		      <tr>
                <td id="cellleft">Start Level :</td>
                <td id="cellright"> <select>
                  <!-- Change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">Beginner</option>
                  <option value="trumpet">Tntermediate</option>
                  <option value="marraccas">Expert</option>
                </select> </td>
              </tr>
		  </div>
              <tr>
                <td id="cellleft">Instrument 2 :</td>
                <td id="cellright"> <select>
                  <!-- Change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">saxophone</option>
                  <option value="trumpet">trumpet</option>
                  <option value="marraccas">marraccas</option>
                  <option value="triangle">triangle</option>
                </select> </td>
              </tr>
		  <div class="col-md-6 col-md-offset-6">
		      <tr>
                <td id="cellleft">Start Level :</td>
                <td id="cellright"> <select>
                  <!-- Change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">Beginner</option>
                  <option value="trumpet">Tntermediate</option>
                  <option value="marraccas">Expert</option>
                </select> </td>
              </tr>
		  </div>
              <tr>
                <td id="cellleft">Avalibale Classes :</td>
		      </tr>
		  		<tr>
				  <td id="cellleft">
				<img src="../../img/calendar.gif" height=100% width=100% style="border: 2px solid black">
				  </td>
              </tr>

            </tbody>
          </table>
      </div>
    </div>
  </div>
<input type="submit" class="btn btn-primary" value="submit" form="regform">
</form>
</div>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
