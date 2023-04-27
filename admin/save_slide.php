<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
include 'inc/config.php';
include 'inc/db.php';
if(isset($_SESSION["u_id"])){
	

	$got_error = 0;

	$file_loc = "../slide/";
	


if (isset($_POST["B3"])){
		

$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF");
$getext = explode(".", $_FILES["f"]["name"]);
$extension = end($getext);
if (($_FILES["f"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["f"]["error"] > 0)
    {
    echo "Error Code: " . $_FILES["f"]["error"] . "<br />";
	$got_error = 1;
    }
  else
    {
	

		$stmt = $dbh->prepare("Insert into slide (sl) values ('$_POST[D2]')");
		$stmt->execute();
		
		$arr = $stmt->errorInfo();
	if($arr[0]!=0){
print_r($arr[2]);}
else{

}
		

	$file_id = $dbh->lastInsertId(); 

      move_uploaded_file($_FILES["f"]["tmp_name"], $file_loc . $file_id.".".$extension);

	 $stmt = $dbh->prepare("update slide set img ='$file_id.$extension' where id = $file_id");
     	$stmt->execute();	
    }
  }
else
  {
  echo "Invalid file";
  $got_error = 1;
  }
 

if($got_error == 0){

	header("location: page.php?pg=view_slide");
}
}




}
?> 