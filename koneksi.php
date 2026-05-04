<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_wisata";

$conn = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi gagal: ";
}else {
    echo "Koneksi berhasil";
}

?>