<?php
ob_start();
session_start();
require_once 'connection.php';
if (!isset($_SESSION['UserName'])) {
   header('Location:login.php');
}

?>
