<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $nama_pelanggan= $_POST['nama_pelanggan'];
	$nama_produk	= $_POST['nama_produk'];
	$jenis_produk	= $_POST['jenis_produk'];
	$qty = $_POST['qty'];
  $status_pembayaran = $_POST['status_pembayaran'];
  $waktu_transaksi = $_POST['waktu_transaksi'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE transaksi SET ";
  $query .= "nama_pelanggan= '$nama_pelanggan', nama_produk = '$nama_produk', ";
  $query .= "jenis_produk='$jenis_produk', qty ='$qty', ";
  $query .= "status_pembayaran='$status_pembayaran', waktu_transaksi='$waktu_transaksi' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");


?>