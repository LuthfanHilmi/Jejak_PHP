<?php


$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'latihanphp'
);


// mengirim gambar ke database
function uploadImage() {
    global $conn;
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $hashName = uniqid();
        $hashName .= '.';
        $hashName .= ekstensi();

        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $hashName);
        $query = "INSERT INTO upload VALUES ('', '$nama', '$hashName')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}



function rulesUpload() {
    global $conn;
    if (isset($_POST['submit'])) {
        $allowFileUpload = ['jpg', 'png', 'jpeg'];
        $fileEks = ekstensi();

        // $pesanError = '';
        if ($_FILES['gambar']['error'] === 4 ) {
            echo "<script>alert('Anda belum mengirimkan gambar')</script>";
            return false;
        }

        if ($_FILES['gambar']['size'] > 100000) {
            echo "<script>alert('File Terlalu Besar!')</script>";
            return false;
        }
        


        if (in_array($fileEks, $allowFileUpload)) {
            echo "<script>alert('Gambar berhasil diupload')</script>";
            return uploadImage();
        } else {
            echo "<script>alert('Anda mengupload shell!!')</script>";
            return false;
        }
        



    }
}


function showData() {
    global $conn;
    $query = "SELECT * FROM upload";
    $sql = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($sql);
}




function delete() {
    global $conn;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM upload WHERE id = $id";
        mysqli_query($conn, $query);
    }
    
}






function ekstensi() {
    $fileName = $_FILES['gambar']['name'];
    $break = explode('.', $fileName);
    return strtolower(end($break));
}
?>