<?php

    require '../Functions.php';
    $admin = new Admin_Actions();

    //Login
    $login = $admin->logIn($_POST['email'], $_POST['pass']);

    if($login){
        //iniciar sesion
        $_SESSION['admin']=$_POST['email'];
        echo "true";
    }else{
        echo "false";
    }

?>