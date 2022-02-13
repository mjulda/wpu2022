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
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM siswa WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama = htmlspecialchars($data['nama']); // htmlspecialchars  utk cek <> inputan user
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE siswa SET
            nama = '$nama',
            nim = '$nim',
            email ='$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id=$id";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function login($data)
{
  $coon = koneksi();
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username == '123' && $password == '123') {
    header('Location: index.php');
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password salah!'
    ];
  }
}
