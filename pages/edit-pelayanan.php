<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM pelayanan WHERE id_pelayanan = '$id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  $data = mysqli_fetch_assoc($result);
} else {
  echo "Data tidak ditemukan.";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Pelayanan</title>
</head>
<body>
  <h2>Edit Data Pelayanan</h2>
  <form action="../proses/proses-edit-pelayanan.php" method="POST">
    <input type="hidden" name="id_pelayanan" value="<?= $data['id_pelayanan'] ?>">
    <label>ID Pasien:</label><br>
    <input type="text" name="id_pasien" value="<?= $data['id_pasien'] ?>" required><br><br>

    <label>ID Dokter:</label><br>
    <input type="text" name="id_dokter" value="<?= $data['id_dokter'] ?>" required><br><br>

    <label>ID Admin:</label><br>
    <input type="text" name="id_admin" value="<?= $data['id_admin'] ?>" required><br><br>

    <label>ID Ruangan:</label><br>
    <input type="text" name="id_ruangan" value="<?= $data['id_ruangan'] ?>" required><br><br>

    <label>Tanggal Pelayanan:</label><br>
    <input type="date" name="tanggal_pelayanan" value="<?= $data['tanggal_pelayanan'] ?>" required><br><br>

    <label>Diagnosis:</label><br>
    <input type="text" name="diagnosis" value="<?= $data['diagnosis'] ?>" required><br><br>

    <label>Status Pelayanan:</label><br>
    <input type="text" name="status_pelayanan" value="<?= $data['status_pelayanan'] ?>" required><br><br>

    <label>Biaya Pelayanan:</label><br>
    <input type="number" name="biaya_pelayanan" value="<?= $data['biaya_pelayanan'] ?>" required><br><br>

    <input type="submit" value="Simpan Perubahan">
  </form>
</body>
</html>
