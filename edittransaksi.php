<?php
include("koneksi.php");
if(!isset($_GET['id_penjualan'])){
    header("location:tampiltransaksi.php?");
}
$id=$_GET['id_penjualan'];
$sql="SELECT * FROM tb_penjualan where id_penjualan='$id'";
$query=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($query);
?>
<html>
    <head>
</haed>
<body>
    <h1>EDIT transaksi</h1>
    <form action="prosesedittransaksi.php" method="POST">
        <a href="tampiltransaksi.php"><input type="button"value="kembali"></a>
        <form>
        <input type="hidden" name="id_penjualan" value="<?php echo $row['id_penjualan']?>"/>

<p>
     <label for="no_faktur">No Faktur </label>
     <input type="text" name="no_faktur" value="<?php echo $row['no_faktur']?>"/>
</p>
<p>
     <label for="nama_konsumen">Nama Konsumen</label>
     <input type="text" name="nama_konsumen" value="<?php echo $row['nama_konsumen']?>"/>
</p>
<p>
     <label for="jumlah">Jumlah </label>
     <input type="text" name="jumlah" value="<?php echo $row['jumlah']?>"/>
</p>
<p>
     <label for="harga_satuan">Harga Satuan </label>
     <input type="text" name="harga_satuan" value="<?php echo $row['harga_satuan']?>"/> 
</p>
<p>
     <label for="harga_total">Harga Total </label>
     <input type="text" name="harga_total" value="<?php echo $row['harga_total']?>"/>
</p>
   <p>
     <input type="submit" name="edit" value="edit" />
</p>
</fieldset>
</form>
</body>
</html>