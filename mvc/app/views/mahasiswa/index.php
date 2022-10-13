<div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul>
          <li><?= $mhs['nama']; ?>
          <li><?= $mhs['nrp']; ?>
          <li><?= $mhs['email']; ?>
          <li><?= $mhs['jurusan']; ?>
          </li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>