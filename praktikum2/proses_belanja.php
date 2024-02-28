<?php
// tangkap input from
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// harga produk
$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin cuci' => 3800000,
];

// menghitung total harga
$total = $jumlah * $harga[$produk];

// format harga
$total = number_format($total);

// tampilkan hasil from
echo "Nama Customer : $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Beli : $jumlah";
echo "<br> Total belanja: $total";
