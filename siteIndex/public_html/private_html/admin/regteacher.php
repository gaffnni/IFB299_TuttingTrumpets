<?php
    $basename = 'Teacher Registration';
    $form = 'teacherregform';
    require_once("../../../resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(LIBRARIES_PATH . "/isloggedin.php");
    require_once(TEMPLATES_PATH . "/banner.php");
    require_once(LIBRARIES_PATH . "/registerfunc.php");
    require_once(TEMPLATES_PATH . $_SESSION["user"][4]);
?>

<div class="container">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="regform" method="POST" id="regform">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Teachers Information</h3>
      </div>
      <div class="panel-body" >
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">First Name :</td>
                <td id="cellright"><input required  type="text" name="firstname" placeholder="Given Names"></td>
              </tr>
              <tr>
                <td id="cellleft">Last Name :</td>
                <td id="cellright"><input required  type="text" placeholder="Family Name" name="lastname"></td>
              </tr>
              <tr>
                <td id="cellleft">Username :</td>
                <td id="cellright"> <input required type="username" name="username" placeholder="Username"></td>
              </tr>
              <tr>
                <td id="cellleft">Password :</td>
                <td id="cellright"> <input required type="password" name="password" placeholder="Password"></td>
              </tr>
              <tr>
                <td id="cellleft">Date of Birth :<br><p class="text-muted"> Under 18 will be required</br>to give parent information<p></td>
                <td id="cellright"><input required type="date" class="bday" name="dob"></td>
              </tr>
              <tr>
                <td id="cellleft">Address :</td>
                <td id="cellright"><textarea required rows="4" cols="30" placeholder="" name="address"></textarea></td>
              </tr>
              <tr>
                <td id="cellleft">Gender :</td>
                <td id="cellright"><input type="radio" name="gender" value="male"> Male<br>
                  <input type="radio" name="gender" value="female"> Female<br>
                  <input type="radio" name="gender" value="other"> Other </td>
              </tr>
              <tr>
                <td id="cellleft">Phone Number :</td>
                <td id="cellright"><input required type="tel" name="mobphone" placeholder="Phone Number"></td>
              </tr>
              <tr>
                <td id="cellleft">Email :</td>
                <td id="cellright"><input required type="email" name="email" placeholder="Email"></td>
              </tr>
              <tr>
                <td id="cellleft">Language :</td>
                <td id="cellright"> <select>
                  <!-- Will change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="english">English</option>
                  <option value="Spanish">Spanish</option>
                  <option value="french">French</option>
                  <option value="mandarin">Mandarin</option>
				          <option value="arabic">Arabic</option>
                </select> </td>
              </tr>
              <tr>
                <td id="cellleft">Instruments :</td>
                <td id="cellright"> <select>
                  <!-- Will change to list all available in DB !-->
                  <option value="" disabled selected>Select</option>
                  <option value="saxophone">Saxophone</option>
                  <option value="trumpet">Trumpet</option>
                  <option value="marrccas">Marrccas</option>
                  <option value="triangle">Triangle</option>
                </select> </td>
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
        <img src="<?php echo IMAGES_PATH . '/logo.jpg'?>" height=100% width=100% style="border: 2px solid black">
      </div>
    </div>
  </div>

</form>
</div>

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
