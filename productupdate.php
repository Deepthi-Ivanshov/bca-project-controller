<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['update']))

{
    # code...
    $product_id=$_POST['product_id'];
      $pro_name=$_POST['pro_name'];
      $price=$_POST['price'];
    $description=$_POST['description'];



     // $target_dir="../uploads/";
 // $image =$target_dir.basename($_FILES["image"]["name"]);
  //move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
    // $image=$_POST['image'];
if(isset($_FILES['image']['name']) && ($_FILES['image']['name']!=""))
    {
        $target_dir="../uploads/";
        $image =$target_dir.basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
        $stmt = $admin->cud("UPDATE `product` SET `pro_name`='".$pro_name."',`image`='".$image."',`price`='".$price."',`description`='".$description."' WHERE product_id=".$product_id,"updated");

        // echo "<script>alert('data updated successfully');</script>";
        //  $admin->redirect('../displayproducts');
        echo "<script>alert('Data updated successfully');window.location='../displayproducts.php';</script>";

    }
    else
    {
        $stmt = $admin->cud("UPDATE `product` SET `pro_name`='".$pro_name."',`price`='".$price."',`description`='".$description."' WHERE product_id=".$product_id,"updated");

          //echo "<script>alert('data updated successfully');</script>";
        //  $admin->redirect('../displayproducts');
        echo "<script>alert('Data updated successfully');window.location='../displayproducts.php';</script>";
    
    }


    

     // $stmt = $admin->cud("UPDATE `product` SET `pro_name`='".$pro_name."',`image`='".$image."',`price`='".$price."',`description`='".$description."' WHERE product_id=".$product_id,"updated");

     //     echo "<script>alert('data updated successfully');</script>";
     //      $admin->redirect('../displayproducts');
    
    // $update) 
    
}
?>