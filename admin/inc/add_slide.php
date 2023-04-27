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
        <h3 class="text-center my-4 text">Add Slide</h3>
      </b>
    </div>

    <div class="card-body m-5">
      <form method="POST" id="formID" enctype="multipart/form-data" action="save_slide.php" class="formular">
        <table class="table-hover">
          <tr>
            <td colspan="2" style="background:rgb(233, 104, 64); color:#FFF; height:35px; text-align:center;"><b style="color:#FFF">Add new slide picture</b></td>
          </tr>
          <tr>
            <td width="300">&nbsp;</td>
            <td width="798">&nbsp;</td>
          </tr>
          <tr>
            <td>Sl No.</td>
            <td style="width:800px;">
              <select size="1" name="D2" class="validate[required] text-input form-control input-sm">
                <option value="">Select</option>
                <?php



                $i = 1;


                for ($i = 1; $i <= 10; $i++) {
                  echo ("<option value='$i'>$i</option>");
                }
                ?>


              </select>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td>Select File</td>
            <td><input name="f" type="file" class="validate[required, maxSize[100]] text-input" /></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:center">

              <p>For best view select picture with resolution 1500 px X 780 px </p>
              <p>Height and width for all picture should be same </p>
              <p>
                <input type="submit" value="Submit" name="B3" class="btn btn-primary" id="btn_job">
              </p>
            </td>
          </tr>
        </table>
      </form>
    </div>

  </div>
</main>