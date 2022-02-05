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
