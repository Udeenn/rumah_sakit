<?php
include '../koneksi.php';

$id_pelayanan = $_POST['id_pelayanan'];
$id_pasien = $_POST['id_pasien'];
$id_dokter = $_POST['id_dokter'];
$id_admin = $_POST['id_admin'];
$id_ruangan = $_POST['id_ruangan'];
$tanggal_pelayanan = $_POST['tanggal_pelayanan'];
$diagnosis = $_POST['diagnosis'];
$status_pelayanan = $_POST['status_pelayanan'];
$biaya_pelayanan = $_POST['biaya_pelayanan'];

$query = "UPDATE pelayanan SET 
            id_pasien='$id_pasien',
            id_dokter='$id_dokter',
            id_admin='$id_admin',
            id_ruangan='$id_ruangan',
            tanggal_pelayanan='$tanggal_pelayanan',
            diagnosis='$diagnosis',
            status_pelayanan='$status_pelayanan',
            biaya_pelayanan='$biaya_pelayanan'
          WHERE id_pelayanan='$id_pelayanan'";

if (mysqli_query($conn, $query)) {
  echo "<script>alert('Data berhasil diperbarui'); window.location='data_pelayanan.php';</script>";
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
