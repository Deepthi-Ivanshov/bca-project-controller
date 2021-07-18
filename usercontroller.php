<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ (some name) to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$full_name=$_POST['full_name'];
	$user_name=$_POST['user_name'];
	$email_id=$_POST['email_id'];
	$phone_no=$_POST['phone_no'];
	$password=$_POST['password'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `user`(`full_name`, `user_name`, `email_id`, `phone_no`, `password`, `question`, `answer`) VALUES ('".$full_name."','".$user_name."','".$email_id."','".$phone_no."','".$password."','".$question."','".$answer."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
// echo "<script>alert('inserted successfully');</script>";
 echo "<script>alert('you have successfully entered. ');window.location='../userlogin.php';</script>";
}

//$admin->redirect('../userlogin');

?>

