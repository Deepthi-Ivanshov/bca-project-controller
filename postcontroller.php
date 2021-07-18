<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['submit'])) //POST - the action we have used
{
	$member_id=$_POST['member_id'];

	
	$title=$_POST['title'];

	$target_dir="../uploads/";
	$image =$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));

	$date1=$_POST['date1'];
	// echo $date;
	$message=$_POST['message'];
	//go to app / admin.php

	  $stmt=$admin->cud("INSERT INTO `blog`(`member_id`, `title`, `image`, `date1`, `message`) VALUES ('".$member_id."','".$title."','".$image."','".$date1."','".$message."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 //   echo "<script>alert('inserted successfully');</script>";

	// $admin->redirect('../articles');
	  echo "<script>alert('Blog post has been successfully inserted');window.location='../articles.php';</script>";
}


?>

