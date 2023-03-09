<?php
include("koneksi.php");
$id=$_GET['id_barang'];

$sql="DELETE FROM tb_master where id_barang='$id'";
$query=mysqli_query($koneksi,$sql);

if($query){
    header('location:tampilbarang.php?status=sukses');
}else{
    die('akses dilarang');
}
?>