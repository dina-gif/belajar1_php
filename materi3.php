<?php
    function hello(){
        echo "Selamat Datang di kelas TIA1";
    }
    hello();

echo "<br><br>=============================================================<br><br>";
    function tambah(int $a, int $b){
        $hasil = $a + $b;
        return $hasil;
    }

    function kurang(int $a, int $b){
        $hasil = $a - $b;
        return $hasil;
    }

    function bagi(int $a, int $b){
        $hasil = $a / $b;
        return $hasil;
    }

    function kali(int $a, int $b){
        $hasil = $a * $b;
        return $hasil;
    }

echo "<br><br>=============================================================<br><br>";
?>

<<<<<<< HEAD
    <form method="POST">
=======
    <form method="POST"> 
        Masukkan Angka 1: <input type="number" name="angka1"><br><br>
        Masukkan Angka 2: <input type="number" name="angka2"><br><br>
        <input type="submit" name="kirim" value="kirim">
    </form>

<?php
    if(isset($_POST['kirim'])){
        $newangka1 = $_POST['angka1'];
        $newangka2 = $_POST['angka2'];
        echo "Hasil Pertambahan: " . tambah($newangka1, $newangka2);
        echo "<br>";
        echo "Hasil Pengurangan: " . kurang($newangka1, $newangka2);
        echo "<br>";
        echo "Hasil Perkalian: " . kali($newangka1, $newangka2);
        echo "<br>";
        echo "Hasil Pembagian: " . bagi($newangka1, $newangka2);
    }

?>