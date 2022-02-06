<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  // kalau uda klick tombol tambah, ambil semua data post kirimkan ke sebuah function tambah
  if (tambah($_POST) > 0) {
    echo "<script>
            alert ('Data Berhasil Ditambahkan!');
            document.location.href='latihan3.php';
          </script>";
  } else {
    echo "Data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah data Mahasiswa</title>
</head>

<body>
  <h3>Tambah data Mahasiswa</h3>
  <a href="latihan3.php">Batal Tambah</a>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>

      <li>
        <label>
          Nim :
          <input type="text" name="nim" required>
        </label>
      </li>

      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>

      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>