<?php
include '../koneksi.php';

$nama = $_POST['nama_ruangan'];
$jenis = $_POST['jenis_ruangan'];
$status = $_POST['status_ruangan'];

$query = "INSERT INTO ruangan (nama_ruangan, jenis_ruangan, status_ruangan) VALUES ('$nama', '$jenis', '$status')";

if (mysqli_query($conn, $query)) {
    header("Location: http://localhost/rumah_sakit/pages/dashboard-admin.php?page=dashboard");
} else {
    echo "Gagal menambah ruangan: " . mysqli_error($conn);
}
?>
