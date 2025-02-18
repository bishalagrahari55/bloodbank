<?php
error_reporting(1);
ini_set('session.gc_maxlifetime', 180);
session_set_cookie_params(180);
ini_set('max_execution_time', 300);
ob_start();
session_start();
//include_once 'vistors.php';
require_once '../connection.php';
if (!isset($_SESSION['UserName'])) {
    header('Location:../login.php');
}
$fullname = $_SESSION['FullName'];
$username = $_SESSION['UserName'];
$eimage = $_SESSION['DonorImage'];
$role = $_SESSION['Role'];
$uid = $_SESSION['UID'];
$query = "SELECT * FROM users WHERE username='$username'";
$run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($run);
$date = $row['JoinDate']; //it will store in the form of array
$day = date('d');
$month = date('M');
$year = date('Y');
$bgroup = $row['BloodGroup'];
$mobile = $row['MobileNumber'];
$address = $row['Address'];
$gender = $row['Gender'];
$email = $row['Email'];
$age = $row['Age'];
$message = $row['Message'];
$lastdonated = $row['LastDonatedDate'];

?>
