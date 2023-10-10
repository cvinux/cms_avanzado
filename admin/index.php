<?php require '../res/php/app_top_admin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="../res/css/main.css">
    <title>Administrador</title>
</head>
<body>

    <?php 
        if(isset($_SESSION['admin'])){
            require "../views/nav/main_admin_nav.php"; 
        }
    ?>

    <?php 
        if(!isset($_SESSION['admin'])){
            require '../views/admin/home.php';
        }else if (
            isset($_SESSION['admin']) && !isset($_GET['section'])
        ){
            require '../views/admin/main.php';
        }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../res/css/framework/semantic/semantic.min.js"></script>
<script src="../res/js/admin.js"></script>
</body>
</html>