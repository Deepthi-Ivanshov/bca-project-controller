<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ (some name) to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$user_id=$_POST['user_id'];
	$answer=$_POST['answer'];
	

	//$id=$_GET['id'];
	$stmt=$admin->ret("SELECT * FROM `user` where user_id='".$user_id."'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$ans=$row['answer'];
	

	if($ans==$answer)
	{
		$pass=$row['password'];
		$admin->redirect1('../passworddisplay.php?id='.$user_id);

	}

	else
	{
		echo '<script>alert("Your answer is incorrect...Please try again..."); window.location="../userlogin.php";</script>';
	}
}
				
//  echo "<script>alert('inserted successfully');</script>";
// }

// $admin->redirect('../userlogin');

?>

