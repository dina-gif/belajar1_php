<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "data berhasil di tambahkan";
    } else {
        echo "data gagal di tambahkan";
    }
} 

//proses hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM user WHERE id_user = '$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "data berhasil dihapus";
    } else {
        echo "data tidak berhasil dihapus";
    }
}
?>

<form method="POST">
    username : <input type="text" name="username"> 
    password : <input type="password" name="password">
    nama : <input type="text" name="nama">
    email : <input type="email" name="email">
    <input type="submit" value="kirim data" name="kirim">
</form>

//menampilkan data

<table border="1">
    <tr>
        <th>id_user</th>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
        <th>email</th>
        <th>aksi</th>
    </tr>

    <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($query)){
            echo "<tr>
            <td>{$row['id_user']}</td>
            <td>{$row['username']}</td>
            <td>{$row['password']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td><a href='materi4.php?hapus={$row['id_user']}'>hapus</a> | <a href=?edit={$row['id_user']}'>edit</a></td>
            </tr>";
        }
    ?>

</table>