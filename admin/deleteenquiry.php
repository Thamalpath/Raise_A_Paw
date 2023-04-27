 <?php
 
 error_reporting(0);
  require_once('inc/db1.php');
 if(isset($_GET['id']))
 {
     
     $id=$_GET['id'];
     $sql="DELETE FROM enquiry where id='$id'";
      $re=mysqli_query($con,$sql);
      
      if($re)
      {
       
      
         
header("location: page.php?pg=enquiry");
   
      }
       else
 {
     echo "failed";
 }
      
 }

 ?>