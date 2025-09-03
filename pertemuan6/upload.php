<?php
require 'functions.php';
$data = showData();
rulesUpload();
delete();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Gambar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-white min-h-screen flex flex-col gap-5 items-center justify-center">
    <!-- <div id="notification" class="fixed top-5 right-5 px-6 py-4 rounded shadow-lg text-white text-sm z-50
        <?php echo ($rulesUpload === 0) ? 'bg-green-500' : 'bg-red-500'; ?>">
        
    </div> -->


    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md border border-gray-200">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Upload Gambar</h1>

        <!-- Form Upload -->
        <form action="" method="post"  class="space-y-4" enctype="multipart/form-data">
            <!-- Input File -->
            <div>
                <label for="imageUpload" class="block text-gray-700 font-medium mb-1">Pilih Gambar</label>
                <input type="file" id="imageUpload" name="gambar" class="block w-full text-sm text-gray-700
                 file:mr-4 file:py-2 file:px-4
                 file:rounded-lg file:border-0
                 file:text-sm file:font-semibold
                 file:bg-blue-500 file:text-white
                 hover:file:bg-blue-600
                 transition duration-200 ease-in-out" />
            </div>

            <!-- Input Nama Gambar -->
            <div>
                <label for="namaGambar" class="block text-gray-700 font-medium mb-1">Nama Gambar</label>
                <input type="text" id="namaGambar" name="nama"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Nama file gambar" />
            </div>

            <!-- Tombol Submit -->
            <button type="submit" name="submit"
                class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200 font-semibold">
                Submit
            </button>
        </form>

        <!-- Preview Area -->
        <?php if ($data != null) :?>
            <div id="preview" class="text-center mt-6 mb-3">
                    <img src="img/<?= $data['gambar']?>" id="previewImage" class="mx-auto mb-2 rounded-md max-h-60 object-contain border border-gray-300 p-2" />
                    <p class="font-bold"><?= $data['nama']?></p>
            </div>
        <?php else :?>
            <div class="my-5 text-center border border-gray-300 rounded-lg p-2">
                <p class="text-red-500">Tidak ada gambar yang diupload!</p>
            </div>
        <?php endif;?>
        <a href="upload.php?id=<?= $data['id']?>" name="hapus" id="removeImageBtn"
            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 text-sm">
        Hapus Gambar
        </a>
    </div>
</body>

</html>