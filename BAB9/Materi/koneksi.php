<?php
//koneksi ke database MYSQL parameter (host, username, password, database)
$con = new mysqli('localhost', 'root', '', 'pbw');

//cek koneksi
if ($con->connect_error){
    // Jika koneksi gagal, tampilkan pesan error
    die("Connection failed: " . $con->connect_error);
}

// // Query untuk mengambil data dari tabel buku
// $stmt = $con->prepare("INSERT INTO buku (nama, harga, stok) VALUES (?, ?, ?)");

// //bind parameter ke query (sii = string, integer, integer - sesuai tipe data di database)
// $stmt->bind_param("sii", $nama, $harga, $stok);
// $stmt->execute();
?>