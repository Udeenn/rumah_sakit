<a href="tambah-dokter.php" class="btn btn-success mb-3">+ Tambah Dokter</a>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>No STR</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../koneksi.php';

      $sql = "SELECT * FROM dokter";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id_dokter']}</td>
                  <td>{$row['nama_dokter']}</td>
                  <td>{$row['spesialisasi']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['no_telepon']}</td>
                  <td>
                    <a href='edit-dokter.php?id={$row['id_dokter']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='../proses/hapus-dokter.php?id={$row['id_dokter']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='6' class='text-center'>Data dokter belum tersedia.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>
