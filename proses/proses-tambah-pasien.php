<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
  $nama_pasien = $_POST['nama_pasien'];
  $nik = $_POST['nik'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $no_telepon = $_POST['no_telepon'];
  $email = $_POST['email'];
  $golongan_darah = $_POST['golongan_darah'];
  $alamat = $_POST['alamat'];

  $query = "INSERT INTO pasien (
      nama_pasien, nik, tanggal_lahir, jenis_kelamin, alamat,
      no_telepon, email, golongan_darah
    ) VALUES (
      '$nama_pasien', '$nik', '$tanggal_lahir', '$jenis_kelamin', '$alamat',
      '$no_telepon', '$email', '$golongan_darah'
    )";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='pasien.php';</script>";
  } else {
    echo "<script>alert('Gagal menambahkan data!'); window.location='tambah_pasien.php';</script>";
  }
} else {
  header("Location: pasien.php");
}
?>
