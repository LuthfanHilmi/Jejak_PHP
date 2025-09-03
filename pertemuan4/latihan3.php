<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <?php
    $data = [
        [1, 2, 3], 
        [4, 5, 6], 
        [7, 8, 9]
    ];

    ?>

    <?php foreach ($data as $dta): ?>
        <?php foreach ($dta as $a): ?>
            <div>
                <?= $a ?>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
</body>

</html>