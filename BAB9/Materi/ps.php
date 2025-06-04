<?php
//prepared statement untuk menghindari SQL Injection


include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    //ambil data dari form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $stmt = $con->prepare("INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga, $stok);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Data buku berhasil ditambahkan.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>