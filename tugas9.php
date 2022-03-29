<?php

$before = 0;
$after = 1;
$total;
echo "Deret Fibonacci : <br/>";
for ($i = $before; $i < 20; $i++) {
    echo "$before  ";
    $total = $before + $after;
    $before = $after;
    $after = $total;
}
echo " <br/> <br/>";


//--
//---Menampilkan Bilangan prima dari 1 sampai ke-n
//---By: BliKomKom
//---http://www.komang.my.id
//--
$n = isset($GET['n']) ? $_GET['n'] : 1;
for ($angka = 1; $angka <= $n; $angka++) {
    $prima = true;
    for ($i = 2; $i < $angka; $i++) {
        if ($angka % $i == 0)
            $prima = false;
    }
    if ($prima)
        echo "$angka ";
}
