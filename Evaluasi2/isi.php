<div class="card-body">
    <a href="input.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH TRANSAKSI</a>
    <table class="table table-bordered" id="myTable">
        <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Qty</th>
        <th>Status Pembayaran</th>
        <th>Waktu Pembayaran</th>
        <th>Aksi</th>
      </tr>

      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nomor
      $query = "SELECT * FROM transaksi ORDER BY nama_pelanggan ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data pasien
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nama_pelanggan]</td>"; //menampilkan data nama
        echo "<td>$data[nama_produk]</td>"; //menampilkan data alamat
        echo "<td>$data[jenis_produk]</td>"; //menampilkan data usia
        echo "<td>$data[qty]</td>"; //menampilkan data kamar
        echo "<td>$data[status_pembayaran]</td>"; //menampilkan data checkin
        echo "<td>$data[waktu_transaksi]</td>"; //menampilkan data checkout
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?id='.$data['id'].'" class="btn btn-sm btn-primary">Edit</a>
          <a href="hapus.php?id='.$data['id'].'" class="btn btn-sm btn-danger">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
</div>
