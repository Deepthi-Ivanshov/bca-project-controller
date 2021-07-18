<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['login'])) //POST - the action we have used
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	//go to app / admin.php

	$stmt=$admin->ret("SELECT username,password FROM `admin` where username='$username'and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	// $id=$row['u_id'];
	// $_SESSION['id']=$id;

	$num=$stmt->rowCount();
	if($num>0){
		
	$_SESSION['user']=$username;
		//$_SESSION['id']=$id;
		//echo $_SESSION['id'];

	 $admin->redirect('../admin');
	
	}
	else
	{
		echo "please check username and password";
	}
 
}
?>

