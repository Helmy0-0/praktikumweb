<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
</head>
<body style = "padding: 20px;">
    <h1>Perhitungan Total Pembelian (Dengan Array)</h1>
    <div>
    <?php
        $barang = [
            "Keyboard" => 150000, 
            "Mouse" => 50000, 
            "Monitor" => 200000
        ];
        $nama_barang = "Keyboard";
        $jumlah = 2;
        $harga_satuan = $barang[$nama_barang];
        $pajak = 0.1;

        $total = $harga_satuan * $jumlah;
        $pajak = $total * $pajak;
        $bayar = $total + $pajak;
        define("pajak", 0.1);

        echo "Nama Barang: " . $nama_barang . "<br>";
        echo "Harga Barang: Rp " . $harga_satuan . "<br>";
        echo "Jumlah Barang: " . $jumlah . "<br>";
        echo "Total Harga (sebelum pajak): " . $total . "<br>";
        echo "Pajak: " . $pajak . "<br>";
        echo "Total Bayar: " . $bayar . "<br>";
    ?>
    </div>
</body>
</html>