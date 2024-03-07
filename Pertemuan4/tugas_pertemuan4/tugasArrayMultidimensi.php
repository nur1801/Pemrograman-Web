<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-avatar {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>
    <h2>Nurhidayah/22/SIB-2D</h2>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Suki", "NIM" => "881100", "Jurusan" => "Teknik Informatika", "Email" => "suki@gmail.com", "Avatar" => "avatar1.jpg"),
        array("Nama" => "Sokka", "NIM" => "235680", "Jurusan" => "Teknik Informatika", "Email" => "sokka@gmail.com", "Avatar" => "avatar2.jpg"),
        array("Nama" => "Katara", "NIM" => "198854", "Jurusan" => "Teknik Kimia", "Email" => "katara@gmail.com", "Avatar" => "avatar3.jpg"),
        array("Nama" => "Gordon", "NIM" => "123456", "Jurusan" => "Teknik Listrik", "Email" => "gordon@gmail.com", "Avatar" => "avatar4.jpg"),
        array("Nama" => "Zuko", "NIM" => "010101", "Jurusan" => "Teknik Sipil", "Email" => "zuko@gmail.com", "Avatar" => "avatar5.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
    foreach ($mahasiswa as $data) {
        echo '<div class="student-container">';
        echo '<img src="' . $data["Avatar"] . '" alt="Avatar" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>