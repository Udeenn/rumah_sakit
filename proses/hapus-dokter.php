<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM dokter WHERE id_dokter = $id";

if (mysqli_query($conn, $query)) {
  header("Location: ../pages/dokter.php");
  exit;
} else {
  echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
