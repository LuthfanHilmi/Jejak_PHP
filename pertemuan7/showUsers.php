<?php 
require "functions.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <marquee behavior="" direction=""><h1>Selamat Datang di Halaman Admin</h1></marquee>
    <table border="1" align="center">
        <thead>
            <tr>
                <td align="center">No.</td>
                <td align="center">Username</td>
                <td align="center">Password</td>
            </tr>
        </thead>

        <tbody>
            <?php $num = 1;?>
            <?php foreach (showData() as $data) :?>
                <tr>
                    <td align="center"><?= $num++?></td>
                    <td align="center"><?= $data['username']?></td>
                    <td align="center"><?= $data['password']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>