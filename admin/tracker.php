<?php
date_default_timezone_set('Asia/Kathmandu');
require_once '../connection.php';
$username = $_SESSION['username'];
$this_page = $_SERVER['PHP_SELF'];
$ip = $_SERVER['REMOTE_ADDR'];
$date_auto = date('Y-m-d h:i');

$query = "INSERT INTO user_logs (page,IP,user_id,date_auto) VALUES ('$this_page','$ip','$username','$date_auto')";
$run = mysqli_query($con,$query);

//$query1 = "SELECT count(*) FROM user_logs WHERE page = '$this_page' ";

//$result = mysqli_query($con,$query1);
//$views = mysqli->result($result, 0, "count(*)");

//echo "This page has been views $views times";


?>