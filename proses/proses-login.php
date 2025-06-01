<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username = '$username'";
$result = mysqli_query($conn, $query);
if ($user = mysqli_fetch_assoc($result)) {
    if ($password === $user['password']) {
        $_SESSION['id_admin'] = $user['id_admin'];
        $_SESSION['nama_admin'] = $user['nama_admin'];

        header("Location: ../pages/dashboard-admin.html");
    } else {
        echo "Password salah. <a href='login.php'>Coba lagi</a>";
    }
} else {
    echo "User tidak ditemukan. <a href='login.php'>Coba lagi</a>";
}
?>
