<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scanner</title>
    <?php require_once("includes/header.php") ?>
    <style>
    .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: 0 !important;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    input[type="text"],
    select.form-control {
      background: transparent;
      border: none;
      border-bottom: 1px solid #ffffff;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: white;
    }

    input[type="text"]:focus,
    select.form-control:focus {
      background: transparent;
      border: none;
      border-bottom: 1px solid #dca450;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: #dca450;
    }

    input[type="email"],
    select.form-control {
      background: transparent;
      border: none;
      border-bottom: 1px solid #ffffff;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: white;
    }

    input[type="email"]:focus,
    select.form-control:focus {
      background: transparent;
      border: none;
      border-bottom: 1px solid #dca450;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: #dca450;
    }

    textarea#message,
    select.form-control {
      background: transparent;
      border: none;
      border-bottom: 1px solid #ffffff;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: white;
    }

    textarea#message:focus,
    select.form-control:focus {
      background: transparent;
      border: none;
      border-bottom: 1px solid #dca450;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      color: #dca450;
    }
    .marginsetting{
      margin-top: 2em;
    }

    /* Alert Box Design */
    #container {
        display: none;
        background-color: white;
        color: black;
        position: absolute;
        width: 350px;
        border-radius: 5px;
        left: 50%;
        margin-left: -160px;
        padding: 16px 8px 8px;
        box-sizing: border-box;
        text-align: center;
     }

     #container a {
        display: inline-block;
        color: black;
        padding: 5px;
        text-align: center;
        width: 60px;
     }

     #container .message {
        text-align: left;
        padding: 10px 30px;
     }
     .btn:hover {
          color: white;
          text-decoration: none;
      }
      .modal-footer {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          -ms-flex-align: center;
          align-items: center;
          -ms-flex-pack: end;
          justify-content: center !important;
          padding: .75rem;
          border-top: 1px solid #dee2e6;
          border-bottom-right-radius: calc(.3rem - 1px);
          border-bottom-left-radius: calc(.3rem - 1px);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row privacy_row" style="">
        <div class="col-md-12">
          <div class="mt-3">
            <h5 class="white_clr text-center" style="margin-left:40px;">Get in Touch<span class="float-right " style="font-size:14px;margin-top:6px;cursor:pointer;">Cancel</span></h5>
          </div>
          <div class="" style="margin-top: 70px;">
            <form action="">
              <div class="form-group marginsetting">
                <input type="text" class="form-control" aria-describedby="nameHelp" value="Name*" >
                <span style="font-size:12px;color:#566d81;" class="">*Required</span>
              </div>
              <div class="form-group marginsetting">
                <input type="email" class="form-control" aria-describedby="emailHelp" value="E-Mail*">
                <span style="font-size:12px;color:#566d81;" class="">*Required</span>
              </div>
              <div class="form-group marginsetting">
                <input type="text" class="form-control" aria-describedby="phoneHelp" value="Phone">
              </div>
              <div class="form-group marginsetting">
                <input type="text" class="form-control" aria-describedby="companyHelp" value="Company">
              </div>
              <div class="form-group" style="margin-top:3em;">
                <textarea name="name" rows="5" cols="80" class="form-control " id="message">Message*</textarea>
                <span style="font-size:12px;color:#566d81;" class="">*Required</span>
              </div>
            </form>
          </div>
          <div class="text-center" style="margin-top:5em;margin-bottom:3em;">
            <!-- <a href="javascript:void(0);" class="white_clr" style="text-decoration:none;" onclick="send();" class="">Send</a> -->
            <button type="button" class="btn white_clr" data-toggle="modal" data-target="#exampleModal">
              Send
            </button>
          </div>
        </div>
      </div>
      <!-- Model Window -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="message">
               <strong>Thank you!</strong>
               <br>
               We will get back to you<br>as soon as possible.
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal" style="color:blue;">Done</button>
          </div>
        </div>
      </div>
      </div>
      <!-- End of Model Window -->
    </div>
    <?php require_once('includes/footer.php'); ?>
    <script>
    $(document).ready(function(){
        function alignModal(){
            var modalDialog = $(this).find(".modal-dialog");
            modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
        }
        $(".modal").on("shown.bs.modal", alignModal);
        $(window).on("resize", function(){
            $(".modal:visible").each(alignModal);
        });
    });
    </script>
  </body>
</html>
