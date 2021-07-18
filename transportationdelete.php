<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$tra_id=$_GET['tra_id'];

$stmt = $admin->cud("DELETE FROM `transportation` where tra_id=".$tra_id,"Deleted");


// echo "<script>alert('data deletes successfully');</script>";
// $admin->redirect('../displaytransportation');	
echo "<script>alert('Data deleted successfully');window.location='../displaytransportation.php';</script>";

?>