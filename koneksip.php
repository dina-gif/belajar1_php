<?php

$conn = mysqli_connect("localhost", "root", "", "pendaftaran_bimbel");

if (!$conn) {
    echo "Koneksi gagal: ";
}else {
    echo "Koneksi berhasil";
}

?>