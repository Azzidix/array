<?php 
include_once 'web.php';

foreach ($barang as $bar) 
{
		if($bar['id_kategori'] == $kategori[0]['id_kategori']) 
		{
			$diskon = 10;
			$harga = $bar['harga'];
			$potongan = ($harga * $diskon) / 100;
			$total = $harga - $potongan;
			echo 'kategori : '.$kategori[0]['kategori'].' | Merek : '.$bar['merek'].' | Deskripsi: '.$bar['deskripsi'].' | Harga : Rp.'.$bar['harga'].' | Diskon : 10% = Rp.'.$total.'<br>';
		} 
		elseif($bar['id_kategori'] == $kategori[2]['id_kategori']) 
		{
			$diskon = 10;
			$harga = $bar['harga'];
			$potongan = ($harga * $diskon) / 100;
			$total = $harga - $potongan;
			echo 'kategori : '.$kategori[2]['kategori'].' | Merek : '.$bar['merek'].' | Deskripsi: '.$bar['deskripsi'].' | Harga : Rp.'.$bar['harga'].' | Diskon : 10% = Rp.'.$total.'<br>';
		}
}