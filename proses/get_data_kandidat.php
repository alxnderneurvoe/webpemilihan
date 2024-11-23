<?php
header('Content-Type: application/json'); // Set header JSON
require_once 'koneksi.php';

// Query untuk mengambil data kandidat dan jumlah terpilih
$query = "SELECT * FROM kandidat";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'photo' => $row['photo'],
        'dipilih' => (int) $row['dipilih']
    ];
}

mysqli_close($conn); // Tutup koneksi
echo json_encode($data); // Return data dalam bentuk JSON
?>
