<?php
if (!isset($_GET['nama']) 
    || !isset($_GET['nrp'])
    || !isset($_GET['email'])
    || !isset($_GET['jurusan'])) {
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center font-bold">Detail Mahasiswa</h1>
    <a href="latihan1.php" class="mx-5 p-2 bg-blue-500 rounded-xl text-center">Back</a>
        <ul class="flex flex-col justify-center gap-10 items-center h-screen">
            <li>Nama : <?= $_GET['nama']?></li>
            <li>NRP : <?= $_GET['nrp']?></li>
            <li>Email : <?= $_GET['email']?></li>
            <li>Jurusan : <?= $_GET['jurusan']?></li>
        </ul> 
</body>
</html>