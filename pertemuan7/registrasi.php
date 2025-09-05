<?php
require "functions.php";


if (register($_POST) === true) {
    echo "<script>alert('User talah ditambahkan')</script>";
    header("Location: /latihan/pertemuan5/admin_login.php");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg w-full max-w-sm">

        <!-- Icon -->
        <div class="flex justify-center mb-6">
            <div class="bg-blue-500 p-4 rounded-full">
                <!-- Gunakan gambar/icon di sini jika perlu -->
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path
                        d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2zM20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                    </path>
                </svg>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center mb-6">Register User</h2>

        <!-- Form -->
        <form action="" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm mb-1">Username</label>
                <input type="text" id="username" placeholder="Enter username" name="username"
                    class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm mb-1">Password</label>
                <input type="password" id="password" placeholder="Enter password" name="password"
                    class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-6">
                <label for="confirm-password" class="block text-sm mb-1">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm password" name="password2"
                    class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <?php if (isset($_POST['submit'])) :?>
                <?php if ($password != $password2) :?>
                    <div class="mb-6 text-center text-red-600">
                        <p>Password Tidak sama </p>
                    </div>
                <?php endif ;?>
            <?php endif ;?>

            <button type="submit" name="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded focus:outline-none transition">
                Sign Up
            </button>
        </form>
    </div>
</body>

</html>