<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['update']))
{
    # code...
    $worker_id=$_POST['worker_id'];
      $worker_name=$_POST['worker_name'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $salary=$_POST['salary'];

     $stmt = $admin->cud("UPDATE `workers` SET `worker_name`='".$worker_name."',`address`='".$address."',`phoneno`='".$phoneno."',`salary`='".$salary."' WHERE worker_id=".$worker_id,"updated");

         // echo "<script>alert('data updated successfully');</script>";
         //  $admin->redirect('../displayworkers');
     echo "<script>alert('Data updated successfully');window.location='../displayworkers.php';</script>";
    
    // $update) 
    
}
?>