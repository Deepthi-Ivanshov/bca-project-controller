<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$booking_id=$_GET['booking_id'];

$stmt = $admin->cud("DELETE FROM `booking` where booking_id=".$booking_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../displaybooking');
echo "<script>alert('Data deleted successfully');window.location='../displaybooking.php';</script>";	

?>