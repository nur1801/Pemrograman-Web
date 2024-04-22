<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: index.html");
    exit();
}

// Ambil data dari form
$plat_number = isset($_POST['plat_number']) ? $_POST['plat_number'] : '';
$vehicle_name = isset($_POST['vehicle_name']) ? $_POST['vehicle_name'] : '';
$vehicle_brand = isset($_POST['vehicle_brand']) ? $_POST['vehicle_brand'] : '';
$vehicle_type = isset($_POST['vehicle_type']) ? $_POST['vehicle_type'] : '';

// Validasi data yang diperlukan
if (empty($plat_number) || empty($vehicle_name) || empty($vehicle_brand) || empty($vehicle_type)) {
    // Handle jika data tidak lengkap
    // Contoh: redirect ke halaman sebelumnya dengan pesan error
    header("Location: dashboard.php?error=Data%20tidak%20lengkap");
    exit();
}

// Tentukan harga berdasarkan jenis kendaraan
$harga = 0;
switch ($vehicle_type) {
    case 'Mobil':
        $harga = 5000;
        break;
    case 'Motor':
        $harga = 2000;
        break;
    case 'Truk':
        $harga = 8000;
        break;
    default:
        $harga = 0;
        break;
}

// Simpan data dalam session untuk ditampilkan di halaman nota
$_SESSION['plat_number'] = $plat_number;
$_SESSION['vehicle_name'] = $vehicle_name;
$_SESSION['vehicle_brand'] = $vehicle_brand;
$_SESSION['vehicle_type'] = $vehicle_type;
$_SESSION['harga'] = $harga;

// Redirect ke halaman nota
header("Location: nota.php");
exit();
?>
