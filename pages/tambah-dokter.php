<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Dokter</title>
</head>
<body>
  <h2>Tambah Data Dokter</h2>
  <form action="../proses/proses-tambah-dokter.php" method="post">
    <label>Nama Dokter:</label><br>
    <input type="text" name="nama_dokter" required><br><br>

    <label>Spesialisasi:</label><br>
    <input type="text" name="spesialisasi" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>No Telepon:</label><br>
    <input type="text" name="no_telepon" required><br><br>

    <button type="submit">Simpan</button>
  </form>
</body>
</html>
