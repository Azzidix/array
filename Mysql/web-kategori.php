<?php
include_once 'koneksi.php';
if(isset($_GET['cari'])) {

	$kategori = $_GET['kategori'];
	$sql = "SELECT b.id_barang, b.harga, b.deskripsi, b.merek, k.kategori FROM barang b, kategori k WHERE b.id_kategori = k.id_kategori AND k.kategori = '$kategori'";
	$result = mysqli_query($con,$sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
					<td>".$row['id_barang']."</td>
					<td>".$row['kategori']."</td>
					<td>".$row['merek']."</td>
					<td>".$row['deskripsi']."</td>
					<td>".$row['harga']."</td>
				<tr>";
		}
	} else {
		echo "<tr class=text-center>
				<td colspan=5>Kategori Tidak Ada!</td>
				</tr>";
	}

} else {
	$sql = "SELECT b.id_barang, b.harga, b.deskripsi, b.merek, k.kategori FROM barang b, kategori k WHERE b.id_kategori = k.id_kategori";
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
}

?>