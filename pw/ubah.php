<?php
require 'function.php';

// ambil id dr url
$id_buku = $_GET['id_buku'];

//query berdasarkan id 
$b = query("SELECT * FROM buku WHERE id_buku = $id_buku");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data BERHASIL diubah!');
                document.location.href = 'index.php';
            </script>";
  } else {
    echo "<script>
                alert('Data GAGAL diubah!');
                document.location.href = 'index.php';
            </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #C8C6C6;
    }

    h3,
    .container {
      padding: 10px;
      font-family: 'Fraunces', serif;

    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Halaman Ubah Data</h3><br>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_buku" value="<?= $b['id_buku']; ?>">
      <div class="mb-3">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control" required class="validate">
      </div>
      <div class="mb-3">
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" class="form-control" required class="validate">
      </div>
      <div class="mb-3">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" class="form-control" required class="validate">
      </div>
      <div class="mb-3">
        <label for="sinopsis">Gambar</label>
        <input type="text" name="sinopsis" id="sinopsis" class="form-control" required class="validate">
      </div>
      <button type="submit" name="ubah" class="btn btn-danger">Ubah Data!</button>
      <a href="index.php" class="btn btn-success">Kembali</a>
    </form>
  </div>


  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>