<?php
$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
require_once("../resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");
require_once(TEMPLATES_PATH . "/banner.php");
?>

<div class="container">
  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">General Inquiries</h3>
      </div>
      <div class="panel-body" id="contactdet">
        <table class="table">
            <tbody>
              <tr>
                <td id="cellleft">Phone:</td>
                <td id="cellright">+88 6645 9985</td>
              </tr>
              <tr>
                <td id="cellleft">Email:</td>
                <td id="cellright">hello@pinelandmusic.com</td>
              </tr>
              <tr>
                <td id="cellleft">Fax:</td>
                <td id="cellright">+88 6645 9986</td>
              </tr>
              <tr>
                <td id="cellleft">Address:</td>
                <td id="cellright">68/798 Gumtree Road<br>
                  Pineland 6577<br>
                  Forest Country
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel">
      <iframe width=100% height=600px frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKYImb3eGk2sRMKje81qjAgU&key=AIzaSyDPgUfyiWPK76IytvsJ6-hfmEPOpl6NOLg" allowfullscreen></iframe>
    </div>
  </div>
</div>


<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>
