<?php
include 'admin/inc/db.php';

$sql = "select *  from setting ";

foreach ($dbh->query($sql) as $row)


?>
<style>
    body {

        position: relative;
        min-height: 100%;
        margin-top: -40px;
    }

    header .header-top {
        background-color: #fff;
        border-bottom: 1px solid #d3d7cea6;
        padding: 7px;
        padding-top: 40px;
    }
</style>

<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-5 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            <?php echo $row['gmail']; ?>
                            <span>|</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            <?php echo $row['number']; ?>
                        </li>


                    </ul>
                </div>


                <style>
                    iframe.skiptranslate {
                        display: none !important;
                    }

                    .skiptranslate.goog-te-gadget select {
                        position: relative !important;

                        position: relative !important;
                        font-weight: bold !important;
                        padding: 2px !important;
                        border-radius: 5px !important;
                    }

                    .skiptranslate.goog-te-gadget span {
                        display: none !important;
                    }


                    .goog-te-gadget {
                        color: white;
                        font-family: arial;
                        font-size: 11px;
                        color: white;
                        white-space: nowrap;
                    }
                </style>


                <!-- <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            //new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: "hi,en" }, 'google_translate_element');
            new google.translate.TranslateElement({}, 'google_translate_element');
        }
    </script> -->
                <div class="col-lg-4 col-md-6 folouws">

                    <ul class="ulright">

                        <li> <small>Follow Us </small>:</li>
                        <li>
                            <a href="<?php echo $row['sociallink1']; ?>"> <i class="<?php echo $row['social1']; ?>"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $row['sociallink2']; ?>"> <i class="<?php echo $row['social2']; ?>"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $row['sociallink3']; ?>"> <i class="<?php echo $row['social3']; ?>"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $row['sociallink4']; ?>"> <i class="<?php echo $row['social4']; ?>"></i></a>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed" id="google_translate_element">
                    <!--<a href="donate.php"> <button class="btn btn-sm btn-success">Donate</button></a>
                    <!-- <a href="donate.php"><button class="btn btn-sm btn-default">Donate</button></a>!-->
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.php">
                        <img src="admin/logo/<?php echo $row['logo']; ?>" alt="" style="width:100px;">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                    <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>

                          <!-- <li class="nav-item">
                                    <a class="nav-link" href="join.php">Join Us</a>
                                </li> ! -->


                        <li class="nav-item">
                            <a class="nav-link" href="adoption.php">Adoption</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="ourwork.php">Our Work</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="community/login.php" rel="noopener noreferrer">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="donation.php">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.php">Contact </a>
                        </li>




                    </ul>


                </div>
            </div>
        </div>
    </div>
</header>