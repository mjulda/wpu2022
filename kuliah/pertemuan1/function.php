<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'phpdasar');
}
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = []; // array kosong di isi dengan $row

  // jika hasilnya hanya 1 data di tampilkan
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  // jika data banyak
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']); // htmlspecialchars  utk cek <> inputan user
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
            siswa VALUE
            (null,'$nama', '$nim', '$email','$jurusan', '$gambar');
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
