<?php

$server = "db";
$user = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$nama_database = "MY_DATABASE";

$db = new mysqli($server, $user, $password, $nama_database);

if (!$db)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
