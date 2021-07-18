<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['submit'])) //POST - the action we have used
{
	$client_id=$_POST['user_id'];
	$stmt = $admin->ret("SELECT * FROM `user` where user_name='".$client_id."'");
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     $cid=$row['user_id'];
	$product_id=$_POST['product_id'];
	$pro_name=$_POST['pro_name'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$pieces=$_POST['pieces'];
	$date=$_POST['date'];
	
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$delivery_address=$_POST['delivery_address'];
	$total=$pieces*$price;
	//go to app / admin.php

	$stmt=$admin->Rcud("INSERT INTO `booking`(`user_id`, `product_id`, `pro_name`, `price`, `category`, `pieces`, `date`,  `email`, `phoneno`, `delivery_address`) VALUES ('".$cid."','".$product_id."','".$pro_name."','".$total."','".$category."','".$pieces."','".$date."','".$email."','".$phoneno."','".$delivery_address."')");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 
$admin->redirect('../payment.php?id='.$stmt);
}

?>

