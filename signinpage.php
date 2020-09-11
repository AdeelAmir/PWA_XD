<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-bottom:30px;">
        <div class="col-md-12">
          <div class="alert alert-danger mt-5" role="alert" id="wrong_password_alert" style="display:none;">
            <strong>Password Failed</strong> Please try again.
          </div>
          <div style="margin-top:11em;cursor: pointer;" class="text-center">
            <img src="assets/images/5_image.png" style="cursor: pointer;" class="img-fluid" />
          </div>
          <div class="mt-4">
              <h1 class="golden_clr text-center textStyle">Quick-ID</h1>
              <p class="text-center" style="text-align:center;color:#8f9eac;">Accurate Scans, Accesible Data</p>
          </div>
          <div class="text-center mt-5">
              <button type="button" name="password_btn" class="btn" style="background-color:white;color:#8f9eac;">Demo Password</button>
              <p class="text-center" style="text-align:center;color:#8f9eac;margin-top:1em;">Sign In</p>
          </div>
        </div>
      </div>
    </div>
    <?php require_once('includes/footer.php'); ?>
  </body>
</html>
