<?php
$bil1=$_POST['txtbil1'];
$bil2=$_POST['txtbil2'];
echo "Bilangan 1= $bil1<br>";
echo "Bilangan 2= $bil2<br>";
if (isset($_POST['tambah'])){
    $hasil=$bil1+$bil2;
    echo $hasil;
}if(isset($_POST['kurang'])){
    $hasil=$bil1-$bil2;
    echo $hasil;
}if(isset($_POST['bagi'])){
    $hasil=$bil1/$bil2;
    echo $hasil;
}if(isset($_POST['kali'])){
    $hasil=$bil1*$bil2;
    echo $hasil;
}
?>