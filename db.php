<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_suburmakmur';

    $conn = mysqli_connect($hostname, $username, $password, $database) or die ('Gagal Terhubung ke Database');
?>