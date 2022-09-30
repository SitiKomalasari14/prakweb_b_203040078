<?php
require 'function.php';

$id = $_GET['id_buku'];
$bk = query("SELECT * FROM buku WHERE id_buku = $id")[0];

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
  <style>
    body {
      background-color: beige;
    }
  </style>
</head>

<body>
  <div class="container">
    <h4>Halaman Ubah Data Data</h4>
    <form action="" method="post">

      <input type="hidden" name="id_buku" value="<?= $bk['id_buku']; ?>">

      <div class="card-panel">
        <div class="input-field">
          <label for="judul">Judul</label>
          <input type="text" name="judul" id="judul" required class="validate">
        </div><br>
        <div class="input-field">
          <input type="text" name="gambar" id="gambar" required class="validate">
          <label for="gambar">Gambar</label>
        </div><br>
        <div class="input-field">
          <input type="text" name="pengarang" id="pengarang" required class="validate">
          <label for="pengarang">Pengarang</label>
        </div><br>
        <div class="input-field">
          <input type="text" name="sinopsis" id="sinopsis" required class="validate">
          <label for="sinopsis">Sinopsis</label>
        </div><br>
        <button type="submit" name="ubah" class="btn btn-warning">Ubah Data!</button>
        <a href="index.php" class="btn btn-success">Kembali</a>
      </div>
    </form>
  </div>


  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>