<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include 'koneksi.php';
    
        $id = $_POST['id']; 
        $nama = $_POST['nama'];
        $qty = $_POST['qty'];
        $harga = $_POST['harga'];
    
        $sqlinsert = "INSERT INTO tbl_penjualan VALUE('$id','$nama','$qty','$harga')";
        $hasilinsert = mysqli_query($koneksi,$sqlinsert);

        if(!$hasilinsert){
            echo "Data Gagal Dimasukan";
        }else{
            echo "<div class='alert alert-success'><strong>Success! </strong> Data Sukses Dimasukan
          </div><br>";
            echo "<div class='cntr'><a href='tampilan.php'><button type='button' class='btn btn-info'>Show Data</button></a></div>";
        }
    ?>
</body>
</html>
