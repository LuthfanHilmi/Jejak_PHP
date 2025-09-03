<?php
require 'functions.php';
update()

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen ">
    <div id="popup-message"
        class="fixed top-5 left-1/2 transform -translate-x-1/2 min-w-[300px] px-6 py-4 rounded text-white text-base z-[9999] opacity-0 pointer-events-none transition-all duration-500">
        hghghj
    </div>
    <a href="adminpanel.php" class="mx-5 mt-3 ">Kembali Ke Table Data</a>

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto mt-20">
        <h1 class="text-2xl font-bold mb-4 text-center">Edit Data Mahasiswa</h1>
        <form action="" method="POST" class="space-y-4">
            <!-- NIM -->
            <div>
                <label for="nim" class="block text-gray-700 font-medium mb-1">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required maxlength="6" value="<?= selectToUpdate()['nim'] ?>">
            </div>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required  value="<?= selectToUpdate()['nama_mahasiswa']?>">
            </div>

            <!-- Jurusan -->
            <div>
                <label for="jurusan" class="block text-gray-700 font-medium mb-1">Jurusan</label>
                <input type="text" id="nama" name="jurusan" placeholder="Masukkan Nama"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required value="<?= selectToUpdate()['jurusan']?>">
            </div>
            <!-- Tombol Simpan -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition"
                name="submit">
                Simpan Data
            </button>
        </form>
    </div>
    <script src="brain.js"></script>   
</body>

</html>