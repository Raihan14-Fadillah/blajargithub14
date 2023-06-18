<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Penjualan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data PENJUALAN</h2>
  <p>Nama : Raihan Fadillah</p>
  <p>NIM : 210411100003</p>
  <p>Kelas : Pengembangan Aplikasi Web C</p>
  <a href="formtambah.php"><button type="submit" class="btn btn-secondary">TAMBAH</button></a>   
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>QTY</th>
        <th>Harga Satuan</th>
        <th>Sub Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php';
      $sql = 'SELECT * FROM tbl_penjualan';
      $hasil = mysqli_query($koneksi,$sql);
      
      while($baris = mysqli_fetch_assoc($hasil)){
      ?>
        <tr>
          <td><?=$baris['id_barang'];?></td>
          <td><?=$baris['nama_barang'];?></td>
          <td><?=$baris['qty_barang'];?></td>
          <td><?=$baris['harga_satuan'];?></td>
          <td><?=$baris['qty_barang']*$baris['harga_satuan'];?></td>
          <td><a href="formedit.php?id=<?=$baris['id_barang']?>"><button type="button" class="btn btn-success">Edit</button></a>
          <a href="delete.php?id=<?=$baris['id_barang']?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
        </tr>
      <?php 
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
