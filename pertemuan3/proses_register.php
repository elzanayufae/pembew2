<?php
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $Gender = $_POST['Gender'];
    $major = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $skor = "";

    function Skor_skill($skills)
    {
       $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 30,
        'Python' => 30,
        'Java' => 50,
       ];

       $result = 0;
       foreach ($skills as $skill)
       {
            $result = $result + $skill_list[$skill];
       }

       return $result;
    }
    
    function kategori_skill($skor)
    {
        if($skor <= 0){
            $skor = 'Tidak Memadai';
        }
        elseif($skor > 40 && $skor <= 60){
            $skor = 'Kurang';
        }
        elseif($skor > 60 && $skor <= 100) {
            $skor = 'Baik';
        }
        else{
            $skor = 'Sangat Baik';
        }

    return $skor;

    }

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $Gender";
    echo "<br> Program Studi: $major";
    echo "<br> skill programming: ";
    foreach($skills as $skills){
        echo $skills . ", ";
    }
    echo "<br> Domilisi: $domisili";
    $skor = Skor_skill($skills);
    echo "<br> Skor Skill: " . $skor;
    echo "<br> Kategori Skill: " . kategori_skill($skor);
}
?>