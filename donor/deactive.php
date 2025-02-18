<?php
include_once 'topconnect.php';
$freeze = "UPDATE users SET Status = 'Suspended' WHERE uid='$uid'";
$freeze_run = mysqli_query($connection, $freeze);
echo "<script>alert('You have been successfully been freezed ');window.location='logout.php';</script>";
?>

