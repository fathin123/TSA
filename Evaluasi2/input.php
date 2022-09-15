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
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_pasien" action="input_proses.php" method="post">
        <fieldset>
        <legend>Tambah Data Transaksi</legend>
          <p>
            <label for="nama">Nama Pelanggan : </label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan">
          </p>
          <p>
            <label for="nama">Nama Produk : </label>
            <input type="text" name="nama_produk" id="nama_produk">
          </p>
          <p>
            <label for="nama">Jenis Produk : </label>
            <input type="text" name="jenis_produk" id="jenis_produk">
          </p>
          <p>
            <label for="nama">Qty : </label>
            <input type="text" name="qty" id="qty">
          </p>
          <p>
            <label for="nama">Status Pembayaran : </label>
            <input type="text" name="status_pembayaran" id="satus_pembayaran">
          </p>
          <p>
            <label for="nama">Waktu Transaksi : </label>
            <input type="date" name="waktu_transaksi" id="waktu_transaksi">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
