<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'latihanphp'
);


// MENAMPILKAN DATA

function selectData($query) {
    global $conn;
    $sql = mysqli_query($conn, $query);
    while ($result = mysqli_fetch_assoc($sql)) {
        $row[] = $result;
    }
    return $row;
}



// TAMBAH DATA

function addData() {
    global $conn;
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $query = "INSERT INTO datamahasiswa VALUES ('', '$nim', '$nama', '$jurusan')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    
}


// HAPUS DATA

function delete() {
    global $conn;
    if (isset($_GET['id'])) {
        $query = "DELETE FROM datamahasiswa WHERE id=$_GET[id]";
        mysqli_query($conn, $query);
    }
    
}


// MENGUPDATE DATA

function selectToUpdate() {
    global $conn;
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM datamahasiswa WHERE id=$id");
    $result = mysqli_fetch_assoc($sql);
    return $result;
}


function update() {
    global $conn;
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $query = "UPDATE datamahasiswa SET nim=$nim, nama_mahasiswa='$nama', jurusan='$jurusan' WHERE id=$id";
        $sql = mysqli_query($conn, $query);
        return $sql;
    }
}


// MENCARI DATA

function searchBar() {
  global $conn;
  
  if (isset($_POST['cari'])) {
    $id = $_POST['keyword'];
    $nim = $_POST['keyword'];
    $nama = $_POST['keyword'];
    $jurusan = $_POST['keyword'];
    $query = "SELECT * FROM datamahasiswa WHERE id LIKE '%$id%' OR nim LIKE '%$nim%' OR nama_mahasiswa LIKE '%$nama%' OR jurusan LIKE '%$jurusan%'";
    $sql = mysqli_query($conn, $query);
    $xll = mysqli_fetch_assoc($sql);
    $grep[] = $xll;
    return $grep;
  }
}


?>