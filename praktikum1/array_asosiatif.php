<?php
// membuat array asosiatif (terdiri atas key & value)
$mhs = ['nama' => 'yani',
        'nim' => '0110123262', 
        'prodi' => 'SI', 
        'ips' => [1 => 3.40, 2 => 3.70, 3 => 4.0],];

// memanggil array asosiatif
echo "Nama : " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs ['ips'] ['1'];
echo "<br> IPS semester 2: " . $mhs ['ips'] ['2'];
echo "<br> IPS semester 3: " . $mhs ['ips'] ['3'];