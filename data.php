<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
    <style>
      .mt-5, .my-5 {
        margin-top: 1rem !important;
      }
      #mobile-bottom-bar {
          display: block;
          position: absolute;
          left: 0;
          top: -20px;
          width: 100%;
      }
      a {
        color: #f8f8f8 !important;
        text-decoration: none;
        background-color: transparent;
        font-size: 12px !important;
      }
      .bottom-nav-active {
          color: white !important;
          font-weight: bold;
      }
      .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
          width: 100%;
          /* padding-right: none !important; */
          padding-left: 9px;
          margin-right: auto;
          margin-left: auto;
      }
      @media (min-width: 1200px){
        .container, .container-lg, .container-md, .container-sm, .container-xl {
          max-width: 1500px !important;
        }
      }
    </style>
  </head>
  <body style="background-color: #E5E5E5">

    <nav class="navbar navbar-light" style="background-color: #002746;padding:5px;">
      <span class="mb-0 white_clr" style="color: #fffff;font-size:13px;padding-left:24px;cursor:pointer;">Edit</span>
      <p style="color:#fffff;font-size:18px;margin-top:10px;" class="text-center white_clr">Scanned Data</p>
      <span class="mb-0 white_clr" style="color: #fffff;font-size:13px;padding-right:24px;">Back</span>
    </nav>

    <main class="container-fluid my-5">
      <div class="row">
        <div class="col-md-12">
          <div id="mobile-bottom-bar">
              <!-- Tabs Should Display Here -->
              <div class="priceCalculatorData3">
                  <div class="panel panel-default text-center">
                      <div class="panel-body">
                          <ul class="nav">
                              <li class="nav-item">
                                  <a class="nav-link text-white bottomNavigation active bottom-nav-active" id="tab1" data-toggle="tab" href="#tab1">Guest 1</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white bottomNavigation" data-toggle="tab" id="tab2" href="#tab2">Guest 2</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white bottomNavigation" data-toggle="tab" id="tab3" href="#tab2">Guest 3</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-white bottomNavigation" data-toggle="tab" id="tab4" href="#tab3">Guest 4</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- Tabs Should Display Here -->
          </div>
        </div>
      </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane container active" id="tab1">

                  <div class="card" style="width: 100%; background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table>
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/data_group1.png" alt="guest image" />
                            </td>
                            <td>
                                <p class="data_group1text">Italy, Passport</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="card" style="width: 100%;margin-top: 10px;background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table class="table">
                        <thead style="display:none;">
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              First Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MAX MARC
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Last Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MUSTERMANN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Date of Birth
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              11/02/1993
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              ID-Number
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              XY1234567
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Nationality
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              ITALIAN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Valid until
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              06/06/2026
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Sex
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              M
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                <div class="tab-pane container" id="tab2">

                  <div class="card" style="width: 100%; background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table>
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/data_group1.png" alt="guest image" />
                            </td>
                            <td>
                                <p class="data_group1text">Italy, Passport</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="card" style="width: 100%;margin-top: 10px;background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table class="table">
                        <thead style="display:none;">
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              First Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MAX MARC
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Last Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MUSTERMANN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Date of Birth
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              11/02/1993
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              ID-Number
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              XY1234567
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Nationality
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              ITALIAN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Valid until
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              06/06/2026
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Sex
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              M
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                </div>
                <div class="tab-pane container" id="tab3">

                  <div class="card" style="width: 100%; background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table>
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/data_group1.png" alt="guest image" />
                            </td>
                            <td>
                                <p class="data_group1text">Italy, Passport</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="card" style="width: 100%;margin-top: 10px;background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table class="table">
                        <thead style="display:none;">
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              First Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MAX MARC
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Last Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MUSTERMANN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Date of Birth
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              11/02/1993
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              ID-Number
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              XY1234567
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Nationality
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              ITALIAN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Valid until
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              06/06/2026
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Sex
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              M
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                <div class="tab-pane container" id="tab4">

                  <div class="card" style="width: 100%; background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table>
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/data_group1.png" alt="guest image" />
                            </td>
                            <td>
                                <p class="data_group1text">Italy, Passport</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="card" style="width: 100%;margin-top: 10px;background-color: #fffff;border-radius:20px;">
                    <div class="card-body">
                      <table class="table">
                        <thead style="display:none;">
                          <tr>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              First Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MAX MARC
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Last Name
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              MUSTERMANN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Date of Birth
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              11/02/1993
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              ID-Number
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              XY1234567
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Nationality
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              ITALIAN
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Valid until
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              06/06/2026
                            </td>
                          </tr>
                          <tr>
                            <td style="font-weight:600;font-size:15px;">
                              Sex
                            </td>
                            <td style="text-align:right;font-size:15px;">
                              M
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
            </div>
          </div>

        </div>
      </div>
    </main>

    <?php require_once('includes/footer.php'); ?>
    <script>
    $(".bottomNavigation").on('click', function () {
        $(".bottomNavigation").removeClass('bottom-nav-active');
        $(this).addClass('bottom-nav-active');
    });
    </script>
  </body>
</html>
