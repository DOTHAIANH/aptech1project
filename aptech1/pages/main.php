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
    else if($temp=='register') {
        include("register-login/register.php");
    }
    else if($temp=='login') {
        include("register-login/login.php");
    }
    else if($temp=='forgot') {
        include("register-login/change-pwd.php");
    }
    else if($temp=='sale') {
        include("main/sale.php");
    }
    else {
        include("main/index.php");
    }
?>