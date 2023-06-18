<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
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
    
        $id = $_POST['id_barang']; 
        $nama = $_POST['nama_barang'];
        $qty = $_POST['qty_barang'];
        $harga = $_POST['harga_satuan'];
    
        $sql = "UPDATE tbl_penjualan set id_barang='$id', nama_barang = '$nama', qty_barang='$qty', harga_satuan='$harga' where id_barang=$id";
        $hasil = mysqli_query($koneksi,$sql);

        if(!$hasil){
            echo "Update Data Gagal !!!";
        }else{
            echo "<div class='alert alert-success'><strong>Success! </strong> Update Data Mahasiswa Sukses
          </div><br>";
            echo "<div class='cntr'><a href='tampilan.php'><button type='button' class='btn btn-info'>Show Data</button></a></div>";
        }
    ?>
</body>
</html>
