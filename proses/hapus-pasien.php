<?php
include '../koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id");

if ($hapus) {
  echo "<script>alert('Data berhasil dihapus.'); window.location='pasien.php';</script>";
} else {
  echo "<script>alert('Gagal menghapus data.'); window.location='pasien.php';</script>";
}
?>
