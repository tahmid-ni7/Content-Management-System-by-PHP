<?php 
 session_start();
 include('component/db.php');
 include('component/loginout.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    
    
    <script src="js/jquery-1.12.4.mic.js"></script>
</head>
<body>
    <header class="header-area sticker" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <a href="">CMS</a>
                    </div>
                </div>
                <div class="col-md-10 text-right">
                    <?php include('component/menu.php'); ?>
                </div>
            </div>
        </div>
    </header>




     <?php include('component/controller.php'); ?>

              

 <?php include('footer.php'); ?>



