<?php
include '../koneksi.php';

$nama_dokter  = $_POST['nama_dokter'];
$spesialisasi = $_POST['spesialisasi'];
$email        = $_POST['email'];
$no_telepon   = $_POST['no_telepon'];

$query = "INSERT INTO dokter (nama_dokter, spesialisasi, email, no_telepon)
          VALUES ('$nama_dokter', '$spesialisasi', '$email', '$no_telepon')";

if (mysqli_query($conn, $query)) {
  header("Location: dokter.php");
  exit;
} else {
  echo "Gagal menambahkan data: " . mysqli_error($conn);
}
?>
