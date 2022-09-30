<?php
require 'function.php';
$id = $_GET['id_buku'];

// jika tidak ada id di URL
if (!isset($_GET['id_buku'])) {
  header("location: index.php");
  exit;
}

// mengambil id dari URL
$id = $_GET['id_buku'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data BERHASIL dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
  echo "<script>
            alert('Data GAGAL dihapus!');
            document.location.href = 'index.php';
        </script>";
}
