<?php

$hari1 = 36;
$pekerja1 = 12;
$pekerja2 = 24;
$hari2 = null;

printf("<h3> No 1 :  <br/>");

printf("<h3>$hari1 hari = $pekerja1 pekerja <br/>
x hari = 24 pekerja<br/>
x hari = ...?<br/>
Jawaban : <br/></h3>");

$hari2 = $hari1 * $pekerja1 / $pekerja2;

printf("<h3>$hari1 hari *  $pekerja1 pekerja = X hari *  $pekerja2 pekerja  <br/>");
printf("<h3> X hari = $hari2 hari  <br/>");

printf("<h3> No 2 :  <br/>");

$jual = 80000;
$beli = 50000;
$keuntungan;

printf("<h3>Jual = $jual <br/>
Beli = $beli<br/>
Keuntungan = ...?<br/>
Jawaban : <br/></h3>");

$keuntungan = $jual - $beli;

printf("<h3>
Keuntungan = Jual - Beli <br/>
Keuntungan = $keuntungan <br/></h3>");
