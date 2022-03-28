<?php

$beli = 8000;
$jual = 7500;
$keuntungan = 300;
print("beli = $beli<br/>");
print("jual = $jual<br/>");
print("keuntungan = $keuntungan<br/>");
$keuntungan = ($beli - $jual) / $keuntungan;

printf("Berapa Jumlah Kambing yang dibeli ?<br/>Jawaban : %.2f ekor", $keuntungan);
