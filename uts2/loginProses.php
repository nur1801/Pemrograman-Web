<?php 
session_start();

$valid_username = "Nurhidayah";
$valid_password = "123";

// Ambil data dari formulir login
$username = $_POST['username'];
$password = ($_POST['password']);

// Periksa apakah username dan password sesuai dengan yang benar
if ($username == $valid_username && $password == $valid_password) {
    // Jika login berhasil, buat session
    $_SESSION['username'] = $username; // Menyimpan username dalam session

    // Set cookie jika Anda ingin menyimpan informasi login dalam cookies
    // Cookie akan berakhir dalam waktu 1 jam
    $cookie_name = "user_login";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // Cookie berlaku untuk seluruh domain

    // Redirect ke halaman dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Jika login gagal, simpan flag error dalam session
    $_SESSION['login_error'] = true; 
    // Redirect kembali ke halaman login
    header("Location: index.html");
    exit();
}
?>
