<?php
// soal no 4
function perkenalan(){
     echo "Assalamualaikum, ";
     echo "Perkenalkan, nama saya Nurhidayah<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }
 perkenalan();
 perkenalan();
 echo "<br>";
// -------------------------------------------------
//soal no 5
function perkenalan1($nama, $salam){
     echo $salam.", ";
     echo "Perkenalkan, nama saya ".$nama."<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }
 perkenalan1("Hamdana","Hallo");

 echo "<hr>";

 $saya = "Nurhidayah";
 $ucapanSalam = "Selamat pagi";

 perkenalan1($saya,$ucapanSalam);
 echo "<br>";
//  ----------------------------------------------
// soal no 6
 function perkenalan2($nama, $salam="Assalamualaikum"){
     echo $salam.", ";
     echo "Perkenalkan, nama saya ".$nama."<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }

 perkenalan2("Hamdana","Hallo");

 echo "<hr>";

 $saya = "Elok";
 $ucapanSalam = "Selamat pagi";
 perkenalan2($saya);
 echo "<br>";
//  -------------------------------------------------
// soal no 7
 function hitungUmur($thn_lahir, $thn_sekarang){
         $umur = $thn_sekarang - $thn_lahir;
         return $umur;
     }
    
     echo "Umur saya adalah ". hitungUmur(2001, 2023). " tahun";
     echo "<br><br>";
// ----------------------------------------------------
// soal no 8
function hitungUmur1($thn_lahir, $thn_sekarang){
    $umur1 = $thn_sekarang - $thn_lahir;
    return $umur1;
}
function perkenalan3($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia " . hitungUmur(2001, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan3("Nurhidayah");
?>