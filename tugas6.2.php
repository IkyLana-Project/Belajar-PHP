<?php
//Seorang pedagang menjual jambu dengan harga Rp 15.000/kg. Di dalam tokonya terdapat 6 dus dan di setiap dus berisi 5 kg jambu. 
//Dua bekas tempat jambu itu masih bisa dijual lagi dengan harga Rp 2.000/dus. 
//Berapakah uang hasil penjualan seluruh jambu dan dus tersebut?
$jambu = 15000;
$kardus = 2000;
$kgjambu = 30;
$jambuterjualhabis = $jambu * $kgjambu;
$dusterjualhabis = $kardus * 2;
$penjualan = $jambuterjualhabis + $dusterjualhabis;

echo "Harga Jambu = Rp $jambu / Kg";
echo "<br>";
echo "Harga Kardus = Rp $kardus / Pcs <br>";
echo "Jadi Hasil Total Penjualan (Dus dan Jambu) Adalah = Rp $penjualan <br>";
//Muhammad Rizky Maulana
?>
