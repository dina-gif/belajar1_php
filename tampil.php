<?php
include '../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h3>Data Siswa</h3>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>

<table class="table table-bordered table-striped">
<tr>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Sekolah</th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>

<?php while ($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['kelas'] ?></td>
    <td><?= $d['sekolah'] ?></td>
    <td><?= $d['no_hp'] ?></td>
    <td>
        <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $d['id'] ?>">Edit</a>
        <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</div>