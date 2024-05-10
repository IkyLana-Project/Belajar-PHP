<?php
echo "Deret Bilangan Prima 0 Sampai 200 <br>";
//Muhammad Rizky Maulana
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 0; $i <= 200; $i++) {
    if (isPrime($i)) {
        echo $i . ",";
    }
}
?>