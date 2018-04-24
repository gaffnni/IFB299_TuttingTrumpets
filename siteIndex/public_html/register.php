<?php
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/banner.php");
?>

<div class="container">
<form action="/action_page.php" method="get">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Student Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright"><input required  type="text" name="fname" placeholder="Given Names"></td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright"><input required  type="text" placeholder="Family Name" name="lname"></td>
              </tr>
              <tr>
                <td id="cellleft">Password :</td>
                <td id="cellright"> <input required type="password" name="pwd" placeholder="Password"></td>
              </tr>
              <tr>
                <td id="cellleft">Date of Birth :</td>
                <td id="cellright"><input required type="date" name="bday"></td>
              </tr>
              <tr>
                <td id="cellleft">Address :</td>
                <td id="cellright"><textarea required rows="4" cols="30" placeholder=""></textarea></td>
              </tr>
              <tr>
                <td id="cellleft">Gender :</td>
                <td id="cellright"><input type="radio" name="gender" value="male"> Male<br>
                  <input type="radio" name="gender" value="female"> Female<br>
                  <input type="radio" name="gender" value="other"> Other </td>
              </tr>
              <tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright"><input required type="tel" name="tel" placeholder="Phone Number"></td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright"><input required type="email" name="usremail" placeholder="Email"></td>
              </tr>
              <tr>
                <td id="cellleft">Facebook :</td>
                <td id="cellright"><input type="url" name="fburl" placeholder="Facebook URL"></td>
              </tr>
              <tr>
                <td id="cellleft">Instrument Hire :</td>
                <td id="cellright"> <select>
                  <!-- Will change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">saxophone</option>
                  <option value="trumpet">trumpet</option>
                  <option value="marraccas">marraccas</option>
                  <option value="triangle">triangle</option>
                </select> </td>
              </tr>
              <tr>
                <td id="cellleft">Has Own Instrument :</td>
                <td id="cellright"><input type="checkbox" name="hasinst" value="true"></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" class="btn btn-primary" value="Submit">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Parent Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright"><input type="text" placeholder="Given Names" name="pfname"></td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright"><input type="text" placeholder="Family Name" name="plname"></td>
              </tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright"><input type="tel" name="ptel"></td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright"><input type="email" name="pusremail"></td>
              </tr>
            </tbody>
          </table>
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
