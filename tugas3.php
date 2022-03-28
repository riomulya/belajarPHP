<?php

$jarak = 360;
$kec = 90;
$kec = $kec / 5 * 18;
print("NO 1 : <br/>");
print("Jarak Koa A-Z = $jarak KM<br/>");
print("Kecepatan Motor = $kec m/s<br/>");
print("Waktu Tempuh = ...?<br/>");
$kec = $jarak  / $kec * 60;
printf("Jawaban =  %.2f Menit<br/>", $kec);

print("<br/><br/>NO 2 : <br/>");

$tabungan = 150000;
$bunga = 0.125;
$tabungan = $tabungan * $bunga;
print("Total Tabungan Setahun = ? <br/>");
print("Jawaban : Rp. $tabungan <br/>");
