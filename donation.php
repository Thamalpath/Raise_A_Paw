<!DOCTYPE html>
<html>

<head>
  <!-- Bootstrap 5 CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Raise A Paw | Donate</title>
  <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/fav.jpg">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

  <!-- custom-theme -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>


</head>


<body>

  <?php
  require_once('header.php');
  ?>
  <!--  ************************* Page Title Starts Here ************************** -->

  <div class="page-nav no-margin row">
    <div class="container">
      <div class="row">
        <h2>Donate Now</h2>
      </div>
    </div>
  </div>

  <div class="col-md-8 justify-content-center mt-5 ">
    <div class="row justify-content-center align-self-center w-100" style="background: transparent;">
      <div class="card col-sm-7 pt-3 pb-3" style="border-radius: 20px; margin: auto;">
        <div class="card-body">
          <!-- User Detils -->
          <form action="feedback.php" method="post" class="agile_form">
            <div class="mb-3">
              <label class="form-label">Amount</label>
              <input type="text" class="form-control" placeholder="Amount" name="view" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Your Email</label>
              <input type="email" class="form-control" placeholder="Your Email" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Your Phone Number</label>
              <input type="text" class="form-control" placeholder="Your Phone Number" name="num" required>
            </div>

            <!-- Bank Detils -->
            <div class="mb-3">
              <label class="form-label">Card Number</label>
              <input type="text" id="cardnumber" minlength="16" maxlength="16" class="form-control" placeholder="Card Number" required>
            </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

            <!-- CVV -->
            <div class="form-group">
              <label class="col-sm-4 control-label" for="textinput"></label>
              <div class="col-sm-3">
                <input type="text" id="cvv" placeholder="CVV" minlength="3" maxlength="3" class="card-cvc form-control">
              </div>
            </div>
            <h2>
              <left>EXPIRY DATE</left>
            </h2>
            <!-- Expiry-->
            <div class="form-group">
              <label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
              <div class="col-sm-6">
                <div class="form-inline">
                  <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
                    <option value="01" selected="selected">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <span> / </span>
                  <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
                    <option value="2021" selected="selected">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>

                  </select>

                  <script type="text/javascript">
                    var select = $(".card-expiry-year"),
                      year = new Date().getFullYear();

                    for (var i = 0; i < 12; i++) {
                      select.append($("<option value='" + (i + year) + "' " + (i === 0 ? "selected" : "") + ">" + (i + year) + "</option>"))
                    }
                  </script>
                </div>
              </div>
            </div>
            <center><input type="submit" value="P A Y   N O W" class="agileinfo" /></center>
            <br>
            <br>
            <p>
              <a href=""><b>
                  <h1>
                    <center>
                      <h1 class="agile_head text-center">BACK</h1>
                </b></h1>
                </center></a>
            </p></br></br>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

<?php
require_once('footer.php');
?>

</html>