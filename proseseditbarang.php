<?php
include("koneksi.php");
if(isset($_POST['edit'])){
$id=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$harga_jual=$_POST['harga_jual'];
$harga_beli=$_POST['harga_beli'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];


$sql="UPDATE tb_master SET nama_barang='$nama_barang', harga_jual='$harga_jual',harga_beli='$harga_beli', satuan='$satuan', kategori='$kategori' WHERE id_barang='$id'";
$query=mysqli_query($koneksi,$sql);

if($query){
     header('location:tampilbarang.php');
 }else{
     die('gagal mengedit');
 }
}
 ?>