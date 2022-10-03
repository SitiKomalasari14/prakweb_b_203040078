<?php
require 'function.php';
$buku = query("SELECT * FROM buku");

// ketika tombil cari di klik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

?>

<!Doctype html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500&display=swap" rel="stylesheet">
</head>

<body>
  <div>
    <!-- NAVBAR -->
    <nav class="navbar sticky-top" style="background-color: #D8D8D8;">
      <div class="container-fluid">
        <span class="navbar-brand mb-3 h1" style="font-family: 'Fraunces', serif;">Daftar Novel</span>
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" type="text" name="keyword" autocomplete="off" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
        </form>
        <button class="btn btn-outline-light">
          <a href="tambah.php" style="text-decoration:none;color:black;">Tambah Data</a>
        </button>
      </div>
    </nav>
    <!--AKHIR NAVBAR  -->

    <!-- CARD -->
    <div class="container">
      <?php if (empty($buku)) : ?>
        <h3 style="font-family: 'Dosis', sans-serif;">NOVEL TIDAK DITEMUKAN</h3>
      <?php endif; ?>
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

</html>