<?php
 
 error_reporting(0);
  require_once('inc/db1.php');
 if(isset($_GET['id']))
 {
     
     $id=$_GET['id'];
     $sql="DELETE FROM posts where id='$id'";
      $info=mysqli_query($con,$sql);
      
      if($info)
      {
       
      
         
header("location: page.php?pg=manage_community_post");
   
      }
       else
 {
     echo "failed";
 }
      
 }

 ?>