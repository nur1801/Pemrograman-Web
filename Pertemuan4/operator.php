<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil dari $a + $b = $hasilTambah <br>";
    echo "Hasil dari $a - $b = $hasilKurang <br>";
    echo "Hasil dari $a * $b = $hasilKali <br>";
    echo "Hasil dari $a / $b = $hasilBagi <br>";
    echo "Hasil dari $a % $b = $sisaBagi <br>";
    echo "Hasil dari $a ** $b = $pangkat <br>";
    echo "<br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil sama $a = $b = $hasilSama <br>";
    echo "Hasil tidak sama $a != $b = $hasilTidakSama <br>";
    echo "Hasil lebih kecil $a < $b = $hasilLebihKecil <br>";
    echo "Hasil lebih besar $a > $b = $hasilLebihBesar <br>";
    echo "Hasil lebih kecil sama $a <= $b = $hasilLebihKecilSama <br>";
    echo "Hasil lebih besar sama $a >= $b = $hasilLebihBesarSama <br>";
    echo "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil and $a && $b = $hasilAnd <br>";
    echo "Hasil or $a || $b = $hasilOr<br>";
    echo "Hasil NotA dari $a = $hasilNotA<br>";
    echo "Hasil NotB dari $b = $hasilNotB<br>";
    echo "<br>";

    $a += $b;
    echo "Hasil += : $a<br>"; 
    $a -= $b;
    echo "Hasil -= : $a<br>";  
    $a *= $b;
    echo "Hasil *= : $a<br>";  
    $a /= $b;
    echo "Hasil /= : $a<br>";  
    $a %= $b;
    echo "Hasil %= : $a<br>";    
    echo "<br>";

    $hasilIndentik = $a === $b;
    $hasilTidakIndentik = $a !== $b;

    echo "Hasil indentik = $hasilIndentik<br>";
    echo "Hasil tidak identik = $hasilTidakIndentik<br>";
    echo "<br>";

    $totalKursi = 45;
    $kursiDitempati = 28;
    $kursiKosong = $totalKursi - $kursiDitempati;
    $persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

    echo "Jumlah kursi yang masih kosong: $kursiKosong dari $totalKursi <br>";
    echo "Persentase kursi yang masih kosong: $persentaseKursiKosong<br>";
?>