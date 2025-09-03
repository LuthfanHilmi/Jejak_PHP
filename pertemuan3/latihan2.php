<?php

function welcome($waktu, $nama) {
    return "Selamat $waktu, $nama";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2><?php echo welcome("datang", "Admin")?></h2>
</body>
</html>