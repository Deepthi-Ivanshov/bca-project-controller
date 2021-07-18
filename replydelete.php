<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$con_id=$_GET['con_id'];

$stmt = $admin->cud("DELETE  FROM `contact` where con_id=".$con_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
//  $admin->redirect('../replyuser');	
echo "<script>alert('Data deleted successfully');window.location='../replyuser.php';</script>";

?>
