<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM dokter WHERE id_dokter = $id";

if (mysqli_query($conn, $query)) {
  header("Location: http://localhost/rumah_sakit/pages/dashboard-admin.php?page=dokter");
  exit;
} else {
  echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
