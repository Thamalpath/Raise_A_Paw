<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();

include 'inc/config.php';
include 'inc/db.php';
if(isset($_SESSION["u_id"])){
	if (isset($_SERVER['HTTP_REFERER']))
{

	$got_error = 0;

//$file_loc = "C:\\Inetpub\\vhosts\\easternzar.com\\httpdocs\\upload/";
	$file_loc = "../slide/";
	
$file=$file_loc .$_POST["img"];

if (isset($_POST["B5"])){
		

		$stmt = $dbh->prepare("delete from whatwe where id = $_POST[id]");
		$stmt->execute();
		
		unlink($file);
	
	header("location: page.php?pg=view_whatdo");
}
}}


?>
