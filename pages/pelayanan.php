<h5 class="mb-3">Data Pelayanan</h5>

<a href="tambah-pelayanan.php" class="btn btn-success mb-3">+ Tambah Data</a>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th>ID Pelayanan</th>
        <th>ID Pasien</th>
        <th>ID Dokter</th>
        <th>ID Admin</th>
        <th>ID Ruangan</th>
        <th>Tanggal</th>
        <th>Diagnosis</th>
        <th>Status Pelayanan</th>
        <th>Pembayaran</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../koneksi.php';

      $query = "SELECT * FROM pelayanan";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id_pelayanan']}</td>
                  <td>{$row['id_pasien']}</td>
                  <td>{$row['id_dokter']}</td>
                  <td>{$row['id_admin']}</td>
                  <td>{$row['id_ruangan']}</td>
                  <td>{$row['tanggal_pelayanan']}</td>
                  <td>{$row['diagnosis']}</td>
                  <td>{$row['status_pelayanan']}</td>
                  <td>Rp " . number_format($row['biaya_pelayanan'], 0, ',', '.') . "</td>
                  <td>
                    <a href='edit-pelayanan.php?id={$row['id_pelayanan']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='../proses/hapus-pelayanan.php?id={$row['id_pelayanan']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='10' class='text-center'>Tidak ada data pelayanan.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>
