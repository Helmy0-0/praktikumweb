<?php
include 'koneksi.php';

$search_nama = $_GET['nama'] ?? '';

if ($search_nama != '') {
    $stmt = $con->prepare("SELECT * FROM Pelanggan WHERE Nama LIKE ?");
    $like_nama = "%" . $search_nama . "%";
    $stmt->bind_param("s", $like_nama);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $con->query("SELECT * FROM pelanggan");
}
?>
