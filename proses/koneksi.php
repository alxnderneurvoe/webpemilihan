<?php
$servername = "localhost"; // Sesuaikan dengan database Anda
$username = "root";        // Sesuaikan dengan username MySQL Anda
$password = "";            // Sesuaikan dengan password MySQL Anda
$dbname = "pemilihan_ketum_policy";   // Nama database Anda

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

?>