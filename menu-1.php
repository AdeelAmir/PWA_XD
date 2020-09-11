<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
  </head>
  <body style="background-color: #f2f2f2">

    <div id="side-drawer" class="position-fixed">
      <div class="h-100" style="background-color: #c6ced5;">
        <div class="p-4" style="background-color: #f6f9fa;">
          <div style="padding:1px;">
            <img src="assets/images/logo_icon.png" style="display: inline;">
            <p style="display: inline;padding-left: 15px;color:#FAAB00;padding-top: 10px;font-size: 17px;">Quick-ID</p>
          </div>
        </div>
        <div style="background-color: #f6f9fa !important; padding-top: 20px;" class="navigationbar">
          <ul id="links" class="list-group" onclick="closeSideDrawer()" style="background-color: #f6f9fa !important">
            <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="#" class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/howtouse.png"><span style="padding-left: 18px;font-size:13px;color: #34363891;">HOW TO USE?</span></a>
            <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="#" class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/about_active.png"><span style="padding-left: 18px;font-size:13px;color: #000000;"><strong>ABOUT QUICK-ID</strong></span></a>
            <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="#" class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/privacy.png"><span style="padding-left: 18px;font-size:13px;color: #34363891;;">PRIVACY</span></a>
            <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="#" class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/scanhistory.png"><span style="padding-left: 18px;font-size:13px;color: #34363891;">SCAN HISTORY</span></a>
            <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="#" class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/feedback.png"><span style="padding-left: 18px;font-size:13px;color: #34363891;">FEEDBACK</span></a>
          </ul>
        </div>
        <div>
          <p style="color: white;padding-top: 45px;padding-left: 30px;">Interested in integrating<br>Quick-ID?</p>
          <button type="button" style="background-color: #c6ced5;border: 1px solid white;color: white;padding:6px 12px 6px 12px;margin-left: 30px;margin-top: 10px;"><strong>CONTACT</strong></button>
          <div style="padding-top: 20px;padding-left: 30px;margin-top: 10px;">
            <img src="assets/images/Social.png" /> <span style="padding-left:13px;color:white; font-size: 13px;">Designed by Quick-ID</span>
          </div>
        </div>
      </div>
    </div>
    <div id="side-drawer-void" class="position-fixed d-none" onclick="closeSideDrawer()"></div>

    <nav class="navbar navbar-dark fixed-top" style="background-color: #f2f2f2;">
      <button class="navbar-toggler" type="button" onclick="openSideDrawer()">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h5 class="navbar-text textStyle" style="color: #fec169 !important">
        Quick-ID
      </h5>
      <span class="navbar-text" style="color: #fffff !important">
        <i class="fa fa-sun-o" aria-hidden="true" style="font-size:24px;cursor:pointer;"></i>
      </span>
    </nav>

    <main class="container my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h5 class="white_clr text-center" style="margin-top:50px;">Scan the front side</h5>
            <center>
            <div style="width:320px;height:320px;margin-top:50px; background-image: url('assets/images/scanner_frame.png')">
              <center><video width="270" height="270" style="margin-top:20px;" autoplay></video></center>
            </div>
            </center>
          </div>
        </div>
      </div>
    </main>

    <?php require_once('includes/footer.php'); ?>
    <script>
    navigator.mediaDevices.getUserMedia({
        video: {
            facingMode: 'environment',
        }
        })
        .then((stream) => {
        const video = document.querySelector('video');
        video.srcObject = stream;
        const track = stream.getVideoTracks()[0];
        video.addEventListener('loadedmetadata', (e) => {
            window.setTimeout(() => (
            onCapabilitiesReady(track.getCapabilities())
            ), 500);
        });
        function onCapabilitiesReady(capabilities) {
            console.log(capabilities);
        }
        })
        .catch(err => console.error('getUserMedia() failed: ', err));
    </script>
  </body>
</html>
