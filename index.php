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
          <div class="owl-carousel owl-theme" id="slider1">
            <!-- Start of item 1 -->
            <div class="item">
              <div>
                <h5 class="white_clr float-left">How to use <span class="golden_clr">Quick-ID?</span></h5>
                <span class="float-right white_clr"><i class="fa fa-close" style="font-size:25px;"></i></span>
              </div>
              <div style="margin-top:130px;cursor: pointer;" class="text-center">
                <img src="assets/images/1_image.png" class="img-fluid item1" />
              </div>
              <div class="">
                <h5 class="white_clr mt-5">Select Document & Country</h5>
                <div style="width:320px;height:2px;background-color:white"></div>
                <div>
                  <p class="white_clr mt-3">
                    Before scanning, choose the document type and then select the country of the guest who are checking in
                  </p>
                </div>
              </div>
            </div>
            <!-- End of item 1 -->

            <!-- Start of item 2 -->
            <div class="item">
              <div>
                <span class="float-right white_clr"><i class="fa fa-close" style="font-size:25px;"></i></span>
              </div>
              <div style="margin-top:130px;cursor: pointer;" class="text-center">
                <img src="assets/images/2_image.png" style="cursor: pointer;padding-top:100px;width:80%;padding-left:80px;" class="img-fluid" />
              </div>
              <div class="">
                <h5 class="white_clr mt-5">Scan Identity Document</h5>
                <div style="width:320px;height:2px;background-color:white"></div>
                <div>
                  <p class="white_clr mt-3">
                    Put your ID inside the frame and follow on screen instructions. Data will be captured quick and accurate. Add more guests or proceed to the next step.
                  </p>
                </div>
              </div>
            </div>
            <!-- End of item 2 -->

            <!-- Start of item 3 -->
            <div class="item">
              <div>
                <span class="float-right white_clr"><i class="fa fa-close" style="font-size:25px;"></i></span>
              </div>
              <div style="margin-top:130px;cursor: pointer;" class="text-center">
                <img src="assets/images/3_image.png" class="img-fluid item3" />
              </div>
              <div class="">
                <h5 class="white_clr mt-5">Shared Extracted Data</h5>
                <div style="width:320px;height:2px;background-color:white"></div>
                <div>
                  <p class="white_clr mt-3">
                    Instantly share your results to your personal management software or save them temporarily to your scan history.
                  </p>
                </div>
              </div>
            </div>
            <!-- End of item 3 -->

          </div>
        </div>
        <!-- <div class="col-md-2"></div> -->
      </div>
    </div>
    <?php require_once('includes/footer.php'); ?>
    <script>
      $("#slider1").owlCarousel({
          items: 1,
          slideSpeed: 2000,
          autoplay: false,
          dots: true,
          nav: true,
          responsiveRefreshRate: 200,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      }).on('changed.owl.carousel', function (e) {
        if(parseInt(e.relatedTarget._current) === 2){
          $(".owl-dots").append('<a href="javascript:void(0);" style="margin-top: -10px;" class="btn btn-transparent text-white float-right nextBtn" id="_nextBtn_' + e.relatedTarget._current + '">Done</a>');
        }
        else{
          $(".owl-dots").append('<a href="javascript:void(0);" style="margin-top: -10px;" class="btn btn-transparent text-white float-right nextBtn" id="_nextBtn_' + e.relatedTarget._current + '">Next</a>');
        }
      });

      $(".owl-dots").append('<a href="javascript:void(0);" style="margin-top: -10px;" class="btn btn-transparent text-white float-right nextBtn" id="_nextBtn_0">Next</a>');

      $(document).on('click', '.nextBtn', function(){
        if(this.id === '_nextBtn_2'){
          // alert('Tits Job');
        }
        else{
          $("#slider1").trigger('next.owl.carousel');
        }
      });
    </script>
  </body>
</html>
