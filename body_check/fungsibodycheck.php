<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $beratbadan = $_POST['bb'];
    $tinggibadan = $_POST['tb'];
}
error_reporting(0);
//hitung IMT
$tinggibadan = $tinggibadan / 100;
$imt = $beratbadan / ($tinggibadan * $tinggibadan);
$imt = number_format($imt, 1);
//kategori IMT

if ($imt < 1) {
    $hasil = " ";
} elseif ($imt < 18.5) {
    $hasil = "Hasil IMT kamu adalah $imt
                <br>IMT kamu UNDERWEIGHT (kurang dari 18.5) / kurang berat badan
                <br>Makan makanan sehat berkalori tinggi dan rajin berolahraga (Bulking)";
} elseif ($imt < 25.1) {
    $hasil = "Hasil IMT kamu adalah $imt
                <br>IMT kamu NORMAL (18.5 hingga 25.0), pertahankan!!
                <br>Tetap konsumsi makanan sehat dan rajin berolahraga";
} else {
    $hasil = "Hasil IMT kamu adalah $imt
                <br>IMT kamu OVERWEIGHT (25.1 hingga 27.0) / kelebihan berat badan
                <br>Makan makanan sehat berkalori rendah dan rajin berolahraga (Cutting)";
}
