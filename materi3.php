<form method="post">
    masukan angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        if ($angka % 2 == 0) {
            echo "Angka $angka adalah GENAP <br>";
        } else {
            echo "Angka $angka adalah GANJIL <br>";
        }
    }

?>