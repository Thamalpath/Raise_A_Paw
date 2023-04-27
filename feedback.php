<?php 
ob_start(); 
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
// $comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `donation`(`name`, `email`, `phone`, `amount`) VALUES ('$name','$email','$num','$view')");
echo '<script>alert("Thank You..! Your payment is successful"); location.replace(document.referrer);</script>';

?>