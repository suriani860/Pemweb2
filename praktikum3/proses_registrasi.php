<?php  
//  tangkap input from registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skills =[
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Phyton' => 30,
    'Java' => 50,
];

$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
} 

if ($skor_skill > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak lulus';
}
 
// tampilan grade predikat
switch (true) {
    case ($skor_skill < 0):
        $predikat = "Tidak Memadai";
        break;

    case ($skor_skill< 40):
        $predikat = "Kurang";
        break;
    
    case ($skor_skill < 60):
        $predikat = "Cukup";
        break;
        
     case ($skor_skill < 100):
        $predikat = "Baik";
        break;
        
     case ($skor_skill < 150):
        $predikat = "Sangat Baik";
        break;
}



echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(', ', $skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skor skill: $skor_skill";
echo "<br>Predikat: $predikat";