  <?php
    error_reporting(0);
    include('db.php');
    include('db1.php');

    if (isset($_POST['addsetting'])) {


        $social1 = $_POST['social1'];
        $social2 = $_POST['social2'];
        $social3 = $_POST['social3'];
        $social4 = $_POST['social4'];

        $sociallink1 = $_POST['sociallink1'];
        $sociallink2 = $_POST['sociallink2'];
        $sociallink3 = $_POST['sociallink3'];
        $sociallink4 = $_POST['sociallink4'];

        $gmail = $_POST['gmail'];

        $number = $_POST['number'];
        $address = $_POST['address'];
        $website = $_POST['website'];

        $companyname = $_POST['companyname'];

        $logo = $_FILES["logo1"]["name"];
        move_uploaded_file($_FILES["logo1"]["tmp_name"], "logo/" . $_FILES["logo1"]["name"]);


        $stmt = $dbh->prepare("update setting set social1 ='$social1',social2 ='$social2',social3 ='$social3',social4 ='$social4',sociallink1 ='$sociallink1',sociallink2 ='$sociallink2',sociallink3 ='$sociallink3',sociallink4 ='$sociallink4',gmail ='$gmail',number ='$number',address ='$address',website ='$website', companyname ='$companyname', logo ='$logo' ");
        $stmt->execute();
    }

    ?>

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

      .text {
          font-size: 35px;
          font-weight: 600;
          font-family: 'Poppins';
      }
  </style>

  <main>
      <div class="container-fluid">
          <div class="card-header">
              <b>
                  <h3 class="text-center my-4 text">Website Settings</h3>
              </b>
          </div>

          <br>


          <?php
            include 'db.php';
            $sql = "select *  from setting ";

            foreach ($dbh->query($sql) as $row)


            ?>


          <h4 style="text-align:center;">Social Media Management </h4>
          <hr>
          <form role="form" method="post" class="formular" enctype="multipart/form-data">

              <div class="row">

                  <div class="col-md-6">



                      <h5 style="text-align:center;">Social Media Icon </h5>
                      <div class="row">

                          <div class="col-md-3">
                              <input name="social1" class="form-control" value=" <?php echo $row['social1']; ?>" required>

                          </div>

                          <div class="col-md-3">

                              <input name="social2" class="form-control" value="<?php echo $row['social2']; ?>" required>
                          </div>


                          <div class="col-md-3">

                              <input name="social3" class="form-control" value="<?php echo $row['social3']; ?>" required>
                          </div>

                          <div class="col-md-3">

                              <input name="social4" class="form-control" value="<?php echo $row['social4']; ?>" required>
                          </div>

                      </div>

                  </div>



                  <div class="col-md-6">
                      <h5 style="text-align:center;">Social Media Link </h5>
                      <div class="row">

                          <div class="col-md-3">
                              <input name="sociallink1" class="form-control" value="<?php echo $row['sociallink1']; ?>" required>

                          </div>

                          <div class="col-md-3">

                              <input name="sociallink2" class="form-control" value="<?php echo $row['sociallink2']; ?>" required>
                          </div>


                          <div class="col-md-3">

                              <input name="sociallink3" class="form-control" value="<?php echo $row['sociallink3']; ?>" required>
                          </div>

                          <div class="col-md-3">

                              <input name="sociallink4" class="form-control" value="<?php echo $row['sociallink4']; ?>" required>
                          </div>


                      </div>


                  </div>


              </div>


              <br>


              <div class="row">

                  <div class="col-md-6">



                      <h5 style="text-align:center;">Gmail</h5>
                      <div class="row">

                          <div class="col-md-12">
                              <input name="gmail" class="form-control" value="<?php echo $row['gmail']; ?>">

                          </div>


                      </div>


                  </div>



                  <div class="col-md-6">
                      <h5 style="text-align:center;">Mobile & Whatsapp </h5>
                      <div class="row">

                          <div class="col-md-12">
                              <input name="number" class="form-control" value="<?php echo $row['number']; ?>">

                          </div>


                      </div>


                  </div>


              </div>

              <br>


              <div class="row">

                  <div class="col-md-6">



                      <h5 style="text-align:center;">Address</h5>
                      <div class="row">

                          <div class="col-md-12">
                              <input name="address" class="form-control" value="<?php echo $row['address']; ?>">

                          </div>


                      </div>


                  </div>


                  <div class="col-md-6">
                      <h5 style="text-align:center;">Website & Company Name </h5>
                      <div class="row">

                          <div class="col-md-6">
                              <input name="website" class="form-control" value="<?php echo $row['website']; ?>">

                          </div>


                          <div class="col-md-6">
                              <input name="companyname" class="form-control" value="<?php echo $row['companyname']; ?>">

                          </div>



                      </div>


                  </div>


              </div>


              <br>

              <div class="row">

                  <div class="col-md-6">
                      <h3>Current Logo</h3>

                      <img src="logo/<?php echo $row['logo']; ?>" style="width:260px;height:60px;border:1px solid black;">
                  </div>

                  <div class="col-md-6">

                      <h3>Logo Update</h3><br>

                      <input type="file" name="logo1">

                  </div>


              </div>


              <br>
              <input type="submit" value="Submit" name="addsetting" class="btn btn-primary" id="btn_job">


          </form>

      </div>
  </main>