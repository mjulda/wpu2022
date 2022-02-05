<?php
// koneksi ke DB dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

// query isi tabel siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");

// ubah data kedalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // array dari keduanya

$rows = []; // array kosong di isi dengan $row
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung kedalam variabel mahasiswa
$mahasiswa = $rows;
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