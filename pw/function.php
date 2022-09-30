<?php
// function melakukan connect ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2022_b_203040078");
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "prakweb_2022_b_203040078");

  return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sqL);
  $buku = [];
  while ($bk = mysqli_fetch_assoc($result)) {
    $buku[] = $bk;
  };
  return $buku;
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

  $id = $data['id_buku'];
  $judul = htmlspecialchars($data['judul']);
  $gambar = htmlspecialchars($data['gambar']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $sinopsis = htmlspecialchars($data['sinopsis']);

  $query = "UPDATE buku
            SET
            judul = '$judul', 
            gambar = '$gambar', 
            pengarang = '$pengarang', 
            sinopsis = '$sinopsis',
            WHERE id_buku = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
