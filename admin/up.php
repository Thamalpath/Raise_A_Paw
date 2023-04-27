<?php
include 'inc/db.php';

if(isset($_POST['B4']))
{    
 $f_id = $_POST['id2'];

$file_loc="../doc_pic/";

$allowedExts = array("jpg", "jpeg", "gif", "png", "pdf", "JPG", "JPEG", "GIF");
$getext = explode(".", $_FILES["f"]["name"]);
$extension = end($getext);
print_r ($extension);
if (($_FILES["f"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["f"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["f"]["error"] . "<br/>";
	$got_error = 1;
    }
  else
    {
	
 

  echo ($extension) ;
      move_uploaded_file($_FILES["f"]["tmp_name"], $file_loc . $f_id.".".$extension);
	// echo "update doctopr set photo ='$f_id.$extension' where id = $_POST[id2]";
	 $stmt = $dbh->prepare("update doctor set photo ='$f_id.$extension' where id = $_POST[id2]");
     	$stmt->execute();	
    }
  }
else
  {
  echo "Invalid file";
  $got_error = 0;
  }
 
echo $got_error;
if($got_error == 0){

	header("location: page.php?pg=viewdoc");
}

}



?>