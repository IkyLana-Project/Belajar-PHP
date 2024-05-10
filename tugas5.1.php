<?php
//Muhammad Rizky Maulana
// Fungsi untuk menghasilkan nilai 0 atau 1 berdasarkan ekspresi logika AND
function andLogic($input1, $input2) {
    return (int) ($input1 && $input2);
}

// Fungsi untuk menghasilkan nilai 0 atau 1 berdasarkan ekspresi logika OR
function orLogic($input1, $input2) {
    return (int) ($input1 || $input2);
}

// Tampilkan tabel logika dengan border
function displayTable($inputs) {
    echo '<p> Tabel Logika <span style="background-color: blue;"> 1111 Muhammad Rizky Maulana</span> </p>';
    echo '<table style="border: 1px solid black;">';
    echo '<tr><th style="border: 1px solid black;">Input true</th><th style="border: 1px solid black;">Input 2</th><th style="border: 1px solid black;">AND</th><th style="border: 1px solid black;">OR</th></tr>';
    foreach ($inputs as $input1) {
        echo '<tr>';
        foreach ($inputs as $input2) {
            echo '<td style="border: 1px solid black;">' . ($input1 ? 'true' : 'false') . '</td>';
            echo '<td style="border: 1px solid black;">' . ($input2 ? 'true' : 'false') . '</td>';
            echo '<td style="border: 1px solid black;">' . andLogic($input1, $input2) . '</td>';
            echo '<td style="border: 1px solid black;">' . orLogic($input1, $input2) . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
}

// Tampilkan tabel logika
$inputs = [false, true];
displayTable($inputs);
?>