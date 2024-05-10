<?php
echo "Deret Bilangan Fibonacci 0 Sampai 20 <br>";
//Muhammad Rizky Maulana
function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

for ($i = 0; $i <= 21; $i++) {
    echo fibonacci($i) . " ";
}
?>