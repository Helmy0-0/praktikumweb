<?php
   $nama = "Budi";
   $umur = 20;
   $nilai = 90;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
   define("NAMA_KONSTANTA", $nilai);
   define("SITE_NAME", "unsika.ac.id");
   define("VERSION", "1.0");


   echo "Selamat datang di " . SITE_NAME . "<br>";
   echo "Versi Sistem: " . VERSION . "<br>";

   class Mahasiswa {
      public $nama;
      public function sapa() {
          return "Halo, saya $this->nama";
      }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa()
?>

