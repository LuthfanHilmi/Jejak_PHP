<!-- ARRAY ASSOCIATIVE  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kandang Harley</title>
</head>

<body>
    <?php
        $motor = [
            [
                'gambar' => 'gambar1.png',
                'jenis' => 'Harley Davidson Spotster Evo',
                'tahun' => 1993
            ],
            [
                'gambar' => 'gambar2.png',
                'jenis' => 'Harley Davidson Spotster Evo',
                'tahun' => 1995
            ],
            [
                'gambar' => 'gambar3.png',
                'jenis' => 'Harley Davidson Spotster 48',
                'tahun' => 2013
            ]
            
        ]
    ?>

    <?php foreach($motor as $dta) :?>
        <ul>
            <img src="image/<?php $motor['gambar']?>" alt="">
            <li>Jenis : <?= $dta['jenis']?></li>
            <li>Tahun : <?= $dta['tahun']?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>