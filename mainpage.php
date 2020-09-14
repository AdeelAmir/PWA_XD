<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
    <style>
      a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        font-size: 12px !important;
      }
    </style>
</head>
<body style="background-color: #f2f2f2">

<div id="side-drawer" class="position-fixed">
    <div class="h-100" style="background-color: #c6ced5;">
        <div class="p-4" style="background-color: #f6f9fa;">
            <div style="padding:1px;">
                <img src="assets/images/logo_icon.png" style="display: inline;">
                <p style="display: inline;padding-left: 15px;color:#FAAB00;padding-top: 10px;font-size: 17px;">
                    Quick-ID</p>
            </div>
        </div>
        <div style="background-color: #f6f9fa !important; padding-top: 20px;" class="navigationbar">
            <ul id="links" class="list-group" onclick="closeSideDrawer()" style="background-color: #f6f9fa !important">
                <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="index.php"
                   class="list-group-item list-group-item-action border-0 rounded-0"><img
                            src="assets/images/howtouse.png"><span
                            style="padding-left: 18px;font-size:13px;color: #34363891;">HOW TO USE?</span></a>
                <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="about.php"
                   class="list-group-item list-group-item-action border-0 rounded-0"><img src="assets/images/about.png"><span
                            style="padding-left: 18px;font-size:13px;color: #34363891;">ABOUT QUICK-ID</span></a>
                <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="privacy.php"
                   class="list-group-item list-group-item-action border-0 rounded-0"><img
                            src="assets/images/privacy.png"><span
                            style="padding-left: 18px;font-size:13px;color: #34363891;;">PRIVACY</span></a>
                <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="scanhistory2.php"
                   class="list-group-item list-group-item-action border-0 rounded-0"><img
                            src="assets/images/scanhistory.png"><span
                            style="padding-left: 18px;font-size:13px;color: #34363891;">SCAN HISTORY</span></a>
                <a style="background-color: #f6f9fa !important; padding-left: 30px;" id="link-structure" href="feedback.php"
                   class="list-group-item list-group-item-action border-0 rounded-0"><img
                            src="assets/images/feedback.png"><span
                            style="padding-left: 18px;font-size:13px;color: #34363891;">FEEDBACK</span></a>
            </ul>
        </div>
        <div>
            <p style="color: white;padding-top: 45px;padding-left: 30px;">Interested in integrating<br>Quick-ID?</p>
            <button type="button"
                    style="background-color: #c6ced5;border: 1px solid white;color: white;padding:6px 12px 6px 12px;margin-left: 30px;margin-top: 10px;">
                <strong>CONTACT</strong></button>
            <div style="padding-top: 20px;padding-left: 30px;margin-top: 10px;">
                <img src="assets/images/Social.png"/> <span style="padding-left:13px;color:white; font-size: 13px;">Designed by Quick-ID</span>
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
    <span class="navbar-text" style="color: #fff !important;">
        <i class="fa fa-sun-o" aria-hidden="true" style="font-size:24px;cursor:pointer;"></i>
    </span>
</nav>

<!-- Hamza Code Starts Here -->
<main class="container" style="margin-top: 65px;">
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane container active" id="tab1">
                  <h5 class="white_clr text-center" style="margin-top:30px;">Scan the front side</h5>
                  <center>
                  <div style="width:320px;height:320px;margin-top:30px; background-image: url('assets/images/scanner_frame.png')">
                    <center><video id="passportvideo" width="270" height="270" style="margin-top:20px;" autoplay></video></center>
                  </div>
                  </center>
                </div>
                <div class="tab-pane container" id="tab2">
                  <h5 class="white_clr text-center" style="margin-top:30px;">Scan the front side</h5>
                  <center>
                  <div style="width:320px;height:320px;margin-top:30px; background-image: url('assets/images/scanner_frame.png')">
                    <center><video id="idcardvideo" width="270" height="270" style="margin-top:20px;" autoplay></video></center>
                  </div>
                  </center>
                </div>
                <div class="tab-pane container" id="tab3">
                    <h5 class="white_clr text-center" style="margin-top:30px;">Scan the front side</h5>
                    <center>
                    <div style="width:320px;height:320px;margin-top:30px; background-image: url('assets/images/scanner_frame.png')">
                      <center><video id="driverlicensevideo" width="270" height="270" style="margin-top:20px;" autoplay></video></center>
                    </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Bottom Bar Mobile -->
        <div id="mobile-bottom-bar">
            <!-- Tabs Should Display Here -->
            <div class="priceCalculatorData3">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white bottomNavigation active bottom-nav-active" id="tab1" data-toggle="tab" href="#tab1">PASSPORT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white bottomNavigation" data-toggle="tab" id="tab2" href="#tab2">ID CARD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white bottomNavigation" data-toggle="tab" id="tab3" href="#tab3">DRIVER'S LICENCE</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tabs Should Display Here -->

            <div class="priceCalculatorData2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row" style="margin: auto 0 !important;">
                            <div style="float: right; width: 100%;">
                                    <span class="title">
                                        Choose the country
                                    </span>
                                <br>
                                <span class="title2">
                                        Germany
                                    </span>
                                <span style="float: right; margin-top: -12px; cursor: pointer;"
                                      id="openContactsPage">
                                        <img src="assets/images/angle-up.png" alt="angle-up" class="img-fluid"
                                             style="width: 16px;"/>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar Mobile -->
    </div>

    <div id="contactsPage" style="display: none;">
        <nav class="navbar navbar-light" style="background-color: #002746; height: 10%; color: #fff;">
            <p style="font-size:18px; margin: auto 0;" class="text-center white_clr w-100"><b>Select Country</b><span
                        id="hidePage"
                        style="font-size:13px; cursor: pointer; position: absolute; right: 25px; top: 38%;">Cancel</span>
            </p>
        </nav>
        <div style="padding: 0 20px 10px 20px; background-color: #002746;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"
                          style="border-top-left-radius: 50%; border-bottom-left-radius: 50%; background-color: #ffffff !important; border: 0 solid #ced4da; !important;"><i
                                class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                       aria-describedby="basic-addon1"
                       style="border-top-right-radius: 1.25rem; border-bottom-right-radius: 1.25rem; border: 0 solid #ced4da; !important;"/>
            </div>
        </div>

        <div id="countryList">
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">A</div>
                <ul>
                    <li>Afghanistan</li>
                    <li>Akrotiri</li>
                    <li>Albania</li>
                    <li>Algeria</li>
                    <li>American Samoa</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">B</div>
                <ul>
                    <li>Bahamas, The</li>
                    <li>Bahrain</li>
                    <li>Bangladesh</li>
                    <li>Barbados</li>
                    <li>Bassas da India</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">C</div>
                <ul>
                    <li>Cambodia</li>
                    <li>Cameroon</li>
                    <li>Canada</li>
                    <li>Cape Verde</li>
                    <li>Cayman Islands</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">D</div>
                <ul>
                    <li>Denmark</li>
                    <li>Dhekelia</li>
                    <li>Djibouti</li>
                    <li>Dominica</li>
                    <li>Dominican Republic</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">E</div>
                <ul>
                    <li>Ecuador</li>
                    <li>Egypt</li>
                    <li>El Salvador</li>
                    <li>Equatorial Guinea</li>
                    <li>Eritrea</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">F</div>
                <ul>
                    <li>Falkland Islands (Islas Malvinas)</li>
                    <li>Faroe Islands</li>
                    <li>Fiji</li>
                    <li>Finland</li>
                    <li>France</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">G</div>
                <ul>
                    <li>Gabon</li>
                    <li>Gambia, The</li>
                    <li>Gaza Strip</li>
                    <li>Georgia</li>
                    <li>Germany</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">H</div>
                <ul>
                    <li>Haiti</li>
                    <li>Heard Island and McDonald Islands</li>
                    <li>Holy See (Vatican City)</li>
                    <li>Honduras</li>
                    <li>Hong Kong</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">I</div>
                <ul>
                    <li>Iceland</li>
                    <li>India</li>
                    <li>Indonesia</li>
                    <li>Iran</li>
                    <li>Iraq</li>
                </ul>
            </div>
            <div class="ioslist-group-container">
                <div class="ioslist-group-header">J</div>
                <ul>
                    <li>Jamaica</li>
                    <li>Jan Mayen</li>
                    <li>Japan</li>
                    <li>Jersey</li>
                    <li>Jordan</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<!-- Hamza Code Ends Here -->
<?php require_once('includes/footer.php'); ?>

<script type="text/javascript" rel="script">
    $("#openContactsPage").click(function () {
        $("#contactsPage").slideDown();
        $("#countryList").ioslist();
    });

    $(document).on('click', "#hidePage", function () {
        $("#contactsPage").slideUp();
    });

    let passport_video = document.querySelector('#passportvideo');
    let passport_track = '';

    let idcard_video = document.querySelector('#idcardvideo');
    let idcard_track = '';

    let driverlicense_video = document.querySelector('#driverlicensevideo');
    let driverlicense_track = '';

    // Start of Passport Screen Camera
    navigator.mediaDevices.getUserMedia({
      video: {
          facingMode: 'environment',
      }
      })
      .then((stream) => {
      passport_video.srcObject = stream;
      passport_track = stream.getVideoTracks()[0];
      passport_video.addEventListener('loadedmetadata', (e) => {
          window.setTimeout(() => (
          onCapabilitiesReady(passport_track.getCapabilities())
          ), 500);
      });
      function onCapabilitiesReady(capabilities) {

      }
      })
      .catch(err => console.error('getUserMedia() failed: ', err));
    // End of Passport Screen Camera


    $(".bottomNavigation").on('click', function () {
        $(".bottomNavigation").removeClass('bottom-nav-active');
        $(this).addClass('bottom-nav-active');

        if(this.id === 'tab2')
        {
          // stop driving license camera - start
          let drivinglicense_stream = driverlicense_video.srcObject;
          if(drivinglicense_stream)
          {
            let tracks = drivinglicense_stream.getTracks();
            tracks.forEach(function(track) {
              track.stop();
            });
            driverlicense_video.srcObject = null;
          }
          // stop driving license camera - end

          // stop passport camera - start
          let passport_stream = passport_video.srcObject;
          if(passport_stream)
          {
            let tracks = passport_stream.getTracks();
            tracks.forEach(function(track) {
              track.stop();
            });
            passport_video.srcObject = null;
          }
          // stop passport camera - end

          navigator.mediaDevices.getUserMedia({
            video: {
                facingMode: 'environment',
            }
            })
            .then((stream) => {
            idcard_video.srcObject = stream;
            idcard_track = stream.getVideoTracks()[0];
            idcard_video.addEventListener('loadedmetadata', (e) => {
                window.setTimeout(() => (
                onCapabilitiesReady(idcard_track.getCapabilities())
                ), 500);
            });
            function onCapabilitiesReady(capabilities) {

            }
            })
            .catch(err => console.error('getUserMedia() failed: ', err));
        }
        else if(this.id === 'tab3')
        {
          // stop id card camera - start
          let idcard_stream = idcard_video.srcObject;
          if(idcard_stream)
          {
            let tracks = idcard_stream.getTracks();
            tracks.forEach(function(track) {
              track.stop();
            });
            idcard_video.srcObject = null;
          }
          // stop id card camera - end

          // stop passport camera - start
          let passport_stream = passport_video.srcObject;
          if(passport_stream)
          {
            let tracks = passport_stream.getTracks();
            tracks.forEach(function(track) {
              track.stop();
            });
            passport_video.srcObject = null;
          }
          // stop passport camera - end

          navigator.mediaDevices.getUserMedia({
            video: {
                facingMode: 'environment',
            }
            })
            .then((stream) => {
            driverlicense_video.srcObject = stream;
            driverlicense_track = stream.getVideoTracks()[0];
            driverlicense_video.addEventListener('loadedmetadata', (e) => {
                window.setTimeout(() => (
                onCapabilitiesReady(driverlicense_track.getCapabilities())
                ), 500);
            });
            function onCapabilitiesReady(capabilities) {

            }
            })
            .catch(err => console.error('getUserMedia() failed: ', err));
        }
        else {
            // stop id card camera - start
            let idcard_stream = idcard_video.srcObject;
            if(idcard_stream)
            {
              let tracks = idcard_stream.getTracks();

              tracks.forEach(function(track) {
                track.stop();
              });

              idcard_video.srcObject = null;
            }
            // stop id card camera - end

            // stop driving license - start
            let driving_stream = driverlicense_video.srcObject;
            if(driving_stream)
            {
              tracks = driving_stream.getTracks();

              tracks.forEach(function(track) {
                track.stop();
              });

              driverlicense_video.srcObject = null;
            }
            // stop driving license - end

            navigator.mediaDevices.getUserMedia({
              video: {
                  facingMode: 'environment',
              }
              })
              .then((stream) => {
              passport_video.srcObject = stream;
              passport_track = stream.getVideoTracks()[0];
              passport_video.addEventListener('loadedmetadata', (e) => {
                  window.setTimeout(() => (
                  onCapabilitiesReady(passport_track.getCapabilities())
                  ), 500);
              });
              function onCapabilitiesReady(capabilities) {

              }
              })
              .catch(err => console.error('getUserMedia() failed: ', err));
        }
    });
</script>
</body>
</html>
