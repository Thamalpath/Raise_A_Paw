<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Raise A Paw | Contact</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

  <?php
require_once('header.php');
?> 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


 

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7 mt-3">
                    <h2 >Contact Form</h2> <br>
                    
                    <form  action="contactform.php" method="post">
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label><b>Enter Name</b></label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" style="border-radius: 10px;" ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label><b>Email Address</b></label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" required class="form-control input-sm" style="border-radius: 10px;" ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label><b>Mobile Number</b></label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" required class="form-control input-sm" style="border-radius: 10px;" ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label><b>Enter Message</b></label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea  name="msg" rows="5" placeholder="Enter Your Message" required class="form-control input-sm" style="border-radius: 10px;"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="enquiry" >Send Message</button>
                        </div>
                    </div>
                </div>
                </form>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:10px;">Details</h2>
                        <br>
                        <p style="font-size: 17px;">Address: <?php echo $row['address'];?></p> <br>
                        <p style="font-size: 17px;">Phone: <?php echo $row['number'];?></p><br>
                        <p style="font-size: 17px;">Email: <?php echo $row['gmail'];?></p><br>
                        <p style="font-size: 17px;">Website: <?php echo $row['website'];?></p><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
       
      
      
       
  
                 
  <!--  ************************* Footer Starts Here ************************** -->
          
       <?php
require_once('footer.php');
?>
      
  
  <!-- Trigger the modal with a button -->
  <style>
      
      .modal .uploadeimg{
          
         width:100px;
         margin-left:178px;
      }
      
      
       @media screen and (max-width: 900px){
.modal .uploadeimg{
	
	     
    margin-left: 100px;
	
}
}
  </style>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>