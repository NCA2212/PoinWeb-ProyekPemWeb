<?php
//koneksi ke database
$server = "localhost";
$database = "db_siswa";
$username = "root";
$password = "";
$koneksidb = mysqli_connect(
    $server, 
    $username, 
    $password, 
    $database
);
?>