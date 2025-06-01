<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Data Dokter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f4f6f8;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    .action-btn {
      padding: 6px 12px;
      margin: 2px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: white;
    }
    .edit-btn {
      background-color: #2196F3;
    }
    .delete-btn {
      background-color: #f44336;
    }
    .add-button {
      display: inline-block;
      margin-bottom: 15px;
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      text-decoration: none;
      border-radius: 5px;
    }
    .add-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Data Dokter</h2>

  <a href="tambah_dokter.php" class="add-button">+ Tambah Dokter</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>No STR</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Koneksi ke database
      $conn = new mysqli("localhost", "root", "", "nama_database");

      // Cek koneksi
      if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
      }

      // Ambil data dari tabel dokter
      $sql = "SELECT * FROM dokter";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['spesialis']}</td>
            <td>{$row['no_str']}</td>
            <td>{$row['no_hp']}</td>
            <td>
              <a href='edit_dokter.php?id={$row['id']}' class='action-btn edit-btn'>Edit</a>
              <a href='hapus_dokter.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='action-btn delete-btn'>Hapus</a>
            </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>
</body>
</html>
