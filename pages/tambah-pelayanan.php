<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Pelayanan</title>
</head>
<body>
  <h2>Tambah Data Pelayanan</h2>
  <form action="../proses/proses-tambah-pelayanan.php" method="POST">
    <label>ID Pasien:</label><br>
    <input type="text" name="id_pasien" required><br><br>

    <label>ID Dokter:</label><br>
    <input type="text" name="id_dokter" required><br><br>

    <label>ID Admin:</label><br>
    <input type="text" name="id_admin" required><br><br>

    <label>ID Ruangan:</label><br>
    <input type="text" name="id_ruangan" required><br><br>

    <label>Tanggal Pelayanan:</label><br>
    <input type="date" name="tanggal_pelayanan" required><br><br>

    <label>Diagnosis:</label><br>
    <input type="text" name="diagnosis" required><br><br>

    <label>Status Pelayanan:</label><br>
    <input type="text" name="status_pelayanan" required><br><br>

    <label>Biaya Pelayanan:</label><br>
    <input type="number" name="biaya_pelayanan" required><br><br>

    <input type="submit" value="Tambah Data">
  </form>
  <br>
  <a href="data_pelayanan.php">← Kembali ke Data Pelayanan</a>
</body>
</html>
