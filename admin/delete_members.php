<?php
 
 error_reporting(0);
  require_once('inc/db1.php');
 if(isset($_GET['id']))
 {
     
     $id=$_GET['id'];
     $sql="DELETE FROM users where id='$id'";
      $re=mysqli_query($con,$sql);
      
      if($re)
      {
       
      
         
header("location: page.php?pg=manage_members");
   
      }
       else
 {
     echo "failed";
 }
      
 }

 ?>