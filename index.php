<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
    <link rel="stylesheet" href="filecss.css">
</head>
<body class="body-html">
    <form>
        <div class="nama-label">
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>

        <div class="alamat-label">
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>

<?php 

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat']; 

if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}

?>

</body>
</html>