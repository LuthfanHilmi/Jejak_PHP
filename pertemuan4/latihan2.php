<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .box {
            padding: 10px;
            background-color: red;
            width: 50px;
            height: 50px;
            text-align: center;
            margin: 10px;
            float: left;
        }
    </style>
</head>

<body>
    <?php
    // single array
    $new_data = ["Bagas", 2325435, "andi@gmail.com", "Informatika"];

    echo $new_data[0];
    // multi array
    $data = [
        ["Andi", 2321312, "andi@gmail.com", "Informatika"],
        ["Rudi", 2321312, "andi@gmail.com", "Informatika"]

    ];
    ?>

    <h2>Data Peserta </h2>
    <h3>Single Array</h3>
    <?php foreach($new_data as $n) :?>
        <div>
            <?= var_dump($n) ?>
        </div>
    <?php endforeach;?>

    
    <h3>Multi Array</h3>
    <?php foreach($data as $d) :?>
        <div>
            <?php echo $d[0] ?>
        </div>
    <?php endforeach;?>
</body>

</html>