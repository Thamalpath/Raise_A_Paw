<?php
ob_start();
include 'admin/inc/db.php';
session_start();
if(isset($_POST['enquiry']))
    {      
        $name = str_replace("'","''", $_POST['name']);  
       $email=str_replace("'","''",$_POST['email']);
        $mobile=str_replace("'","''",$_POST['phone']);
        $msg=str_replace("'","''",$_POST['msg']);
   
        
      
      
         $stmt = $dbh->prepare("Insert into enquiry (name,mobile,email,msg,cdate) values ('$name','$mobile','$email','$msg',curdate())");
        $stmt->execute();
        session_regenerate_id(); 
        $_SESSION["u_id"] = $mobile;
      // header("location: contact_us1.php");
   echo '<script>alert("Thank you for contact with us, will soon get back to you.");window.location.href="index.php";</script>';

    }
?>
 