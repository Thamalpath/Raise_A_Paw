 <?php 
    if(isset($_POST['save']))
    {
        $file_loc = "../result_pic/";         
        $name = str_replace("'","''", $_POST['name']);      
        $exam=str_replace("'","''",$_POST['exam']);
        $marks=str_replace("'","''",$_POST['marks']);
        $stmt = $dbh->prepare("Insert into result (name,exam,marks) values ('$name','$exam','$marks')");
        $stmt->execute();
        
         $file_id = $dbh->lastInsertId();
         $up_id=$file_id;

           
            //=============================photo========================
                $allowedExts = array("jpg", "jpeg", "gif", "png", "pdf", "JPG", "JPEG", "GIF");
                $getext = explode(".", $_FILES["file1"]["name"]);
                $extension = end($getext);
                if (($_FILES["file1"]["size"] < 2000000)
                && in_array($extension, $allowedExts))
                  {
                  if ($_FILES["file1"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";
                    $got_error = 1;
                    }
                  else
                    {
                    
                
                  ($extension) ;
                  
                      move_uploaded_file($_FILES["file1"]["tmp_name"], $file_loc . $file_id.".".$extension);
                      
                        $stmt = $dbh->prepare("update result set photo ='$file_id.$extension' where id = $up_id");
                    //  echo "update content set content ='$file_id.$extension' where id = $file_id";
                        $stmt->execute();   

                        $msg="Added Successfully";
                    }
                  }
    }
    ?>               

                <main>
                    <div class="container-fluid">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Doctor</h3></div>
                                    <?php
                                    if(isset($msg)){
        echo("<div class='alert alert-error alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>$msg</strong> </div>");
        }
    ?>
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                                        <input class="form-control py-4" name="name" id="inputFirstName" type="text" placeholder="Enter Doctor's Name" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Exam</label>
                                                <input class="form-control py-4" name="exam" type="text" placeholder="Enter Exam" required="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Marks</label>
                                                <input class="form-control py-4" name="marks" type="text" placeholder="Enter Marks" required="" />
                                            </div>
                                          
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Photo</label>
                                                 <input type="file" name="file1" class="orm-control" />
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" value=" Add Result " name="save" class="btn btn-primary"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="page.php?pg=vie_result">View Result</a></div>
                                    </div>
                                </div>
                            </main>