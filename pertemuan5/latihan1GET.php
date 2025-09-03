<?php

$data = [
        ["Andi", 2321312, "andi@gmail.com", "Informatika"],
        ["Rudi", 2321312, "andi@gmail.com", "Informatika"]

    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center font-bold">Daftar Mahasiswa</h1>
    
    <div class="flex justify-center gap-10 items-center h-screen">
        <?php foreach($data as $d) :?>
            <span class="p-3 bg-blue-500 text-center text-white rounded-xl hover:cursor-pointer">
                <a href="latihan2.php?nama=<?= $d[0]?>&nrp=<?= $d[1]?>&email=<?= $d[2]?>&jurusan=<?= $d[3]?>"><?= $d[0]?></a>
            </span>
        <?php endforeach ;?>
    </div>
</body>
</html>