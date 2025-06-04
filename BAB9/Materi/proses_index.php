<?php
include 'koneksi.php'; 
$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';
$query = "SELECT * FROM buku WHERE 1=1";
if (!empty($search_judul)) {
    $query .= " AND Judul LIKE '%" . $con->real_escape_string($search_judul) . "%'";
}
if (!empty($search_tahun)) {
    $query .= " AND Tahun_Terbit = " . $con->real_escape_string($search_tahun);
}
$result = $con->query($query);

if (!empty($search_judul)) {
       $query .= " AND Judul LIKE '%" . $con->real_escape_string($search_judul) . "%'";
   }
   if (!empty($search_tahun)) {
       $query .= " AND Tahun_Terbit = " . $con->real_escape_string($search_tahun);
   }


   $result = $con->query($query);
?>
