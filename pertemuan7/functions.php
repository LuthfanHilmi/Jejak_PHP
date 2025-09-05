<?php
$conn = mysqli_connect(
    "localhost",
    'root',
    '',
    'latihanphp'
);



if (isset($_POST['submit'])) {
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
}



function register($data) {
    global $conn;
    

    if (isset($_POST['submit'])) {
        $username = strtolower(stripslashes($data['username']));
        global $password;
        global $password2;


        if ($password != $password2) {
            return false;
        }

        $validation = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if (mysqli_fetch_assoc($validation)) {
            echo "<script>alert('User telah terdaftar!')</script>";
            header("Location: /latihan/pertemuan5/admin_login.php");
            return false;
        }

        
        // jika kedua password benar 
        $password = password_hash($password, PASSWORD_DEFAULT);
        // insert database
        $query = "INSERT INTO users VALUES ('', '$username', '$password')";
        mysqli_query($conn, $query);
        return true;
    }
}



function showData() {
    global $conn;

    $query = "SELECT * FROM users";
    $sql = mysqli_query($conn, query: $query);
    while ($result = mysqli_fetch_assoc($sql)) {
        $row[] = $result;
    };


    return $row;
    
    
}

?>