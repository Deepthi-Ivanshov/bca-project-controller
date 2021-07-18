<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$user_id=$_GET['user_id'];

$stmt = $admin->cud("DELETE FROM `user` where user_id=".$user_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../displayuser');	
echo "<script>alert('Data deleted successfully');window.location='../displayuser.php';</script>";

?>