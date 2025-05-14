<?php
//post
$var_nama = $_POST['nama'];
$var_email = $_POST['email'];

//get
$var_nama = $_GET['nama'];
$var_email = $_GET['email'];

//percabangan php
$nilai = 75;
if($nilai >=80){
    echo "Nilai A";
}elseif($nilai >= 70){
    echo "Nilai B";
}else{
    echo "Nilai C";
}

//if dua kondisi
$umur = 20;
$ktp = true;
if($umur >= 17 && $ktp){
    echo "Boleh Memilih";
}

//filtering
if (!empty($_POST['nama'])){
    echo "Nama: ". htmlspecialchars($_POST['nama']);
}else{
    echo "Nama tidak boleh kosong";
}
?>