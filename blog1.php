<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
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
        
        
        
        
     

      
<?php

error_reporting(0);
include('admin/inc/db1.php');
$ids=$_GET['id'];
$sql="SELECT pragraph FROM nextblog WHERE id='$ids'";
$results_per_page=55;
$re=mysqli_query($con,$sql);
$number_of_results=mysqli_num_rows($re);
$number_of_pages=ceil($number_of_results/$results_per_page);
if(!isset($_GET['del']))
{
	$del=1;

}
else
{
	$del=$_GET['del'];

}
$this_page_first_result=($del-1)*$results_per_page;
$sql=" SELECT pragraph FROM nextblog WHERE id='$ids' LIMIT ". $this_page_first_result .','. $results_per_page;
$re=mysqli_query($con,$sql);

 
   

 
?>



<div class="container">
  <?php  while($row=mysqli_fetch_assoc($re)) { ?>
  <br>
   <p><?php echo $row['pragraph'];?></p>
     
  <br>
     <?php } ?>
  
      </div>
      
      
      <?php
                    include 'admin/inc/db.php';
                        $sql = "select *  from setting ";
                        
                         foreach ($dbh->query($sql) as $row)
                         
                        
                        
                        
            ?>  
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
<?php
error_reporting(0);

 
     include 'admin/inc/db1.php';
    
    
    if(isset($_POST['save']))
    
    {
        $name=$_POST['name'];
                $number=$_POST['number'];
                  $work=$_POST['work'];
        $img=$_FILES["img1"]["name"];
        move_uploaded_file($_FILES["img1"]["tmp_name"],"slide/".$_FILES["img1"]["name"]);
        
        
         $sql="INSERT INTO addmember(name,number,work,img) VALUES('$name','$number','$work','$img')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
       echo '<script>alert("Welcome Our Ngo.");window.location.href="index.php";</script>';
        
        
    }
    else
    {
         echo '<script>alert("Plz try Again.");window.location.href="index.php";</script>';
    }
    }
    

?>
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form  method="post" enctype="multipart/form-data">
             <input name="name" class="form-control" required  placeholder="Enter Your Name"/>
      
             
               <input name="number" class="form-control"  required  placeholder="Enter Your Number"/>
           
               <h5>What Your Work</h5>
               <textarea class="form-control"  required  name="work"> </textarea>
               
               <div class="uploadeimg">
                   
               <img src="blank_avatar.jpg
" >

<input type="file" name="img1" style="padding-top:10px;padding-bottom:10px;margin-left:-50px" required>
</div>


<button name="save" type="submit" class="btn btn-success btn-block">Submit</button>
</form>
                  
           </div>
     
    </div>
  </div>
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>