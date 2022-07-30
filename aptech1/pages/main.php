<?php 
    if(isset($_GET['manage'])) {
        $temp = $_GET['manage'];
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
    else if($temp=='contact') {
        include("main/contact.php");
    }
    else if($temp=='news') {
        include("main/news.php");
    }
    else if($temp=='sale') {
        include("main/news.php");
    }
    else {
        include("main/index.php");
    }
?>