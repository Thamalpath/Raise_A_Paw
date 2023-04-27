<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
 
include 'inc/db1.php';



if(isset($_POST['adoption']))
{
    

 $title=$_POST["title"];

$image=$_FILES["img1"]["name"];


$short=$_POST["content"];

 
move_uploaded_file($_FILES["img1"]["tmp_name"],"logo/".$_FILES["img1"]["name"]);

    $sql="INSERT INTO whatwe(title,image,content) VALUES('$title','$image','$short')";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        echo "Successfully add your images";
    }
    else
    {
        echo "No";
    }


} 



?>