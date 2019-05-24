<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>UAS - HOME</title>
	<link rel="stylesheet" href="../bootstrap-4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="index.php" class="nav-link ">Kategori</a>
			</li>
			<li class="nav-item">
				<a href="index2.php" class="nav-link ">Harga</a>
			</li>
			<li class="nav-item">
				<a href="index3.php" class="nav-link active">Diskon</a>
			</li>
		</ul>
		</div>
		<div class="kategori">
			<div class="title text-center">
				<h2>Diskon</h2>	
			</div>
			<table class="table table-striped table-inverse table-hover">
				<thead>
					<tr>
						<th>ID_Produk</th>
						<th>Kategori</th>
						<th>Merek</th>
						<th>Deskripsi</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php include 'web-diskon.php'; ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script src="../bootstrap-4.3.1/jquery.min.js"></script>
	<script src="../bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>