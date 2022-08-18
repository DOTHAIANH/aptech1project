<?php 
    if(isset($_GET['route'])) {
        $temp = $_GET['route'];
    }
    else {
        $temp = '';
    }

    if($temp=='category') {
        include("main/category.php");
    }
    else if($temp=='cart') {
        include("main/cart.php");
    }
    else if($temp=='details') {
        include("main/details.php");
    }
    else if($temp=='contact') {
        include("main/contact.php");
    }
    else if($temp=='news') {
        include("main/news.php");
    }
    else if($temp=='checkout') {
        include("main/checkout.php");
    }
    else if($temp=='complete') {
        include("main/complete.php");
    }
    else if($temp=='register') {
        include("users/register.php");
    }
    else if($temp=='login') {
        include("users/login.php");
    }
    else {
        include("main/index.php");
    }
?>