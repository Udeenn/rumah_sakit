<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nik = $_POST['nik'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $no_hp = $_POST['no_telepon'];
  $alamat = $_POST['alamat'];

  $update = mysqli_query($conn, "UPDATE pasien SET 
    nama_pasien = '$nama',
    nik = '$nik',
    jenis_kelamin = '$jenis_kelamin',
    no_telepon = '$no_telepon',
    alamat = '$alamat'
    WHERE id_pasien = $id
  ");

  if ($update) {
    echo "<script>alert('Data berhasil diubah!'); window.location='pasien.php';</script>";
  } else {
    echo "<script>alert('Gagal mengubah data!'); window.location='edit-pasien.php?id_pasien=$id';</script>";
  }
} else {
  echo "<script>window.location='pasien.php';</script>";
}
?>
