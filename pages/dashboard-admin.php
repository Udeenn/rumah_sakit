<?php
session_start();
include '../koneksi.php'; // pastikan file koneksi database ada
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Rumah Sakit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 240px;
      height: 100vh;
      background-color:rgb(67, 112, 158);
      color: white;
      padding: 20px;
      position: fixed; /* agar tinggi 100% layar */
      display: flex;
      flex-direction: column;
    }

    .sidebar h2 {
      margin-bottom: 30px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      margin-bottom: 10px;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    .main {
      margin-left: 240px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .header {
      background-color: #3498db;
      color: white;
      padding: 20px;
    }

    .card-stats {
      margin-top: 20px;
      padding: 0 20px;
    }

    .card-stats .card {
      border-left: 5px solid #3498db;
    }

    .content-area {
      padding: 20px;
      overflow: auto;
      flex-grow: 1;
    }

    table thead {
      background-color: #3498db;
      color: white;
    }

    .logout-btn {
      margin-top: auto; /* dorong ke bawah */
      color: #ffc107;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>Admin RS</h2>
  <a href="?page=dashboard">Dashboard</a>
  <a href="?page=pasien">Data Pasien</a>
  <a href="?page=dokter">Data Dokter</a>
  <a href="?page=pelayanan">Data Pelayanan</a>

  <a href="../autentikasi/logout.php" class="logout-btn">Logout</a>
</div>

<div class="main">
  <div class="header">
    <h4>Selamat Datang, <?php echo $_SESSION['nama_admin']; ?></h4>
  </div>

  <div class="content-area">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
    switch ($page) {
      case 'pasien':
        include 'pasien.php';
        break;
      case 'dokter':
        include 'dokter.php';
        break;
      case 'pelayanan':
        include 'pelayanan.php';
        break;
      case 'dashboard':
      default:
        ?>
        <!-- Statistik dan Tabel Ruangan ditampilkan hanya jika page = dashboard atau default -->
        <div class="card-stats row g-3">
          <div class="col-md-3">
            <div class="card shadow-sm p-3">
              <h6 class="text-muted">Jumlah Pasien</h6>
              <h4 class="text-primary">
                <?php
                $pasien = mysqli_query($conn, "SELECT * FROM pasien");
                echo mysqli_num_rows($pasien);
                ?>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm p-3">
              <h6 class="text-muted">Jumlah Dokter</h6>
              <h4 class="text-success">
                <?php
                $dokter = mysqli_query($conn, "SELECT * FROM dokter");
                echo mysqli_num_rows($dokter);
                ?>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm p-3">
              <h6 class="text-muted">Jumlah Pelayanan</h6>
              <h4 class="text-warning">
                <?php
                $pelayanan = mysqli_query($conn, "SELECT * FROM pelayanan");
                echo mysqli_num_rows($pelayanan);
                ?>
              </h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm p-3">
              <h6 class="text-muted">Ruangan Tersedia</h6>
              <h4 class="text-danger">
                <?php
                $ruanganTersedia = mysqli_query($conn, "SELECT * FROM ruangan WHERE status_ruangan='Tersedia'");
                echo mysqli_num_rows($ruanganTersedia);
                ?>
              </h4>
            </div>
          </div>
        </div>

        <hr class="my-4">

        <h5 class="mb-3">Daftar Ruangan</h5>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Jenis Ruangan</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $ruangan = mysqli_query($conn, "SELECT * FROM ruangan");
              $no = 1;
              while ($row = mysqli_fetch_assoc($ruangan)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_ruangan']}</td>
                        <td>{$row['jenis_ruangan']}</td>
                        <td>{$row['status_ruangan']}</td>
                      </tr>";
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <?php
        break;
    }
    ?>
  </div>
</div>

</body>
</html>
