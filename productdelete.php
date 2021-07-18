<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$product_id=$_GET['product_id'];

$stmt = $admin->cud("DELETE FROM `product` where product_id=".$product_id,"Deleted");

echo "<script>alert('Data deleted successfully');window.location='../displayproducts.php';</script>";
//echo "<script>alert('data deletes successfully');</script>";
//$admin->redirect('../displayproducts');	

?>