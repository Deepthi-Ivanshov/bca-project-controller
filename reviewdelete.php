<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$review_id=$_GET['review_id'];

$stmt = $admin->cud("DELETE FROM `reviews` where review_id=".$review_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../viewreviews');	
echo "<script>alert('Data deleted successfully');window.location='../viewreviews.php';</script>";

?>