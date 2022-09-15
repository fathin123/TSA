<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nama_pelanggan = $_POST['nama_pelanggan'];
  $nama_produk = $_POST['nama_produk'];
  $jenis_produk = $_POST['jenis_produk'];
  $qty = $_POST['qty'];
  $status_pembayaran = $_POST['status_pembayaran'];
  $waktu_transaksi = $_POST['waktu_transaksi'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO transaksi VALUES ('$id', '$nama_pelanggan', '$nama_produk', '$jenis_produk', '$qty','$status_pembayaran','$waktu_transaksi')";
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
