<?php
header('Content-Type: application/json'); // Set header JSON
require_once 'koneksi.php';

$query = mysqli_query($conn, "UPDATE kandidat SET dipilih = 0");

if ($query) {
    echo json_encode(['success' => true, 'message' => 'Semua kandidat berhasil diatur ulang.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal mengatur ulang kandidat: ' . mysqli_error($conn)]);
}

$conn->close();
?>
