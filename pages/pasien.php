<a href="tambah-pasien.php" class="btn btn-success mb-3">+ Tambah Pasien</a>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Golongan Darah</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../koneksi.php';

      $sql = "SELECT * FROM pasien";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id_pasien']}</td>
                  <td>{$row['nama_pasien']}</td>
                  <td>{$row['nik']}</td>
                  <td>{$row['tanggal_lahir']}</td>
                  <td>{$row['jenis_kelamin']}</td>
                  <td>{$row['alamat']}</td>
                  <td>{$row['no_telepon']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['golongan_darah']}</td>
                  <td>
                    <a href='edit-pasien.php?id={$row['id_pasien']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='../proses/hapus-pasien.php?id={$row['id_pasien']}' onclick=\"return confirm('Yakin ingin menghapus?')\" class='btn btn-danger btn-sm'>Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='10' class='text-center'>Tidak ada data pasien.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>
