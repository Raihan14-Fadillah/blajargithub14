<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .cntr{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class='cntr'>
            <h1>Form Tambah Data Penjualan</h1>
        </div>
        <p>Isi data dengan benar</p>
        <form action="prosestambah.php" method="POST">
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan ID Penjualan" name="id">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Nama Barang" name="nama">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Qty Barang" name="qty">    
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Masukan Harga Satuan" name="harga">    
            </div>
            </div>
            <br>
            <div class="cntr">
            <button type="submit" class="btn btn-secondary">TAMBAH</button> 
            <input type="reset" class="btn btn-dark" name="reset" value="RESET">
            </div>
        </form>
    </div>
</body>
</html>
