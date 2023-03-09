<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $no_faktur=$_POST['no_faktur'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $jumlah=$_POST['jumlah'];
    $harga_satuan=$_POST['harga_satuan'];
    $harga_total=$_POST['harga_total'];

    $sql="INSERT INTO tb_penjualan(no_faktur,nama_konsumen,jumlah,harga_satuan,harga_total) VALUES ('$no_faktur','$nama_konsumen','$jumlah','$harga_satuan','$harga_total')";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampiltransaksi.php?status=sukses');
    }else{
        header('location:tampiltransaksi.php?status=gagal');
    }
}
?>