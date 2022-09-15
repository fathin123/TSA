<?php
// buat koneksi dengan database mysql
function buatKoneksi(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dts_tsa";
    return mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
}

// ambil tabel mahasiswa
function getTableProduk(){
    $link = buatKoneksi();
    $query = "SELECT * FROM produk";
    $result = mysqli_query($link, $query);

    // ambil semua isi tabel ke dalam bentuk array 2 dimensi
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

echo "<pre>";
print_r(getTableProduk());
echo "<pre>";