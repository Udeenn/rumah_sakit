<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pasien</title>
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

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #28a745;
      border: none;
      color: white;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #218838;
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
  <h2>Tambah Data Pasien</h2>

  <form action="../proses/proses-tambah-pasien.php" method="POST">
    <label>Nama Pasien</label>
    <input type="text" name="nama_pasien" required>

    <label>NIK</label>
    <input type="text" name="nik" maxlength="16" required>

    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" required>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
      <option value="">-- Pilih Jenis Kelamin --</option>
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>

    <label>No Telepon</label>
    <input type="text" name="no_telepon">

    <label>Email</label>
    <input type="email" name="email">

    <label>Golongan Darah</label>
    <select name="golongan_darah">
      <option value="">-- Pilih --</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select>

    <label>Alamat</label>
    <textarea name="alamat" required></textarea>

    <button type="submit" name="submit">Simpan</button>
  </form>
</main>

</body>
</html>
