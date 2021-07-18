<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$worker_id=$_GET['worker_id'];

$stmt = $admin->cud("DELETE FROM `workers` where worker_id=".$worker_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../displayworkers');	
echo "<script>alert('Data deleted successfully');window.location='../displayworkers.php';</script>";
?>