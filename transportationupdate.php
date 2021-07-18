<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['update']))
{
    # code...
    $tra_id=$_POST['tra_id'];
      $name=$_POST['name'];
  $vehical_no=$_POST['vehical_no'];
  $destination=$_POST['destination'];
  $description=$_POST['description'];

     $stmt = $admin->cud("UPDATE `transportation` SET `name`='".$name."',`vehical_no`='".$vehical_no."',`destination`='".$destination."',`description`='".$description."' WHERE tra_id=".$tra_id,"updated");

         // echo "<script>alert('data updated successfully');</script>";
         //  $admin->redirect('../displaytransportation');
     echo "<script>alert('Data updated successfully');window.location='../displaytransportation.php';</script>";
    
    // $update) 
    
}
?>