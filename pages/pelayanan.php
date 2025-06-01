<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Data Pelayanan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f5f5f5;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background-color: #fff;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-btn {
      padding: 6px 12px;
      margin: 0 2px;
      text-decoration: none;
      color: white;
      border-radius: 4px;
      font-size: 14px;
    }

    .edit-btn {
      background-color: #2196F3;
    }

    .delete-btn {
      background-color: #f44336;
    }

    .add-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h2>Data Pelayanan</h2>
  <a href="tambah-pelayanan.php" class="add-btn">+ Tambah Data</a>
  <table>
    <thead>
      <tr>
        <th>ID Pelayanan</th>
        <th>ID Pasien</th>
        <th>ID Dokter</th>
        <th>ID Admin</th>
        <th>ID Ruangan</th>
        <th>Tanggal</th>
        <th>Diagnosis</th>
        <th>Pembayaran</th>
        <th>Status Pelayanan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../koneksi.php';

      $query = "SELECT * FROM pelayanan";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id_pelayanan']}</td>
                  <td>{$row['id_pasien']}</td>
                  <td>{$row['id_dokter']}</td>
                  <td>{$row['id_admin']}</td>
                  <td>{$row['id_ruangan']}</td>
                  <td>{$row['tanggal_pelayanan']}</td>
                  <td>{$row['diagnosis']}</td>
                  <td>{$row['status_pelayanan']}</td>
                  <td>Rp " . number_format($row['biaya_pelayanan'], 0, ',', '.') . "</td>
                  <td>
                    <a href='edit-pelayanan.php?id={$row['id_pelayanan']}' class='action-btn edit-btn'>Edit</a>
                    <a href='../proses/hapus-pelayanan.php?id={$row['id_pelayanan']}' class='action-btn delete-btn' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='7' style='text-align:center;'>Tidak ada data pelayanan.</td></tr>";
      }

      ?>
    </tbody>
  </table>
</body>
</html>