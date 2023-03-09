<html>
    <head>
</haed>
<body>
    <h1>APLIKASI BARANG</h1>
    <form action="prosesbarang.php" method=POST>
        <form>
            <fieldset>
            <p>
                    <label for="nama_barang">Nama Barang </label>
                    <input type="text" name="nama_barang" />
               </p>
               <p>
                    <label for="harga_jual">Harga Jual </label>
                    <input type="text" name="harga_jual" />
               </p>
               <p>
                    <label for="harga_beli">Harga Beli </label>
                    <input type="text" name="harga_beli" />
               </p>
               <p>
                    <label for="satuan">Satuan </label>
                    <input type="text" name="satuan" />
               </p>
               <p>
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" />
               </p>
              
               <p>
                    <input type="submit" name="tambah" value="tambah" />
               </p>
</fieldset>
</form>
</body>
</html>