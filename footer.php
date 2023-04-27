    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Raise A Paw has been transforming the lives of street dogs and the communities they live in since 2017. The opportunity to reach out and make a difference with its multifaceted approach to animal welfare, is the driving force behind Raise A Paw’s dedicated team.
                    </p>
                    <p>
                        Focused not only on rescues or adoptions but also sterilizations, vaccinations, education and campaigning for improved policy with regard to animals islandwide, the Raise A Paw team takes the welfare of street dogs in Sri Lanka forward against the odds.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="gallery.php">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="ourwork.php">Our Work</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="donation.php">Donate</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Address:- <?php echo $row['address']; ?><br>
                        Phone: <?php echo $row['number']; ?><br>
                        Email: <a href="mailto:<?php echo $row['gmail']; ?>" class=""><?php echo $row['gmail']; ?></a><br>
                        Web: <a href="https://<?php echo $row['website']; ?>" class=""><?php echo $row['website']; ?></a><br>
                    </address>
                </div>
            </div>
        </div>
    </footer>

    <div class="copy">
        <div class="container">
            <a href="<?php echo $row['website']; ?>">2022 &copy; All Rights Reserved | Designed and Developed by <?php echo $row['companyname']; ?></a>

            <span>
                <a href="<?php echo $row['sociallink1']; ?>"> <i class="<?php echo $row['social1']; ?>"></i></a>
                <a href="<?php echo $row['sociallink2']; ?>"> <i class="<?php echo $row['social2']; ?>"></i></a>

                <a href="<?php echo $row['sociallink3']; ?>"> <i class="<?php echo $row['social3']; ?>"></i></a>
                <a href="<?php echo $row['sociallink4']; ?>"> <i class="<?php echo $row['social4']; ?>"></i></a>
            </span>
        </div>

    </div>