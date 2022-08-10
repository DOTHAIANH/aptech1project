<?php
    require_once('../../../config/dbhelp.php');
    $product_name = $price = $amount = $thumbnail = $description = $status = ''; 
    if(!empty($_POST)) {
      $product_name = $_POST['product_name'];
      $price = $_POST['price'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $status = $_POST['status'];

      $thumbnail = $_FILES['thumbnail']['name'];
      $thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];

      $sql_add = "insert into product (product_name,price,amount,thumbnail,description,status) 
      values ('$product_name','$price','$amount','$thumbnail','$description','$status')";
      move_uploaded_file($thumbnail_tmp,'uploads/'.$thumbnail);
      execute($sql_add);
      header('Location:../../index.php?action=productDetails');
      
    }
?>