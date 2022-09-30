<?php
require 'function.php';
$buku = query("SELECT * FROM buku");
?>

<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<div class="body">
  <div>
    <!-- NAVBAR -->
    <nav class="navbar sticky-top" style="background-color: #D8D8D8;">
      <div class="container-fluid">
        <span class="navbar-brand mb-3 h1">Daftar Novel</span>
        <button class="btn btn-outline-success">
          <a href="tambah.php" style="text-decoration:none;color:black;">Tambah Data</a>
        </button>
      </div>
    </nav>

    <!--AKHIR NAVBAR  -->
    <h1>Daftar Buku</h1>

    <!-- CARD -->
    <div class="container">
      <div class="row">
        <?php foreach ($buku as $bk) : ?>

          <div class="col-3 p-2">
            <div class="card" style="width: 18rem;">
              <img src="img/<?= $bk["gambar"]; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> <?= $bk["judul"]; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted"> <?= $bk["pengarang"]; ?></h6>
                <p>
                  <a href="detail.php?id_buku=<?= $bk['id_buku'] ?>" class="btn btn-secondary" <?= $bk["judul"] ?>>Detail Produk</a>
                </p>
              </div>


            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- AKHIR CARD -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</div>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</table>

</html>