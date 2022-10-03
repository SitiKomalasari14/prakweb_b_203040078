<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_2022_b_203040078');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
//fungsi untuk MENAMBAHKAN data didalam database
function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $gambar = htmlspecialchars($data['gambar']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $sinopsis = htmlspecialchars($data['sinopsis']);

  $query = "INSERT INTO buku
                    VALUES
                        ('', '$judul', '$gambar', '$pengarang','$sinopsis')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//fungsi HAPUS
function hapus($id)
{
  $conn = koneksi();

  $bk = query("SELECT * FROM buku WHERE id_buku = $id");
  if ($bk['gambar'] != 'nophoto.jpg') {
    unlink('img/' . $bk['gambar']);
  }

  mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//fungsi UBAH data
function ubah($data)
{
  $conn = koneksi();

  $id_buku = $data['id_buku'];
  $judul = htmlspecialchars($data['judul']);
  $gambar = htmlspecialchars($data['gambar']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $sinopsis = htmlspecialchars($data['sinopsis']);


  $query = " UPDATE buku SET
            judul = '$judul', 
            gambar = '$gambar',
            pengarang = '$pengarang', 
            sinopsis = '$sinopsis' 
          WHERE id_buku = $id_buku";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
