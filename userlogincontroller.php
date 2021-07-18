<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['login'])) //POST - the action we have used
{
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	//go to app / admin.php

	$stmt=$admin->ret("SELECT * FROM `user` where user_name='$user_name'and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num=$stmt->rowCount();
	if($num>0){
		$_SESSION['user']=$row['user_name'];
		$_SESSION['id']=$row['user_id'];
		$id=$_SESSION['id'];

		 $admin->redirect1('../home.php?id='.$id);	
	}
	else
	{
		 echo "<script>alert('please check username and password');window.location='../userlogin.php';</script>";
		// echo "please check username and password";
	}
 
}




if(isset($_POST['forgot'])) 
{
$user_name = $_POST['user_name'];
$stmt=$admin->ret("SELECT user_id FROM `user` where user_name='$user_name'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC); 
  $num=$stmt->rowCount(); 
  $id= $row['user_id'];
  $_SESSION['user']=$user_name;
  $_SESSION['id']=$id;
 
  if($num>0)
  {
$admin->redirect1("../password.php?id=".$id);          //echo "<script>alert('Please check user name and password');window.location='../forgot.php';</script>";   
  }
  else{
    echo "<script>alert('Please check user name ');window.location='../userlogin.php';</script>";
    
 } 
}
?>

