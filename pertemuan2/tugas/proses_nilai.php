<?php
if(isset($_GET['submit'])){
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $UTS = $_GET['UTS'];
    $UAS = $_GET['UAS'];
    $praktikum = $_GET['praktikum'];
    $grade = "";
    $skor = $UTS + $UAS + $praktikum;
    $rata = round($skor /3, 2);


    if ($rata >= 0 && $rata <= 35){
        $grade = 'E';
    } elseif($rata >= 36 && $rata <= 55){
        $grade = 'D';
    } elseif($rata >= 56 && $rata <= 69){
        $grade = 'C';
    } elseif($rata >= 70 && $rata <= 84){
        $grade = 'B';
    } elseif($rata >= 85 && $rata <= 100){
        $grade = 'A';
    } else {
        $grade = 'I';
    }

    

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $UTS <br>";
    echo "Nilai UAS: $UAS <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "rata: $rata"; 
    echo "<br> grade: $grade";
}else {
    echo "Tidak ada data";
}

?>
