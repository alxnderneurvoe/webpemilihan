<?php
header('Content-Type: application/json');

require_once 'koneksi.php'; // Pastikan file koneksi sudah benar

// Periksa apakah data dan file dikirim menggunakan metode POST
if (isset($_POST['name']) && isset($_FILES['photo'])) {
    $name = $_POST['name'];

    // Proses upload foto
    $photo = $_FILES['photo'];
    $targetDir = "uploads/";

    // Generate nama file acak dengan ekstensi yang sama
    $extension = pathinfo($photo["name"], PATHINFO_EXTENSION);
    $randomFileName = uniqid() . '_' . time() . '.' . $extension;
    $targetFile = $targetDir . $randomFileName;

    // Validasi tipe file
    $check = getimagesize($photo["tmp_name"]);
    if ($check === false) {
        echo json_encode(['success' => false, 'message' => 'File yang diunggah bukan gambar.']);
        exit();
    }

    // Simpan file ke direktori tujuan
    if (move_uploaded_file($photo["tmp_name"], $targetFile)) {
        // Simpan data ke database dengan path file yang baru
        $sql = "INSERT INTO kandidat (name, photo) VALUES ('$name', '$randomFileName')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Kesalahan saat menyimpan ke database: ' . $conn->error]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal mengunggah gambar']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Data tidak lengkap']);
}

$conn->close();
?>
