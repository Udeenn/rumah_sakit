<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Pasien</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }

    form {
      background: #fff;
      padding: 20px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 15px;
      padding: 10px 15px;
      background-color: #28a745;
      border: none;
      color: white;
      border-radius: 5px;
    }

    a {
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
      color: #555;
    }
  </style>
</head>
<body>

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
  <a href="pasien.php">← Kembali</a>
</form>

</body>
</html>