<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nama_produk = $_POST['nama_produk'];
  $harga_produk = $_POST['harga_produk'];
  $merk_produk = $_POST['merk_produk'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO produk VALUES (NULL, '$nama_produk', '$harga_produk', '$merk_produk')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>
