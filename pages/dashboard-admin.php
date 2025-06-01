<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Rumah Sakit</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: Arial, sans-serif;
        display: flex;
        min-height: 100vh;
      }

      /* Sidebar */
      .sidebar {
        width: 220px;
        background-color: #2c3e50;
        padding-top: 20px;
        flex-shrink: 0;
        height: 100vh;
        position: fixed;
      }

      .sidebar h2 {
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
      }

      .sidebar a {
        display: block;
        padding: 15px 20px;
        color: #ecf0f1;
        text-decoration: none;
      }

      .sidebar a:hover {
        background-color: #34495e;
      }

      /* Main content */
      .main {
        margin-left: 220px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        height: 100vh;
      }

      /* Header */
      .header {
        background-color: #3498db;
        color: white;
        padding: 15px 20px;
      }

      /* Iframe content */
      .content {
        padding: 20px;
        flex-grow: 1;
        overflow: auto;
      }

      iframe {
        width: 100%;
        height: 100%;
        border: none;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <h2>Admin RS</h2>
      <a href="pasien.php" target="konten">Data Pasien</a>
      <a href="dokter.php" target="konten">Data Dokter</a>
      <a href="pelayanan.php" target="konten">Data Pelayanan</a>
      <a href="../autentikasi/logout.php">Logout</a>
    </div>

    <div class="main">
      <div class="header">
        <h1>Selamat Datang, <?php echo $_SESSION['nama_admin'] ?></h1>
      </div>
      <div class="content">
        <iframe name="konten" src="pasien.html"></iframe>
      </div>
    </div>
  </body>
</html>
