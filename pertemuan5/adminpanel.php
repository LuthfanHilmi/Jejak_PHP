<?php
require('functions.php');

delete();

$tampilData = selectData("SELECT * FROM datamahasiswa");


if (isset($_POST['cari'])) {
  $tampilData = searchBar();
}



?>



<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Mahasiswa</title>
  <!-- CDN Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300 font-sans min-h-screen flex flex-col items-center py-10">

  <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Mahasiswa</h1>

  <!-- Search bar -->
  <div class="w-full max-w-5xl mb-6 px-4">
    <form action="" method="post"
      class="flex items-center border border-gray-300 rounded-md shadow-sm overflow-hidden">
      <input type="text" name="keyword" placeholder="Cari mahasiswa..."
        class="w-full px-4 py-2 text-gray-700 focus:outline-none bg-slate-100" />
      <button type="submit" name="cari" class="bg-blue-600 text-white px-4 py-2 hover:bg-blue-700 transition-colors">
        Cari
      </button>
    </form>
  </div>

  <div class="w-full max-w-5xl overflow-x-auto rounded-lg">
    <table class="w-full table-auto border-collapse bg-slate-300 shadow-md">
      <thead>
        <tr class="bg-blue-600 text-white">
          <th class="px-6 py-3 text-left">No</th>
          <th class="px-6 py-3 text-left">NIM</th>
          <th class="px-6 py-3 text-left">Nama</th>
          <th class="px-6 py-3 text-left">Jurusan</th>
          <th class="px-6 py-3 text-center">Action</th>
        </tr>
      </thead>
      <?php if (!$tampilData) :?>
        <tbody>
          <tr class="odd:bg-slate-200 even:bg-slate-100 text-center font-bold">
            <td colspan="5" class="p-2">Keyword '<?= $_POST['keyword'] ;?>' Tidak Ditemukan!</td>
          </tr>
        </tbody>
      <?php else :?>

      <tbody>
        <?php $no = 1; ?>
        <?php foreach($tampilData as $data) :?>
          <tr class="odd:bg-slate-200 even:bg-slate-100">
            <td class="px-6 py-3"><?= $no ?></td>
            <td class="px-6 py-3"><?= htmlspecialchars($data['nim']) ?></td>
            <td class="px-6 py-3"><?= htmlspecialchars($data['nama_mahasiswa']) ?></td>
            <td class="px-6 py-3"><?= htmlspecialchars($data['jurusan']) ?></td>
            <td class="px-6 py-3 text-center space-x-2">
              <a href="adminpanel.php?id=<?= $data['id'] ?>" class="text-red-600 hover:underline">Hapus</a>
              <span>|</span>
              <a href="edit.php?id=<?= $data['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
            </td>
          </tr>
          <?php $no++; ?>
        <?php endforeach;?>
      </tbody>
      
      <?php if ($tampilData == []) :?>
        <tbody>
          <tr class="odd:bg-slate-200 even:bg-slate-100 text-center font-bold">
            <td colspan="5" class="p-2">Belom Ada Data!</td>
          </tr>
        </tbody>
      <?php endif;?>
      
      <?php endif ;?>
    </table>
  </div>

  <div class="mt-6">
    <a href="tambahdata.php"
      class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
      [+] Tambah Data
    </a>
  </div>

</body>

</html>