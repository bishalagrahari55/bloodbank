<?php

ob_start();
session_start();
require_once 'connection.php';
date_default_timezone_set("Asia/Kathmandu");
$date = date('Y-m-d');
$dates = date('Y-m-d H:i:s');
$time = date('H:i:s');
$desc = 'has Contacted you regarding Blood.';
include_once 'Vistors.php';
if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);
    $mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
    
    if(empty($fname) or empty($email) or empty($message)){
        echo "<script>alert('Please Fill Out First..');location.href='index.php#gallery'</script>";
    }else{
        $sql = mysqli_query($connection, "insert into tblcontactusquery(name,EmailId,ContactNumber,Message,Status)values"
                . "('$fname','$email','$mobile','$message','0')");
        echo "<script>alert('Thankyou for reaching us. We will definately reach you out within few hours..');location.href='index.php'</script>";
    }
    
}
?>