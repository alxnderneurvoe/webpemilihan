<?php
header('Content-Type: application/json'); // Set header JSON
require_once 'koneksi.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Sanitasi input untuk keamanan

    // Dapatkan jalur file gambar sebelum menghapus data kandidat
    $result = mysqli_query($conn, "SELECT photo FROM kandidat WHERE id=$id");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $photoPath = 'uploads/' . $row['photo'];

        // Hapus data kandidat dari database
        $query = mysqli_query($conn, "DELETE FROM kandidat WHERE id=$id");

        if ($query) {
            // Hapus file gambar jika ada
            if ($photoPath && file_exists($photoPath)) {
                unlink($photoPath); // Hapus file dari server
            }

            echo json_encode(['success' => true, 'message' => 'Kandidat berhasil dihapus.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal menghapus kandidat: ' . mysqli_error($conn)]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Kandidat tidak ditemukan atau file gambar tidak tersedia.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID kandidat tidak ditemukan.']);
}

mysqli_close($conn); // Tutup koneksi
?>
