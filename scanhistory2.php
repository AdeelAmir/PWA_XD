<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
    <style>
    .checkbox_container {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .checkbox_container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      /* background-color: #eee; */
      border-radius: 15px;
      border: 1px solid;
    }

    .checkbox_container:hover input ~ .checkmark {
      background-color: #ccc;
    }

    .checkbox_container input:checked ~ .checkmark {
      background-color: #FAAB00;
      border: none;
    }

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    .checkbox_container input:checked ~ .checkmark:after {
      display: block;
    }

    .checkbox_container .checkmark:after {
      left: 10px;
      top: 6px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .mt-5, .my-5 {
      margin-top: 1rem !important;
    }
    </style>
  </head>
  <body style="background-color: white">

    <nav class="navbar navbar-light" style="background-color: #002746;padding:5px;">
      <span class="mb-0 white_clr" style="color: #fffff;font-size:13px;padding-left:12px;cursor:pointer;" id="selectall" onclick="selectAll();">Select All</span>
      <span class="mb-0 white_clr" style="color: #fffff;font-size:13px;padding-left:12px;cursor:pointer;display:none;" id="deselectall" onclick="deselectAll();">Deselect All</span>
      <p style="color:#fffff;font-size:18px;margin-top:10px;" class="text-center white_clr">Scan History</p>
      <span class="mb-0 white_clr" style="color: #fffff;font-size:13px;padding-right:12px;">Close</span>
    </nav>

    <main class="container-fluid my-5">
        <div class="row">
          <div class="col-md-12">
            <table class="tableSetting">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style="" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="checkbox_container" style="margin-top: -3px;">
                        <input type="checkbox" class="checkBoxAll">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td>
                      <img src="assets/images/scan_image.png" class="scanimage" alt="scan image" style=";" />
                    </td>
                    <td>
                      <p style="margin-top:25px;" class="scanHistoryDetails">Vorname Nachname</p>
                      <p style="margin-top:-13px;font-size:15px;" class="scanHistoryDetails">XX XXXXXXX</p>
                    </td>
                  </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
    </main>

    <?php require_once('includes/footer.php'); ?>
    <script>
    function selectAll(){
      $(".checkBoxAll").prop('checked', true);
      $("#selectall").css('display', 'none');
      $("#deselectall").css('display', '');
    }
    function deselectAll(){
      $(".checkBoxAll").prop('checked', false);
      $("#selectall").css('display', '');
      $("#deselectall").css('display', 'none');
    }
    </script>
  </body>
</html>
