<?php
$x="hello world<br>";
echo $x;
$x=13;
echo "$x <br>" ;
$y=5;
echo "$y <br>";
//penjumlahan
$hasil=$x + $y;
echo "penjumlahan dari x dan y = $hasil <br>";
$pengurangan=$x-$y;
echo "pengurangan dari x dan y = $pengurangan <br>";
echo "$hasil lebih besar dari $pengurangan <br>";
//perkalian dan pengurangan
$bagi=$x/$y;
echo "pembagian antara x dan y = $bagi";
echo "<br>";
$kali=$x*$y;
echo "perkalian antara x dan y = $kali";

$no1=$_POST('txtbil1');
$no2=$_POST('txtbil2');
echo "Bilangan 1: $bil1<br>";
echo "Bilangan 2: $bil2<br>";
$tambah=$bil1 +$bil2;
echo "hasil tambah =".$tambah;
?>