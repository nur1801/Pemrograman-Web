<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: index.html");
    exit();
}

// Periksa apakah data yang diperlukan tersedia dalam session
if (!isset($_SESSION['plat_number'], $_SESSION['vehicle_name'], $_SESSION['vehicle_brand'], $_SESSION['vehicle_type'], $_SESSION['harga'])) {
    // Handle jika data tidak tersedia
    header("Location: dashboard.php?error=Data%20tidak%20tersedia");
    exit();
}

// Ambil data dari session
$plat_number = $_SESSION['plat_number'];
$vehicle_name = $_SESSION['vehicle_name'];
$vehicle_brand = $_SESSION['vehicle_brand'];
$vehicle_type = $_SESSION['vehicle_type'];
$harga = $_SESSION['harga'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Nota Pembelian</title>
    <link rel="stylesheet" href="style.css"> <!-- Jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Sertakan jQuery -->
    <style>
        /* Animasi fade in untuk container */
        .container {
            display: none; /* Sembunyikan container secara default */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo1.png">
        </div>
        <h2>Nota Parkir</h2>
        <div class="block">
        <table class="table">
            <tr>
                <td>Nomor Polisi</td>
                <td>:</td>
                <td><?php echo $plat_number; ?></td>
            </tr>
            <tr>
                <td>Nama Kendaraan</td>
                <td>:</td>
                <td><?php echo $vehicle_name; ?></td>
            </tr>
            <tr>
                <td>Merk Kendaraan</td>
                <td>:</td>
                <td><?php echo $vehicle_brand ?></td>
            </tr>
            <tr>
                <td>Jenis Kendaraan</td>
                <td>:</td>
                <td><?php echo $vehicle_type ?></td>
            </tr>
            <tr>
                <td>Harga Parkir</td>
                <td>:</td>
                <td>Rp<?php echo number_format($harga, 0, ',', '.'); ?></td>
            </tr>
        </table>
        </div>

        <a href="dashboard.php">Kembali</a>
    </div>

    <script>
        // jQuery untuk menampilkan animasi fade in pada container saat halaman dimuat
        $(document).ready(function() {
            $(".container").fadeIn(1000); // Animasi fade in dengan durasi 1 detik (1000 milidetik)
        });
    </script>
</body>
</html>
