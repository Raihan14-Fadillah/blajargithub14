<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .cntr{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id=$_GET['id'];
        $sql="SELECT * FROM tbl_penjualan WHERE id_barang=$id";
        $hasil=mysqli_query($koneksi,$sql);
        if (!$hasil){
            echo "Query Salah";
        }
    ?>
    <div class="container mt-3">
        <div class='cntr'>
            <h1>Form Edit Data Penjualan</h1>
        </div>
        <p>Isi data dengan benar</p>
        <?php
        while($baris = mysqli_fetch_array($hasil)){
        ?>
        <form action="prosesedit.php" method="POST">
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" readonly name="id_barang" value="<?php echo $baris['id_barang']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Nama Barang" name="nama_barang" value="<?php echo $baris['nama_barang']?>">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan QTY barang" name="qty_barang" value="<?php echo $baris['qty_barang']?>">    
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Harga Satuan" name="harga_satuan" value="<?php echo $baris['harga_satuan']?>">    
            </div>
            </div>
            <br>
            <div class="cntr">
            <button type="submit" class="btn btn-secondary">UPDATE</button> 
            <input type="reset" class="btn btn-dark" name="reset" value="RESET">
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>