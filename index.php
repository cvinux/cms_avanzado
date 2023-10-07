<?php require 'res/php/app_top.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="res/css/main.css">
    <title>CMS Avanzado</title>
</head>
<body>

    <?php require "views/nav/main_nav.php"; ?>
    <?php 
        if(!isset($_GET['section'])){
            require 'views/home.php';
        }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="res/css/framework/semantic/semantic.min.js"></script>
</body>
</html>