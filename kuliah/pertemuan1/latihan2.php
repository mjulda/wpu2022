<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td> <img src="img/<?= $mhs['gambar'] ?>" height="100"></td>
        <td><?= $mhs['nim'] ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['email'] ?></td>
        <td><?= $mhs['jurusan'] ?></td>
        <td>
          <a href="">UBAH</a> | <a href="">HAPUS</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>