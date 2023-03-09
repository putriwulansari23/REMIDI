<?php
include("koneksi.php");
?>
<html>
    <head>
</head>
<body>
    <h2>Data Transaksi</h2>
    <h4><a href="tambahtransaksi.php">Tambah</a></h4>
    <table border ="1">
        <tr>
            <th>No Faktur</th>
            <th>Nama Konsumen</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Harga Total</th>
            <th>Aksi</th>

       </tr>

<?php
include("koneksi.php");
$sql="SELECT * FROM tb_penjualan";
$query=mysqli_query($koneksi,$sql);

while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['id_penjualan']."</td>";
    echo"<td>".$row['no_faktur']."</td>";
    echo"<td>".$row['nama_konsumen']."</td>";
    echo"<td>".$row['jumlah']."</td>";
    echo"<td>".$row['harga_satuan']."</td>";
    echo"<td>".$row['harga_total']."</td>";
    echo"<td>";
    echo"<a href='edittransaksi.php?id_penjualan=".$row['id_penjualan']."'>Edit</a>||";
    echo"<a href='hapustransaksi.php?id_penjualan=".$row['id_penjualan']."'>Hapus</a>||";

    echo"</td>";
    echo"</tr>";
}
?>