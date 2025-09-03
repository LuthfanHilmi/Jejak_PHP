<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <table border="1">
        <?php for($i = 1; $i <= 5; $i++) :?>
            <tr>
                <?php for($x = 1; $x <= 4; $x++) : ?>
                    <?php if ($x % 2 == 0) : ?>
                        <td style="background-color: aquamarine;"><?= $i,",", $x?></td>
                    <?php else:?>
                        <td><?= $i,",", $x?></td>
                    <?php endif;?>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>