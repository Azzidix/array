<?php 
include_once 'web.php';

foreach ($barang as $bar) 
{
		if($bar['id_kategori'] == $kategori[0]['id_kategori']) 
		{
			echo 'kategori : '.$kategori[0]['kategori'].' | Merek : '.$bar['merek'].' | Deskripsi: '.$bar['deskripsi'].' | Harga : '.$bar['harga'].'<br>';
		} 
		elseif($bar['id_kategori'] == $kategori[1]['id_kategori']) 
		{
			echo 'kategori : '.$kategori[1]['kategori'].' | Merek : '.$bar['merek'].' | Deskripsi: '.$bar['deskripsi'].' | Harga : '.$bar['harga'].'<br>';
		} 
		elseif($bar['id_kategori'] == $kategori[2]['id_kategori']) 
		{
			echo 'kategori : '.$kategori[2]['kategori'].' | Merek : '.$bar['merek'].' | Deskripsi: '.$bar['deskripsi'].' | Harga : '.$bar['harga'].'<br>';
		}
}