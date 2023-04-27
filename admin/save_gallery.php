<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
 
include 'inc/db1.php';
 
    
    if(isset($_SESSION["u_id"])){
    
    if(isset($_POST['B4']))
    
    {
        $galleryphoto=$_FILES["galleryphoto"]["name"];
        move_uploaded_file($_FILES["galleryphoto"]["tmp_name"],"../slide/".$_FILES["galleryphoto"]["name"]);
        
        
         $sql="INSERT INTO gallery(img) VALUES('$galleryphoto')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        header("location: page.php?pg=view_gallery");
        
        
    }
    else
    {
         $error="no";
    }
    }
    
    }

?>