<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$booking_id=$_POST['booking_id'];
	$user_name=$_POST['user_name'];
	$pro_name=$_POST['pro_name'];
	$date1=$_POST['date1'];
	$type=$_POST['type'];
	
	$amount=$_POST['amount'];
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `payment`(`booking_id`, `user_name`, `pro_name`, `date1`, `type`, `amount`) VALUES ('".$booking_id."','".$user_name."','".$pro_name."','".$date1."','".$type."','".$amount."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 // $admin->redirect('../invoice');
	echo "<script>alert('Booking has been done successfully');window.location='../invoice.php';</script>";
}


?>

