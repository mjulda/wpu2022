<?php
require 'function.php';
// ambil id dari URL
$id = $_GET['id'];
// kemudian query siswa
$mhs = query("SELECT * FROM siswa WHERE id=$id");

if (isset($_POST['ubah'])) {
  // kalau uda klick tombol ubah, ambil semua data post kirimkan ke sebuah function tambah
  if (ubah($_POST) > 0) {
    echo "<script>
            alert ('Data Berhasil diubah!');
            document.location.href='index.php';
          </script>";
  } else {
    echo "Data Gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah data Mahasiswa</title>
</head>

<body>
  <h3>Ubah data Mahasiswa</h3>
  <a href="index.php">Batal Ubah</a>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
        </label>
      </li>

      <li>
        <label>
          Nim :
          <input type="text" name="nim" required value="<?= $mhs['nim']; ?>">
        </label>
      </li>

      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $mhs['email']; ?>">
        </label>
      </li>

      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $mhs['gambar']; ?>">
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>