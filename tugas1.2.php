<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1_2</title>
</head>
<body>
    <?php
    $satu = 1000;
    $limabelas = 15000;
    $dua = 20000;
    $lima = 5000;
    ?>
    <?php
    printf("<h1>DAFTAR MENU M.RIZKY MAULANA</h1>");
    ?>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama Menu</td>
                <td>Harga</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Cireng</td>
                <td><?php echo "Rp $satu"; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Es Duren</td>
                <td><?php echo "Rp $limabelas"; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Es Milo</td>
                <td><?php echo "Rp $dua"; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Es Teh</td>
                <td><?php echo "Rp $lima"; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Piscok</td>
                <td><?php echo "Rp $satu"; ?></td>
            </tr>
        </table>
    </body>
</html>