<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$name=$_POST['name'];
	$vehical_no=$_POST['vehical_no'];
	$destination=$_POST['destination'];
	$description=$_POST['description'];
	//go to app / admin.php

	$stmt=$admin->cud("INSERT INTO `transportation`(`name`, `vehical_no`, `destination`, `description`) VALUES ('".$name."','".$vehical_no."','".$destination."','".$description."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 //  $admin->redirect('../displaytransportation');
	echo "<script>alert('Data inserted successfully');window.location='../displaytransportation.php';</script>";

}


?>

