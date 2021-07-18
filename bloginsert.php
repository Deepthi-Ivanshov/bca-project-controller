<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `members`(`fullname`, `username`, `email`, `password`) VALUES ('".$fullname."','".$username."','".$email."','".$password."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 // $admin->redirect('../bloglogin');
	echo "<script>alert('Your account has been created. Please login to add blog post');window.location='../bloglogin.php';</script>";
}


?>

