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
    <h2>Hasil Pembayaran</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $npm = $_POST['NPM'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $biaya = $_POST['biaya'];
        
    }

    if ($biaya >= 5000000){
        $dd = "10%";
        $diskon = 0.1 * $biaya;
        $total = $biaya - $diskon;
    }
    elseif ($biaya >= 5000000 && $semester > 8){
        $dd = "15%";
        $diskon = 0.15 * $biaya;
        $total = $biaya - $diskon;
    }else{
        $dd = "0%";
        $diskon = 0 * $biaya;
        $total = $biaya - $diskon;
    }
    echo "NPM: $npm<br>";
    echo "Nama: $nama<br>";
    echo "Prodi: $prodi<br>";
    echo "Semester: $semester<br>";
    echo "Biaya: Rp. $biaya<br>";
    echo "Diskon: $dd<br>";
    echo "Total Biaya: Rp. $total<br>";
    ?>
</div>