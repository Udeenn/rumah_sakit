<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Data Pasien</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .add-btn {
      display: inline-block;
      margin-bottom: 15px;
      padding: 10px 15px;
      background-color: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .action-btn {
      padding: 5px 10px;
      border-radius: 5px;
      color: white;
      text-decoration: none;
      margin: 0 2px;
    }

    .edit-btn {
      background-color: #ffc107;
    }

    .delete-btn {
      background-color: #dc3545;
    }
  </style>
</head>
<body>

  <h2>Data Pasien</h2>

  <a href="tambah_pasien.php" class="add-btn">+ Tambah Pasien</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../koneksi.php'; // gunakan file koneksi eksternal

      $sql = "SELECT * FROM pasien";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['nik']}</td>
                  <td>{$row['jenis_kelamin']}</td>
                  <td>{$row['no_hp']}</td>
                  <td>{$row['alamat']}</td>
                  <td>
                    <a href='edit_pasien.php?id={$row['id']}' class='action-btn edit-btn'>Edit</a>
                    <a href='hapus_pasien.php?id={$row['id']}' onclick=\"return confirm('Yakin ingin menghapus?')\" class='action-btn delete-btn'>Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='7'>Tidak ada data pasien.</td></tr>";
      }
      ?>
    </tbody>
  </table>

</body>
</html>
