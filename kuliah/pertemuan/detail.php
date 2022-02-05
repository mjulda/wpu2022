<?php
require 'function.php';
// ambil id dari URL
$id = $_GET['id'];
// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM siswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar'] ?>" height="200"></li>
    <li>Nim : <?= $mhs['nim'] ?></li>
    <li>Nama : <?= $mhs['nama'] ?></li>
    <li>Email : <?= $mhs['email'] ?></li>
    <li>Jurusan : <?= $mhs['jurusan'] ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <br>
    <a href="latihan3.php">Kembali ke daftar Mahasiswa</a>
  </ul>
</body>

</html>