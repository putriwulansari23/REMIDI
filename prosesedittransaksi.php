<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id_penjualan'];
    $no_faktur=$_POST['no_faktur'];
    $nama_konsumen=$_POST['nama_konsumen'];
    $jumlah=$_POST['jumlah'];
    $harga_satuan=$_POST['harga_satuan'];
    $harga_total=$_POST['harga_total'];
   
    $sql="UPDATE tb_penjualan SET no_faktur='$no_faktur', nama_konsumen='$nama_konsumen', jumlah='$jumlah', harga_satuan='$harga_satuan', harga_total='$harga_total' WHERE id_penjualan='$id'";
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampiltransaksi.php');
    }else{
        die('gagal mengedit');
    }
}
?>