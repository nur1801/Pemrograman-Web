<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: index.html");
    exit();
}

// Ambil data pengguna dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Dashboard</title>
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
        <h2>Welcome to Dashboard, <?php echo $username; ?></h2>

        <!-- Form input untuk data kendaraan -->
        <form action="process_form.php" method="POST" class="form-container">
            <div class="input-group">
                <label for="plat_number">Nomor Plat:</label>
                <input type="text" id="plat_number" name="plat_number" required>
            </div>

            <div class="input-group">
                <label for="vehicle_name">Nama Kendaraan:</label>
                <input type="text" id="vehicle_name" name="vehicle_name" required>
            </div>

            <div class="input-group">
                <label for="vehicle_brand">Merk Kendaraan:</label>
                <input type="text" id="vehicle_brand" name="vehicle_brand" required>
            </div>

            <div class="input-group">
                <label for="vehicle_type">Jenis Kendaraan:</label>
                <select id="vehicle_type" name="vehicle_type" required>
                    <option value="Motor">Motor</option>
                    <option value="Mobil">Mobil</option>
                    <option value="Truk">Truk</option>
                </select>
            </div>

            <button type="submit" value="Simpan" onclick="this.form.action='process_form.php';">Simpan</button>
        </form>

        <a href="logout.php">Logout</a> <!-- Tautan untuk proses logout -->
    </div>

    <script>
        // jQuery untuk menampilkan animasi fade in pada container saat halaman dimuat
        $(document).ready(function() {
            $(".container").fadeIn(1000); // Animasi fade in dengan durasi 1 detik (1000 milidetik)
        });
    </script>
</body>
</html>
