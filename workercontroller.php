<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$worker_name=$_POST['worker_name'];
	$address=$_POST['address'];
	$phoneno=$_POST['phoneno'];
	$salary=$_POST['salary'];
	
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `workers`(`worker_name`, `address`, `phoneno`, `salary`) VALUES ('".$worker_name."','".$address."','".$phoneno."','".$salary."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
//  echo "<script>alert('inserted successfully');</script>";
	echo "<script>alert('Data inserted successfully');window.location='../displayworkers.php';</script>";
 }

// $admin->redirect('../displayworkers');
?>

