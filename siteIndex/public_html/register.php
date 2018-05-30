<?php
    $form = 'sturegform';
    $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
    require_once("../resources/config.php");
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
              <tr>
                <td id="cellleft">Username :</td>
                <td id="cellright">
                  <input required type="username" name="username" placeholder="Username">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Password :</td>
                <td id="cellright">
                  <input required type="password" name="password" placeholder="Password">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Date of Birth :<br><p class="text-muted"> Under 18 will be required</br>to give parent information<p></td>
                <td id="cellright">
                  <input required type="date" class="bday" name="dob">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Address :</td>
                <td id="cellright">
                  <textarea required rows="4" cols="30" placeholder="" name="address"></textarea>
                </td>
              </tr>
              <tr>
                <td id="cellleft">Gender :</td>
                <td id="cellright"><input type="radio" name="gender" value="male"> Male<br>
                  <input type="radio" name="gender" value="female"> Female<br>
                  <input type="radio" name="gender" value="other"> Other
                </td>
              </tr>
              <tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright">
                  <input required type="tel" name="mobphone" placeholder="Phone Number">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright">
                  <input required type="email" name="email" placeholder="Email">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Facebook :</td>
                <td id="cellright">
                  <input type="url" name="fburl" placeholder="Facebook URL">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Require Instrument Hire :</td>
                <td id="cellright">
                  <input type="checkbox" name="reqinst" value="1">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Instrument Hire :</td>
                <td id="cellright"> <select>
                  <!-- Change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">saxophone</option>
                  <option value="trumpet">trumpet</option>
                  <option value="marraccas">marraccas</option>
                  <option value="triangle">triangle</option>
                </select> </td>
              </tr>

            </tbody>
          </table>
          <input type="submit" class="btn btn-primary" value="Register" form="regform" style="width: 100%;">
      </div>
    </div>
  </div>
  <div class="col-md-6 pinput" id="pinput">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Parent Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :
                </td>
                <td id="cellright">
                  <input type="text" placeholder="Given Names" name="pfname">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :
                </td>
                <td id="cellright">
                  <input type="text" placeholder="Family Name" name="plname">
                </td>
              </tr>
                <td id="cellleft">Phone Number :
                </td>
                <td id="cellright">
                  <input type="tel" name="ptel">
                </td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright">
                  <input type="email" name="pemail">
                </td>
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
