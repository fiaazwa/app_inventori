<?php

session_start();

define('BASEURL', 'http://localhost/inventori_barang/src');

$host = "localhost";
$username = "root";
$password = "Networkin9";
$database = "project_mci_app_inventiry";

// koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// cek koneksi database
if ($conn->connect_errno) {
    echo "Gagal terkoneksi ke database: " . $conn->connect_error;
    exit();
}