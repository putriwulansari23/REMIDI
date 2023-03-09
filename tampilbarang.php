<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h2>Data Barang</h2>
    <h4><a href="tambahbarang.php">Tambah</a></h4>
    <table border ="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Satuan</th>
            <th>Kategori</th>
            <th>Aksi</th>

       </tr>

<?php
include("koneksi.php");
$sql="SELECT * FROM tb_master";
$query=mysqli_query($koneksi,$sql);

while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['id_barang']."</td>";
    echo"<td>".$row['nama_barang']."</td>";
    echo"<td>".$row['harga_jual']."</td>";
    echo"<td>".$row['satuan']."</td>";
    echo"<td>".$row['kategori']."</td>";
    echo"<td>";
    echo"<a href='editbarang.php?id_barang=".$row['id_barang']."'>Edit</a>||";
    echo"<a href='hapusbarang.php?id_barang=".$row['id_barang']."'>Hapus</a>||";
    echo"</td>";
    echo"</tr>";
}
?>