<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM dokter WHERE id_dokter = $id");
$data = mysqli_fetch_assoc($query);

if (!$data) {
  echo "Data tidak ditemukan.";
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Dokter</title>
</head>
<body>
  <h2>Edit Data Dokter</h2>
  <form action="../proses/proses-edit-dokter.php" method="post">
    <input type="hidden" name="id_dokter" value="<?= $data['id_dokter'] ?>">

    <label>Nama Dokter:</label><br>
    <input type="text" name="nama_dokter" value="<?= $data['nama_dokter'] ?>" required><br><br>

    <label>Spesialisasi:</label><br>
    <input type="text" name="spesialisasi" value="<?= $data['spesialisasi'] ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $data['email'] ?>" required><br><br>

    <label>No Telepon:</label><br>
    <input type="text" name="no_telepon" value="<?= $data['no_telepon'] ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
  </form>
</body>
</html>
