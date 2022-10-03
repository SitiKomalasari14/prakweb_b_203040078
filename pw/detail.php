<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id_buku'])) {
  header("Location: ../index.php");
  exit;
}
require 'function.php';

// mengambil id dari url 
$id = $_GET['id_buku'];

//melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id_buku = $id");

?>
<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    body {
      background-color: silver;
    }
  </style>
</head>

<body>

  <div class="container">
    <h3 class="center">Detail Produk</h3>
    <br>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <img src="img/<?= $buku["gambar"]; ?>" class="card-img-top" alt="...">
            <a href="index.php" class="btn btn-success">Kembali</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;"><?= $buku["judul"]; ?></h5>
            <p class="card-text"><?= $buku["sinopsis"]; ?></p>
            <a href="ubah.php?id_buku=<?= $buku['id_buku'] ?>" class="btn btn-success">EDIT</a></a>
            <a href="hapus.php?id_buku=<?= $buku['id_buku'] ?>" onclick="return confirm('Hapus Data???')" class="btn btn-danger">HAPUS</a>
          </div>
        </div>
      </div>


    </div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>