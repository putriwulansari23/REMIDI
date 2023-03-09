<?php
include("koneksi.php");
$id=$_GET['id_penjualan'];

$sql="DELETE FROM tb_penjualan where id_penjualan='$id'";
$query=mysqli_query($koneksi,$sql);

if($query){
    header('location:tampiltransaksi.php?status=sukses');
}else{
    die('akses dilarang');
}
?>