<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$member_id=$_GET['member_id'];

$stmt = $admin->cud("DELETE FROM `members` where member_id=".$member_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../displaymember');	
echo "<script>alert('Data deleted successfully');window.location='../displaymember.php';</script>";
?>