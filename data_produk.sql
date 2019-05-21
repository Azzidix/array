-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table data_produk.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `merek` char(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  KEY `Index 1` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table data_produk.barang: ~8 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
REPLACE INTO `barang` (`id_barang`, `id_kategori`, `merek`, `deskripsi`, `harga`) VALUES
	(1, 3, 'Eiger', 'Sepatu Gunung Ukuran 41-43', 230000),
	(2, 3, 'Egier', 'Sepatu Gunung Ukuran 38-40', 210000),
	(3, 3, 'Adidas', 'Sepatu Badminton', 214000),
	(4, 3, 'result', 'Sepatu Bola Dewasa', 350000),
	(5, 1, 'Egier', 'Tas Carier 200 Liter', 550000),
	(6, 1, 'Egier', 'Daypack 150 Liter', 250000),
	(7, 1, 'Polo', 'Tas Laptop', 255000),
	(8, 2, 'Alisan', 'Standar Kemeja Resmi', 120000),
	(9, 2, 'Antum', 'Baju Taqwa Polos Putih', 150000);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table data_produk.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` char(50) DEFAULT NULL,
  KEY `Index 1` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table data_produk.kategori: ~3 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
REPLACE INTO `kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'Tas'),
	(2, 'Baju'),
	(3, 'Sepatu');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
