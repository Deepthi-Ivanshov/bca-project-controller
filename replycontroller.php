<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{

	$con_id=$_POST['con_id'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	
	//go to app / admin.php

	$stmt = $admin->cud("UPDATE `contact` SET `reply`='".$answer."' WHERE con_id=".$con_id,"updated");
	//$stmt=$admin->cud("INSERT INTO `reply`(`con_id`, `question`, `answer`) VALUES ('".$con_id."','".$question."','".$answer."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 // echo "<script>alert('inserted successfully');</script>";

 // $admin->redirect('../replyclients');
	echo "<script>alert('Data inserted successfully');window.location='../replyclients.php';</script>";
}


?>

