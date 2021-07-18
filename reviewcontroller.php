<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{

	$user_id=$_POST['user_id'];
	$review=$_POST['review'];
	
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `reviews`(`user_id`, `review`) VALUES ('".$user_id."','".$review."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 //  $admin->redirect('../reviewsdisplay');
	echo "<script>alert('Data inserted successfully');window.location='../reviewsdisplay.php';</script>";
}


?>

