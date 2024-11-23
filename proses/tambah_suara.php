<?php
require_once 'koneksi.php';

$response = array();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = mysqli_query($conn, "UPDATE kandidat SET dipilih = dipilih + 1 WHERE id = $id");
    if ($query) {
        $response['status'] = 'success';
        $response['message'] = 'Pemilihan berhasil.';
    } else {
        $response['status'] = 'failed';
        $response['message'] = 'Pemilihan gagal.';
    }
} else {
    $response['status'] = 'failed';
    $response['message'] = 'ID tidak valid.';
}

mysqli_close($conn);

// Mengirimkan response dalam format JSON
echo json_encode($response);
?>
