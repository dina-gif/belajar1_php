<?php include '../koneksi.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h3>Tambah Siswa</h3>

<form method="post">
    <input class="form-control mb-2" name="nama" placeholder="Nama">
    <input class="form-control mb-2" name="kelas" placeholder="Kelas">
    <input class="form-control mb-2" name="sekolah" placeholder="Sekolah">
    <input class="form-control mb-2" name="no_hp" placeholder="No HP">

    <button class="btn btn-success" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO siswa VALUES(
        NULL,
        '$_POST[nama]',
        '$_POST[kelas]',
        '$_POST[sekolah]',
        '$_POST[no_hp]'
    )");

    echo "<script>location='tampil.php'</script>";
}
?>

</div>