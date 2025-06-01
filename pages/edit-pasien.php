<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien = $id");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Pasien</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }

    form {
      background: #fff;
      padding: 20px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 15px;
      padding: 10px 15px;
      background-color: #007BFF;
      border: none;
      color: white;
      border-radius: 5px;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #555;
    }
  </style>
</head>
<body>

<h2>Edit Data Pasien</h2>
<form method="POST" action="../proses/proses-edit-pasien.php">
  <input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">

  <label>Nama</label>
  <input type="text" name="nama" value="<?= $data['nama_pasien'] ?>" required>

  <label>NIK</label>
  <input type="text" name="nik" value="<?= $data['nik'] ?>" required>

  <label>Jenis Kelamin</label>
  <select name="jenis_kelamin" required>
    <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
    <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
  </select>

  <label>No Telepon</label>
  <input type="text" name="no_telepon" value="<?= $data['no_telepon'] ?>" required>

  <label>Alamat</label>
  <textarea name="alamat" required><?= $data['alamat'] ?></textarea>

  <button type="submit" name="submit">Simpan Perubahan</button>
  <a href="pasien.php">← Kembali</a>
</form>

</body>
</html>
