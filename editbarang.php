<?php
include("koneksi.php");
if(!isset($_GET['id_barang'])){
    header("location:tampilbarang.php?");
}
$id=$_GET['id_barang'];
$sql="SELECT * FROM tb_master where id_barang='$id'";
$query=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($query);
?>
<html>
    <head>
</haed>
<body>
    <h1>EDIT BARANG</h1>
    <form action="proseseditbarang.php" method="POST">
        <a href="tampilbarang.php"><input type="button"value="kembali"></a>
        <form>
            <fieldset>
                
               <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']?>"/>

              <p>
                      <label for="nama_barang">Nama Barang </label>
                      <input type="text" name="nama_barang"  value="<?php echo $row ['nama_barang']?>"/>
                 </p>

                 <p>
                      <label for="harga_jual">Harga Jual </label>
                      <input type="text" name="harga_jual"  value="<?php echo $row ['harga_jual']?>"/>
                 </p>

                 <p>
                      <label for="harga_beli">Harga Beli </label>
                      <input type="text" name="harga_beli"  value="<?php echo $row ['harga_beli']?>"/>
                 </p>

                 <p>
                      <label for="satuan">Satuan </label>
                      <input type="text" name="satuan"  value="<?php echo $row ['satuan']?>"/>
                 </p>

                 <p>
                      <label for="kategori">Kategori</label>
                      <input type="text" name="kategori"  value="<?php echo $row ['kategori']?>"/>
                 </p>

               <p>
                    <input type="submit" name="edit" value="edit" />
               </p>

</fieldset>
</form>
</body>
</html>