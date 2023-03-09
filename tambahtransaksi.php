<html>
    <head>
</haed>
<body>
    <h1>APLIKASI TRANSAKSI</h1>
    <form action="prosestransaksi.php" method=POST>
        <form>
            <fieldset>
                <p>
                    <label for="no_faktur">No Faktur </label>
                    <input type="text" name="no_faktur" />
               </p>
               <p>
                    <label for="nama_konsumen">Nama Konsumen</label>
                    <input type="text" name="nama_konsumen" />
               </p>
               <p>
                    <label for="jumlah">Jumlah </label>
                    <input type="text" name="jumlah" />
               </p>
               <p>
                    <label for="harga_satuan">Harga Satuan </label>
                    <input type="text" name="harga_satuan" />
               </p>
               <p>
                    <label for="harga_total">Harga Total </label>
                    <input type="text" name="harga_total" />
               </p>
              
               <p>
                    <input type="submit" name="tambah" value="tambah" />
               </p>
</fieldset>
</form>
</body>
</html>