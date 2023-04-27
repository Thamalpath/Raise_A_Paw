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
              <h3 class="text-center my-4 text">Add Gallery</h3>
            </b>
          </div>


          <div class="card-body m-5">
            <form method="POST" id="formID" enctype="multipart/form-data" action="save_gallery.php" class="formular">

              <!-- <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?> -->
              <table class="table-hover">
                <tr>
                  <td colspan="2" style="background:rgb(233, 104, 64); color:#FFF; height:35px; text-align:center;"><b style="color:#FFF">Add new picture</b></td>
                </tr>
                <tr>
                  <td width="300">&nbsp;</td>
                  <td width="798">&nbsp;</td>
                </tr>

                <tr>
                  <td>Select File</td>
                  <td><input name="galleryphoto" type="file" class="validate[required, maxSize[100]] text-input" /></td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align:center">

                    <p>For best view select picture with resolution 260 px X 175 px </p>
                    <p>Height and width for all picture should be same </p>
                    <p>
                      <input type="submit" value="Submit" name="B4" class="btn btn-primary" id="btn_job">
                    </p>
                  </td>
                </tr>
              </table>
            </form>
          </div>

        </div>
      </main>