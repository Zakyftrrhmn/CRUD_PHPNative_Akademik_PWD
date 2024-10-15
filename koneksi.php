<?php

    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'akademik';

    $connection = mysqli_connect($db_host, $db_username, $db_password, $db_name,);

    if($connection){
        echo "Database Terkoneksi";
    }else{
        echo "Database Tidak Terkoneksi";
    }
?>