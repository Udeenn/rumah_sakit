<?php
include '../koneksi.php';

// Ambil data pasien
$data_pasien = mysqli_query($conn, "SELECT id_pasien, nama_pasien FROM pasien");

// Ambil data dokter
$data_dokter = mysqli_query($conn, "SELECT id_dokter, nama_dokter FROM dokter");

// Ambil data ruangan
$data_ruangan = mysqli_query($conn, "SELECT id_ruangan, nama_ruangan FROM ruangan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Pelayanan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }

    main {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      margin-top: 20px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #555;
      font-size: 14px;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<main>
  <h2>Tambah Data Pelayanan</h2>

  <form action="../proses/proses-tambah-pelayanan.php" method="POST">
    <label>Pasien:</label>
    <select name="id_pasien" required>
      <option value="">-- Pilih Pasien --</option>
      <?php while ($pasien = mysqli_fetch_assoc($data_pasien)) : ?>
        <option value="<?= $pasien['id_pasien']; ?>">
          <?= $pasien['id_pasien'] . " - " . $pasien['nama_pasien']; ?>
        </option>
      <?php endwhile; ?>
    </select>

    <label>Dokter:</label>
    <select name="id_dokter" required>
      <option value="">-- Pilih Dokter --</option>
      <?php while ($dokter = mysqli_fetch_assoc($data_dokter)) : ?>
        <option value="<?= $dokter['id_dokter']; ?>">
          <?= $dokter['id_dokter'] . " - " . $dokter['nama_dokter']; ?>
        </option>
      <?php endwhile; ?>
    </select>

    <label>Ruangan:</label>
    <select name="id_ruangan" required>
      <option value="">-- Pilih Ruangan --</option>
      <?php while ($ruangan = mysqli_fetch_assoc($data_ruangan)) : ?>
        <option value="<?= $ruangan['id_ruangan']; ?>">
          <?= $ruangan['id_ruangan'] . " - " . $ruangan['nama_ruangan']; ?>
        </option>
      <?php endwhile; ?>
    </select>

    <label>Tanggal Pelayanan:</label>
    <input type="date" name="tanggal_pelayanan" required>

    <label>Diagnosis:</label>
    <input type="text" name="diagnosis" required>

    <label>Status Pelayanan:</label>
    <input type="text" name="status_pelayanan" required>

    <label>Biaya Pelayanan:</label>
    <input type="number" name="biaya_pelayanan" required>

    <input type="submit" value="Tambah Data">
  </form>

  <a href="data_pelayanan.php" class="back-link">← Kembali ke Data Pelayanan</a>
</main>

</body>
</html>
