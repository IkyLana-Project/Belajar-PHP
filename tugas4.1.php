<?php
//created by Muhammad Rizky Maulana
$beli = 6000;
$jual = 7500;
$keuntunganperekor = 300;
$keuntungan = $jual - $beli;
$hasil = $keuntungan / $keuntunganperekor;

echo "Harga Beli = Rp. $beli <br>";
echo "Harga Jual = Rp. $jual <br>";
echo "Keuntungan = Rp. $keuntunganperekor <br>";
echo "Berapa jumlah kambing yang dibeli? <br>";
echo "Jawaban : $hasil Ekor";
?>