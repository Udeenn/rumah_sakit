<?php
include '../koneksi.php';

$id_dokter    = $_POST['id_dokter'];
$nama_dokter  = $_POST['nama_dokter'];
$spesialisasi = $_POST['spesialisasi'];
$email        = $_POST['email'];
$no_telepon   = $_POST['no_telepon'];

$query = "UPDATE dokter SET 
            nama_dokter = '$nama_dokter',
            spesialisasi = '$spesialisasi',
            email = '$email',
            no_telepon = '$no_telepon'
          WHERE id_dokter = $id_dokter";

if (mysqli_query($conn, $query)) {
  header("Location: ../pages/dokter.php");
  exit;
} else {
  echo "Gagal mengupdate data: " . mysqli_error($conn);
}
?>
