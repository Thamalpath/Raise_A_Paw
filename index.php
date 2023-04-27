<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Raise A Paw </title>
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
    <!-- ******************** Slider Starts Here ******************* -->
    <!--  ************************* About Us Starts Here ************************** -->


    <div class="slider">

        <div class="owl-carousel ">
            <div class="slider-img">

                <?php
                include 'admin/inc/db.php';
                $sql = "select * from slide order by sl asc ";
                $i = 1;
                foreach ($dbh->query($sql) as $rs) {
                    if ($i == 1) { ?>
                        <div class="item active ">
                            <div class="slider-img"><img src="slide/<?php echo $rs['img'] ?>" style=" "></div>
                        </div>
            </div>
        <?php } else { ?>
            <div class="item">
                <div class="slider-img"> <img src="slide/<?php echo $rs['img'] ?>" style=" "></div>
            </div>
        <?php }
                    $i++;
        ?>
    <?php } ?>




        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->


    <br>

    <section class="container-fluid mission-vision mt-4">
        <div class="container">

            <div class="row">
                <div class="col-md-3 ">
                    <img src="assets/images/dog1.jpg" alt="">
                </div>
                <div class="col-md-3 ">
                    <img src="assets/images/dog2.jpg" alt="">
                </div>

                <div class="col-md-6">
                    <h1>Our Vision</h1>
                    <p style="text-align:justify;">Raise A Paw’s vision is to be the regional leader in placing dogs and cats in qualified adoptive homes.

                        We strive to build a modern facility that enables us to expand our rescue and adoption, community outreach and education services. By defining leading animal welfare and operational practices Raise A Paw will grow as a trusted community resource.</p>


                    <h1 class="mt-4">Our Mission</h1>
                    <p style="text-align:justify;">Raise A Paw’s vision is to be the regional leader in placing dogs and cats in qualified adoptive homes.

                        We strive to build a modern facility that enables us to expand our rescue and adoption, community outreach and education services. By defining leading animal welfare and operational practices Raise A Paw will grow as a trusted community resource.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>What we do
                </h2>

            </div>
            <div class="event-ro row">


                <?php
                include 'admin/inc/db.php';
                $sql = "Select * from whatwe order by id desc";

                foreach ($dbh->query($sql) as $row) {
                    echo ("<div class='col-md-4 col-sm-6'>


<div class='event-box'>

         <img src='slide/$row[2]' class=' '>
         
          <h4>$row[1]</h4>
          
          <p class='desic'>$row[3]</p><br>
                                     <a href='donation.php'> <button class='btn btn-success btn-sm'>Donate Now</button></a>                            

</div></div>");
                }
                ?>




            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievements in Numbers</h2>

                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>0+</h3>
                        <span>Fostering and Rehoming</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>0+</h3>
                        <span>Education and Awareness Programs</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>0+</h3>
                        <span>Rescue and Treatment</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>0+</h3>
                        <span>Sterilization and Vaccination</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <style>
        .session-title a {

            margin-left: 481px;

            padding: 10px;
            background-image: linear-gradient(to right, #ffffff 0%, green 51%, #000000 100%);
            text-decoration: none;
            font-size: 15px;
            color: white;
            font-weight: 551;
            border-radius: 5px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.10), 0 16px 24px 2px rgba(0, 0, 0, 0.10), 0 16px 24px 2px rgba(0, 0, 0, 0.10);
        }


        @media screen and (max-width: 900px) {
            .session-title a {


                margin-left: 100px;

            }
        }
    </style>



    <!-- Modal -->

    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2> Our Blog </h2>
                <p>Take a look at what people say about US </p>
            </div>
            <div class="blog-row row">


                <?php
                include 'admin/inc/db.php';
                $sql = "Select * from blog order by id desc";

                foreach ($dbh->query($sql) as $row) {
                    echo ("<div class='col-md-4 col-sm-6'>


 
<div class='single-blog'>
        					<figure>
        						<img src='admin/logo/$row[3]'>
        					</figure>
        					<div class='blog-detail'>
        						<small>By $row[2] | $row[5]</small>
								<h4>$row[1]</h4>
								<p> $row[4].</p>
								<div class='link'>
									<a href='blog1.php?id=$row[0]'>Read more </a><i class='fas fa-long-arrow-alt-right'></i>
								</div>
        					</div>	
        				</div>
</div>");
                }
                ?>s
            </div>
        </div>
    </section>


    <?php
    include 'admin/inc/db.php';
    $sql = "select *  from setting ";

    foreach ($dbh->query($sql) as $row)




    ?>
    <?php
require_once('footer.php')
    ?>




    <!-- Trigger the modal with a button -->
    <style>
        .modal .uploadeimg {

            width: 100px;
            margin-left: 178px;
        }


        @media screen and (max-width: 900px) {
            .modal .uploadeimg {


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