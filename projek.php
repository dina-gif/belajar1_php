<?php
include 'koneksip.php';

/* =========================
TAMBAH DATA
========================= */
if (isset($_POST['tambah'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $sekolah = $_POST['sekolah'];
    $kelas = $_POST['kelas'];
    $program = $_POST['program_bimbel'];

    mysqli_query($conn, "INSERT INTO siswa VALUES(
        '',
        '$nama',
        '$alamat',
        '$no_hp',
        '$sekolah',
        '$kelas',
        '$program'
    )");

    header("Location:projek.php");
}

/* =========================
UPDATE DATA
========================= */
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $sekolah = $_POST['sekolah'];
    $kelas = $_POST['kelas'];
    $program = $_POST['program_bimbel'];

    mysqli_query($conn, "UPDATE siswa SET
        nama='$nama',
        alamat='$alamat',
        no_hp='$no_hp',
        sekolah='$sekolah',
        kelas='$kelas',
        program_bimbel='$program'
        WHERE id='$id'
    ");

    header("Location:projek.php");
}

/* =========================
HAPUS DATA
========================= */
if (isset($_GET['hapus'])) {

    $id = $_GET['hapus'];

    mysqli_query($conn, "DELETE FROM siswa WHERE id='$id'");

    header("Location:projek.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Bimbel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h2 class="text-center mb-4">
            Website Pendaftaran Bimbel
        </h2>

        <?php

        /* =========================
    EDIT DATA
    ========================= */
        if (isset($_GET['edit'])) {

            $id = $_GET['edit'];

            $edit = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");

            $d = mysqli_fetch_array($edit);

        ?>

            <!-- FORM EDIT -->

            <div class="card p-4 mb-4">

                <h4>Edit Data Siswa</h4>

                <form method="POST">

                    <input type="hidden" name="id"
                        value="<?= $d['id']; ?>">

                    <div class="mb-3">
                        <label>Nama</label>

                        <input type="text"
                            name="nama"
                            value="<?= $d['nama']; ?>"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>

                        <textarea name="alamat"
                            class="form-control"><?= $d['alamat']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label>No HP</label>

                        <input type="text"
                            name="no_hp"
                            value="<?= $d['no_hp']; ?>"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Sekolah</label>

                        <input type="text"
                            name="sekolah"
                            value="<?= $d['sekolah']; ?>"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Kelas</label>

                        <input type="text"
                            name="kelas"
                            value="<?= $d['kelas']; ?>"
                            class="form-control">
                    </div>

                    <div class="mb-4">
                        <label>Program Bimbel</label>

                        <select name="program_bimbel"
                            class="form-control">

                            <option <?= ($d['program_bimbel'] == "Matematika") ? "selected" : ""; ?>>
                                Matematika
                            </option>

                            <option <?= ($d['program_bimbel'] == "Bahasa Inggris") ? "selected" : ""; ?>>
                                Bahasa Inggris
                            </option>

                            <option <?= ($d['program_bimbel'] == "IPA") ? "selected" : ""; ?>>
                                IPA
                            </option>

                            <option <?= ($d['program_bimbel'] == "Bahasa Indonesia") ? "selected" : ""; ?>>
                                Bahasa Indonesia
                            </option>

                        </select>
                    </div>

                    <button type="submit"
                        name="update"
                        class="btn btn-primary">
                        Update
                    </button>

                    <a href="projek.php"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        <?php } else { ?>

            <!-- FORM TAMBAH -->

            <div class="card p-4 mb-4">

                <h4>Tambah Data Siswa</h4>

                <form method="POST">

                    <div class="mb-3">
                        <label>Nama</label>

                        <input type="text"
                            name="nama"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>

                        <textarea name="alamat"
                            class="form-control"
                            required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>No HP</label>

                        <input type="text"
                            name="no_hp"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Sekolah</label>

                        <input type="text"
                            name="sekolah"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Kelas</label>

                        <input type="text"
                            name="kelas"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label>Program Bimbel</label>

                        <select name="program_bimbel"
                            class="form-control">

                            <option>Matematika</option>
                            <option>Bahasa Inggris</option>
                            <option>IPA</option>
                            <option>Bahasa Indonesia</option>

                        </select>
                    </div>

                    <button type="submit"
                        name="tambah"
                        class="btn btn-success">
                        Simpan
                    </button>

                </form>

            </div>

        <?php } ?>

        <!-- TABEL DATA -->

        <table class="table table-bordered table-striped">

            <tr class="table-dark">

                <th>No</th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Kelas</th>
                <th>Program</th>
                <th>Aksi</th>

            </tr>

            <?php

            $data = mysqli_query($conn, "SELECT * FROM siswa");

            $no = 1;

            while ($d = mysqli_fetch_array($data)) {

            ?>

                <tr>

                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['sekolah']; ?></td>
                    <td><?= $d['kelas']; ?></td>
                    <td><?= $d['program_bimbel']; ?></td>

                    <td>

                        <a href="?edit=<?= $d['id']; ?>"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="?hapus=<?= $d['id']; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </a>

                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>

</body>

</html>