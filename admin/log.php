<?php
ob_start();
session_start();
require_once '../connection.php';
function logAction($message, $status, $con)
{
    $username = $_SESSION['username'];
    $check = mysqli_query($con, "INSERT INTO `user_logs` (status,message,user_id) VALUES('$status','$message','$username')") ;
    return $check;
}

?>