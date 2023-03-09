<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_barang=$_POST['nama_barang'];
    $harga_jual=$_POST['harga_jual'];
    $harga_beli=$_POST['harga_beli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];

    $sql="INSERT INTO tb_master(nama_barang,harga_jual,harga_beli,satuan,kategori) VALUES ('$nama_barang','$harga_jual','$harga_beli','$satuan','$kategori')";
    $query=mysqli_query($koneksi,$sql);


    if($query){
        header('location:tampilbarang.php?status=sukses');
    }else{
        header('location:tampilbarang.php?status=gagal');
    }
}
?>