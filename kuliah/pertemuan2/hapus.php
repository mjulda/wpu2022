<?php
require 'function.php';
// ketika klick hapus === pindah ke halaman hapus, kita juga akan mengirimkan id
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
       alert ('Data Berhasil Dihapus!');
       document.location.href='index.php';
       </script>";
} else {
  echo "Data Gagal Dihapus!";
}