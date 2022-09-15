<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data contoh dari database yang mempunyai id=$id
    $query = "SELECT * FROM transaksi WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $nama_pelanggan = $data["nama_pelanggan"];
    $nama_produk = $data["nama_produk"];
    $jenis_produk = $data["jenis_produk"];
    $qty = $data["qty"];
    $status_pembayaran = $data["status_pembayaran"];
    $waktu_transaksi = $data["waktu_transaksi"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_pasien" action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Pasien</legend>
          <p>
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="<?php echo $nama_pelanggan ?>">
          </p>
          <p>
            <label for="nama">Nama Produk : </label>
            <input type="text" name="nama_produk" id="nama_produk" placeholder="<?php echo $nama_produk ?>">
          </p>
          <p>
            <label for="nama">Jenis Produk : </label>
            <input type="text" name="jenis_produk" id="jenis_produk" placeholder="<?php echo $jenis_produk ?>">
          </p>
          <p>
            <label for="nama">Qty : </label>
            <input type="text" name="qty" id="qty" placeholder="<?php echo $qty ?>">
          </p>
          <p>
            <label for="nama">Status Pembayaran : </label>
            <input type="text" name="status_pembayaran" id="status_pembayaran" placeholder="<?php echo $status_pembayaran ?>">
          </p>
          <p>
            <label for="nama">Waktu Pembayaran : </label>
            <input type="date" name="waktu_transaksi" id="waktu_transaksi" placeholder="<?php echo $waktu_transaksi ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>
