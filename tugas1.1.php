<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1_1</title>
    <style>
div{
    width: 400px;
    height: 200px;
    padding: 1px;
}

ul{
    float: left;
    padding-right: 5px;
}

ol{
    list-style: none;
    padding-top: 15px;
}

li{
    padding-top: 2px;
    text-align: justify;
}
    </style>
    </head>
<body>

    <?php
    $tigabelas = 13000;
    $limabelas = 15000;
    $satu = 1000;
    $tiga = 3000;
    $lima = 5000;
    $empat = 4000;
    ?>
    <div>
        <?php echo ("<h1>Daftar Menu M.Rizky Maulana</h1>"); ?>
        <ul>
            <li><?php echo "Ayam Goreng  ";?></li>
            <li><?php echo "Ayam Bakar  ";?></li>
            <li><?php echo "Ayam Sayur  ";?></li>
            <li><?php echo "Tempe Goreng  ";?></li>
            <li><?php echo "Tahu Goreng  ";?></li>
            <li><?php echo "Soto  ";?></li>
            <li><?php echo "Nasi Putih  ";?></li>
            <li><?php echo "Es Teh  ";?></li>
            <li><?php echo "Es Tebu  ";?></li>
        </ul>
        <ol>
            <li><?php echo "= Rp. $tigabelas"; ?></li>
            <li><?php echo "= Rp. $limabelas"; ?></li>
            <li><?php echo "= Rp. $tigabelas"; ?></li>
            <li><?php echo "= Rp. $satu"; ?></li>
            <li><?php echo "= Rp. $satu"; ?></li>
            <li><?php echo "= Rp. $tiga"; ?></li>
            <li><?php echo "= Rp. $lima"; ?></li>
            <li><?php echo "= Rp. $empat"; ?></li>
            <li><?php echo "= Rp. $lima"; ?></li>
        </ol>
    </div>
</body>
</html>