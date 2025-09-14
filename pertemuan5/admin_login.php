<?php
require "functions.php";
session_start();

if (isset($_SESSION['login'])) {
    header("Location: adminpanel.php");
    exit;
}


validationLogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --dark-bg: #1e293b;
            --light-text: #f8fafc;
            --danger-color: #dc2626;
            --success-color: #16a34a;
            --gray-200: #e2e8f0;
            --gray-500: #64748b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--dark-bg);
            color: var(--light-text);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(37, 99, 235, 0.1);
            border: 2px solid var(--primary-color);
        }

        .logo img {
            width: 60%;
            height: 60%;
            object-fit: contain;
        }

        h1 {
            font-size: 1.75rem;
            font-weight: 600;
            margin-top: 1rem;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-200);
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            color: var(--light-text);
            font-size: 0.9375rem;
            transition: all 0.2s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
        }

        input::placeholder {
            color: var(--gray-500);
        }

        .error-message {
            color: var(--danger-color);
            font-size: 0.75rem;
            margin-top: 0.5rem;
            display: none;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--gray-500);
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        button:disabled {
            background-color: var(--gray-500);
            cursor: not-allowed;
        }

        .footer-links {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.875rem;
        }

        .footer-links a {
            color: var(--gray-200);
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <div class="logo">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30121fd1-dd64-4186-962c-be51e162b716.png" alt="Shield icon with administrator badge, blue gradient background" />
            </div>
            <h1>Admin Portal</h1>
        </div>

        <form action="" method="post" id="loginForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="email" name="username" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <span class="toggle-password" id="togglePassword">Show</span>
                </div>
                <div class="error-message" id="password-error">Password must be at least 8 characters</div>
            </div>

            <button type="submit" id="loginBtn" name="submit">Login</button>
        </form>

        <div class="footer-links">
            <?php if (validationLogin() === 'salahPw') : ?>
                <span style="color: red;">Password anda salah</span>
            <?php endif;?>
            <?php if (validationLogin() === 'belomDaftar') : ?>
                <span style="color: red;">Username Belom Terdaftar!</span>
                <span><a href="/latihan/pertemuan7/registrasi.php">Daftar Sekarang</a></span>
            <?php endif;?>
        </div>
    </div>
    <script src="scirpt.js"></script>
</body>
</html>

