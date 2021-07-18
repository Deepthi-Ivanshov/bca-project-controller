<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$date=$_POST['date'];
	$message=$_POST['message'];
	// $message=$_POST['message'];
	
	
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `contact`(`user_id`, `user_name`, `date`, `message`) VALUES ('".$user_id."','".$user_name."','".$date."','".$message."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('Your message has been sent... Please waite for the response...');</script>";

echo "<script>alert('Your message has been sent... Please wait for the response...');window.location='../replyuser.php';</script>";
}

// $admin->redirect('../contact');
?>

