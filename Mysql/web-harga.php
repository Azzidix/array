<?php
include_once 'koneksi.php';
$sql = "SELECT barang.id_barang, barang.harga, barang.deskripsi, barang.merek, kategori.kategori FROM barang, kategori WHERE barang.id_kategori = kategori.id_kategori AND barang.harga >= 200000";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
		<td>".$row['id_barang']."</td>
		<td>".$row['kategori']."</td>
		<td>".$row['merek']."</td>
		<td>".$row['deskripsi']."</td>
		<td>".$row['harga']."</td>
	<tr>";
}
?>
