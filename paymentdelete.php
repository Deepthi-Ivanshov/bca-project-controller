<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$payment_id=$_GET['payment_id'];

$stmt = $admin->cud("DELETE FROM `payment` where payment_id=".$payment_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
//  $admin->redirect('../displaypayments');	
echo "<script>alert('Data deleted successfully');window.location='../displaypayments.php';</script>";
?>