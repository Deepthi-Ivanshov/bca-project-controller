<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	//go to app / admin.php

	$stmt=$admin->ret("SELECT * FROM `members` where username='$username'and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num=$stmt->rowCount();
	if($num>0){
		$_SESSION['user']=$row['username'];
		//$_SESSION['id']=$id;
		//echo $_SESSION['id'];
		$id=$_SESSION['user'];
		$admin->redirect1('../addblog.php?id='.$id);
	
	}
	else
	{
		//echo "please check username and password";
		 echo "<script>alert('please check username and password');window.location='../bloglogin.php';</script>";
	}
 
}
?>

