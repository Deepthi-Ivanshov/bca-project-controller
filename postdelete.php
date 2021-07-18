<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$blog_id=$_GET['blog_id'];

$stmt = $admin->cud("DELETE FROM `blog` where blog_id=".$blog_id,"Deleted");


//echo "<script>alert('data deletes successfully');</script>";
//$admin->redirect('../displayblog');	
echo "<script>alert('Data deleted successfully');window.location='../displayblog.php';</script>";
?>