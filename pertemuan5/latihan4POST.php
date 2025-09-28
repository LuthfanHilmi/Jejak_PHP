<?php 
require "latihan3POST.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST['submit'])) :?>
        <h1><?= $_POST['name']?></h1>
    <?php else :?>
        <?php header("Location: latihan3POST.php")?>
    <?php endif;?>
</body>
</html>