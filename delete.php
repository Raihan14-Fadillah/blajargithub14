<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $hasil = mysqli_query($koneksi,"DELETE FROM tbl_penjualan WHERE id_barang=$id");

    if(!$hasil){
        header("Hapus Data Gagal ----");
    }else{
        header("Location: tampilan.php");
    }
?>

