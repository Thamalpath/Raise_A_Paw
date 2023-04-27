 <?php
    error_reporting(0);
    include('db.php');


    if (isset($_POST['ourwork'])) {


        $content = $_POST['content'];





        $stmt = $dbh->prepare("update ourwork set content ='$content'");
        $stmt->execute();
    }

    ?>


 <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
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
                 <h3 class="text-center my-4 text">Add Our Work</h3>
             </b>
         </div>
         <div class="card-body">
             <form role="form" method="post" class="formular">

                 <?php
                    include 'db.php';
                    $sql = "select *  from ourwork ";

                    foreach ($dbh->query($sql) as $row)




                    ?>

                 <textarea name="content" cols="5" rows="10"><?php echo $row['content']; ?></textarea><br>
                 <script>
                     CKEDITOR.replace('content');
                 </script>


                 <input type="submit" value="Submit" name="ourwork" class="btn btn-primary" id="btn_job">

             </form>
         </div>

     </div>
 </main>