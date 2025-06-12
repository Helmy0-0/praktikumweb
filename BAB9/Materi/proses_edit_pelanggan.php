<?php
include 'koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id = $_POST['id'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $email = $_POST['email'];
   $telepon = $_POST['telepon'];


   $stmt = $con->prepare("UPDATE Pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID=?");
   $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);


   if ($stmt->execute()) {
       echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
   } else {
       echo "<script>alert('Gagal memperbarui data'); 
       window.location='index.php';</script>";
   }
}
?>
