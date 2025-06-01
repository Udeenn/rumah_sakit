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

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #2196F3;
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
      text-decoration: none;
    }

    .edit-btn {
      background-color: #ffc107;
    }

    .delete-btn {
      background-color: #f44336;
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
      include '../koneksi.php'; // file koneksi di-include di sini

      $sql = "SELECT * FROM dokter";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id_dokter']}</td>
                  <td>{$row['nama_dokter']}</td>
                  <td>{$row['spesialisasi']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['no_telepon']}</td>
                  <td>
                    <a href='edit-dokter.php?id={$row['id_dokter']}' class='action-btn edit-btn'>Edit</a>
                    <a href='../proses/hapus-dokter.php?id={$row['id_dokter']}' class='action-btn delete-btn' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='6'>Data dokter belum tersedia.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
