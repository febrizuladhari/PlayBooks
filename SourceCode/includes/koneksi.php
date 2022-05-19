<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = "playbooks";

    $koneksi = mysqli_connect($host, $user, $pass, $database);

    if(!$koneksi){
    die ("Koneksi Gagal: ".mysqli_connect_errno().
        " - ".mysqli_connect_error());
    }

?>