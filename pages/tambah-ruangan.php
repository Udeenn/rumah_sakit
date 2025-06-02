<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Ruangan</title>
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

    button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0069d9;
    }

    .back-link {
      display: inline-block;
      margin-top: 15px;
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
  <h2>Tambah Ruangan Baru</h2>

  <form action="../proses/proses-tambah-ruangan.php" method="POST">
    <label>Nama Ruangan</label>
    <input type="text" name="nama_ruangan" required>

    <label>Jenis Ruangan</label>
    <select name="jenis_ruangan" required>
      <option value="">-- Pilih Jenis --</option>
      <option value="rawat Inap">Rawat Inap</option>
      <option value="rawat Jalan">Rawat Jalan</option>
      <option value="icu">ICU</option>
      <option value="operasi">Operasi</option>
      <option value="ugd">ugd</option>
      <option value="laboratorium">laboratorium</option>
      <option value="radiologi">radiologi</option>
      <option value="konsultasi">konsultasi</option>
      <option value="administrasi">administrasi</option>
    </select>

    <label>Status Ruangan</label>
    <select name="status_ruangan" required>
      <option value="">-- Pilih Status --</option>
      <option value="Tersedia">Tersedia</option>
      <option value="Terpakai">Terpakai</option>
    </select>

    <button type="submit">Simpan</button>
  </form>
</main>

</body>
</html>