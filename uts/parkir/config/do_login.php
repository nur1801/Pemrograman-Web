<?php
session_start();

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['password'])){

        $_SESSION['login'] = true;
        $_SESSION['user'] = $row;

        // Tambahkan cookie untuk menyimpan username
        setcookie('username', $username, time() + (86400 * 30), '/'); // Cookie berlaku selama 30 hari

        echo "<script>
            alert('Login Berhasil');
            window.location.href='../admin/index.php'; 
        </script>";

    } else {
        echo "<script>
            alert('Login Gagal! Password Salah');
            window.location.href='../login.php'; 
        </script>";
    }
} else {
    echo "<script>
        alert('Login Gagal! Username Tidak Terdaftar');
        window.location.href='../login.php';
    </script>";
}

?>
