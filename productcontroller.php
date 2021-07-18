<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$pro_name=$_POST['pro_name'];

	$target_dir="../uploads/";
	$image =$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	
	$price=$_POST['price'];
	$description=$_POST['description'];
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `product`(`pro_name`, `image`, `price`, `description`) VALUES ('".$pro_name."','".$image."','".$price."','".$description."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";
	echo "<script>alert('Data inserted successfully');window.location='../displayproducts.php';</script>";
}

//$admin->redirect('../displayproducts');

?>

