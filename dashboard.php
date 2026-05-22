<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Bimbel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-3">
    <a class="navbar-brand" href="#">Bimbel Nur Syailah</a>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
</nav>

<div class="container mt-4">

    <h3>Dashboard</h3>

    <div class="row mt-3">

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5>Siswa</h5>
                    <a href="siswa/tampil.php" class="text-white">Kelola</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5>Jadwal</h5>
                    <a href="jadwal/tampil.php" class="text-white">Kelola</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5>Pembayaran</h5>
                    <a href="pembayaran/tampil.php" class="text-white">Kelola</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>