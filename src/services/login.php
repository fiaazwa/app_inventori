<?php

require_once '../connfig/conn.php';

$href = "document.location.href = '" . BASEURL . "/view/login.php'";

// cek apakah tombol login ditekan
if (isset($_POST['login'])) {
    // Dapatkan data dari inputan
    $email = $_POST['email'];
    $password = $_POST['password'];

    // cek email apakah ada di database
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        // cek apakah passwordnya benar
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['is_login'] = true;
            $_SESSION['user_id'] = $row['id'];
            // arahkan ke halaman aplikasi
            header('location: ' . BASEURL . '/view/dashboard.php');
            exit;
        }
    }
    // jika email atau password salah arahkan kembali ke login
    echo "
        <script>
            alert('Email atau password salah')
            $href
        </script>";
    exit;
}