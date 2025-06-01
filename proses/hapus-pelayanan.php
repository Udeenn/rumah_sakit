<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM pelayanan WHERE id_pelayanan = '$id'";

if (mysqli_query($conn, $query)) {
  echo "<script>alert('Data berhasil dihapus'); window.location='data_pelayanan.php';</script>";
} else {
  echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
