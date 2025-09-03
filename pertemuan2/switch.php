<?php

$input_user = $_POST['input_number'] ?? '';
$hasil = "";

switch ($input_user) {
    case 1:
        $hasil = 'mangga';
    break;
    case 2:
        $hasil = 'semangka';
    break;
    case 3:
        $hasil = 'jeruk';
    break;
    default:
        $hasil = 'nomor yang anda pilih salah';
    break;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Switch PHP</title>
</head>
<body>
    <h3><?= $hasil ?></h3>
    <form method="POST">
        <input type="number" placeholder="Masukan nomor" name="input_number">
        <button type="submit">submit</button>
    </form>
</body>
</html>