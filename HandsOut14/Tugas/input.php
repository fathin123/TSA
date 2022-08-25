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
        <legend>Tambah Data Produk</legend>
          <p>
            <label for="nama_produk">Nama Produk : </label>
            <input type="text" name="nama_produk" id="nama_produk">
          </p>
          <p>
            <label for="harga_produk">Harga Produk : </label>
            <input type="text" name="harga_produk" id="harga_produk">
          </p>
          <p>
            <label for="merk_produk">Merk Produk : </label>
            <input type="text" name="merk_produk" id="merk_produk">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
