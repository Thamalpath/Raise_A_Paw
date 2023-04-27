<?php 
 error_reporting(0);
include 'inc/db1.php';
 if(isset($_POST['blogbutton']))
 
 {  $bloglist=$_POST['bloglist'];
 
    $content=$_POST['content'];
      
$sql="SELECT id FROM blog WHERE title='$bloglist' ";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
    while($row=mysqli_fetch_assoc($re))
    {
       
        $id=$row['id'];
    $sql="INSERT INTO nextblog(id,pragraph) VALUES('$id','$content') ";
    $res=mysqli_query($con,$sql);
    if($res)
    {
      header("location: page.php?pg=view_insideblog");
    }
    else
    {
        echo "Duplicate Entry";
    }
  
        
    }
}
else
{
    echo "no";
}
 
 	    
     
         
 
 
  
     
   
   
     
   
    
 
      
       
  
 


    
    
 }

 ?>