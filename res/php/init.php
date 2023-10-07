<?php

    session_start();

    require 'medoo.php';

    use Medoo\Medoo;

    try{
        
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'cms_avanzado',
            'username' => 'root',
            'password' => '231006',
         
            
        ]);

    }catch(PDOException $e){
        echo "No se pudo conectar a la base de datos";
    }


    