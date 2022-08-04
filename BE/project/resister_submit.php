<?php
include 'config.php';

    if( isset($_POST['submit']) && $_POST["username"] != "" && $_POST["password"] != "" 
    && $_POST["repassword"] != ""){
        //xu li khi nguoi dung an dang nhap ca co du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if( $password != $repassword ) {
            header("location:resister.php");
        }
        $sql = "SELECT*FROM USER WHERE username='username'";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if (mysqli_num_rows($old) > 0){
            header("location:resister.php");
        }
        $sql = "INSERT INTO user (username,password) VALUES('$username','$password')";
        mysqli_query($conn,$sql);
        echo "Da dang ki thanh cong";


    }else{
        header("location:resister.php");
    }
?>