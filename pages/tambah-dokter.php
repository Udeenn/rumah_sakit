<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Dokter</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #28a745;
      outline: none;
    }

    button[type="submit"] {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Tambah Data Dokter</h2>
    <form action="../proses/proses-tambah-dokter.php" method="post">
      <label for="nama_dokter">Nama Dokter:</label>
      <input type="text" id="nama_dokter" name="nama_dokter" required>

      <label for="spesialisasi">Spesialisasi:</label>
      <input type="text" id="spesialisasi" name="spesialisasi" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="no_telepon">No Telepon:</label>
      <input type="text" id="no_telepon" name="no_telepon" required>

      <button type="submit">Simpan</button>
    </form>
  </div>
</body>
</html>
