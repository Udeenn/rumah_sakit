<?php
include '../koneksi.php';

$id_pasien = $_POST['id_pasien'];
$id_dokter = $_POST['id_dokter'];
$id_admin = $_POST['id_admin'];
$id_ruangan = $_POST['id_ruangan'];
$tanggal_pelayanan = $_POST['tanggal_pelayanan'];
$diagnosis = $_POST['diagnosis'];
$status_pelayanan = $_POST['status_pelayanan'];
$biaya_pelayanan = $_POST['biaya_pelayanan'];

$query = "INSERT INTO pelayanan (
  id_pasien, id_dokter, id_admin, id_ruangan, tanggal_pelayanan, diagnosis, status_pelayanan, biaya_pelayanan
) VALUES (
  '$id_pasien', '$id_dokter', '$id_admin', '$id_ruangan', '$tanggal_pelayanan', '$diagnosis', '$status_pelayanan', '$biaya_pelayanan'
)";

if (mysqli_query($conn, $query)) {
  echo "<script>alert('Data berhasil ditambahkan'); window.location='data_pelayanan.php';</script>";
} else {
  echo "Error saat menambahkan data: " . mysqli_error($conn);
}
?>
