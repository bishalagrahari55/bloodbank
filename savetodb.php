<?php
ob_start();
session_start();
require_once 'connection.php';
date_default_timezone_set("Asia/Kathmandu");
$date = date('Y-m-d');
$dates = date('Y-m-d H:i:s');
$time = date('H:i:s');
$desc = 'has Contacted you regarding Membership.';
include_once 'Vistors.php';
if (isset($_POST['submit'])) {
    $Name = mysqli_real_escape_string($connection, $_POST['Name']);
    $Email = mysqli_real_escape_string($connection, $_POST['Email']);
    $age = mysqli_real_escape_string($connection, $_POST['age']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $blood = mysqli_real_escape_string($connection, $_POST['blood']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $string = "gks1990";
    $datestr = substr(strtotime(date('H:i:s')), 0, 2);
    $random_position = rand(0, strlen($string) - 1);
    $chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789-_";
    $random_char = $chars[rand(0, strlen($chars) - 1)];
    $uname = substr($string, 0, $random_position) . $random_char . substr($string, $random_position) . $datestr;
    $pass = substr($string, 0, $random_position) . $random_char . substr($string, $random_position);
    if (empty($Name) or empty($Email) or empty($age) or empty($phone) or empty($gender) or empty($blood)) {
        echo "<script>alert('Please Fill all the fields *');</script>";
    } else {
        $insert = mysqli_query($connection, "insert into users(FullName,UserName,Password,Email,BloodGroup,Age,Gender,MobileNumber,Address,"
                . "PostingDate,JoinDate,Status,Role,Public)"
                . "values('$Name','$uname','$pass','$Email','$blood','$age','$gender','$phone','$address',"
                . "'$dates','$date','Deactive','1','0')");
        
        $dbuid = mysqli_insert_id($connection); 

        $ghosa=mysqli_query($connection, "insert into system_log(UID,UserName,Page,Browser,IP,LogTime,LogDate,LogLink,Description,OS)"
                . "VALUES('$dbuid','$uname','$page','$user_browser','$user_ip','$time','$date','$link','$desc','$user_os')");
        if($insert){
                        echo "<script>alert('SuccessFully Posted the Donor Request, Will get in touch with you within an hour..');location.href = 'index.php';</script>";              
        }else{
                        echo "<script>alert('Failed to Post the Donor Request,  Email address has already been used !!!');location.href = 'index.php';</script>";
        }
    }
}
include_once 'header.php';
?>