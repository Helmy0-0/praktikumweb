<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f3f6f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .result-box {
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }

    .result-box h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .result-box p {
        font-size: 16px;
        color: #555;
        margin: 8px 0;
    }

    .highlight {
        font-weight: bold;
        color: #007bff;
    }
</style>

<div class="result-box">
    <h2>Hasil Penilaian</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
    }

    if ($nilai >= 85 && $nilai <= 100){
        $predikat = "A";
        $status = "Lulus";
    }
    elseif ($nilai >= 75 && $nilai < 85) {
        $predikat = "B";
        $status = "Lulus";
    }
    elseif ($nilai >= 65 && $nilai < 75){
        $predikat = "C";
        $status = "Lulus";
    }
    elseif ($nilai >= 50 && $nilai < 65){
        $predikat = "D";
        $status = "Tidak Lulus";
    }else{
        $status = "Tidak Lulus";
        $predikat = "E";
    }

    echo "Nama: $nama<br>";
    echo "Nilai: $nilai<br>";
    echo "Predikat: $predikat<br>";
    echo "Status: $status";
    ?>
</div>