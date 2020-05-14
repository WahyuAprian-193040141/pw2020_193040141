-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 03:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040141`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `hargabaru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `jenis`, `nama`, `deskripsi`, `hargabaru`) VALUES
(1, 'foto1.jpg', 'Televisi', 'Samsung 43 in. UA43NU7100', 'Full HD (1,920x1,080) <br>Wide Color Enhancer, Clean View', 5669000),
(2, 'foto2.jpg', 'Kulkas', 'LG Kulkas Side By Side 4 Pintu GR-X31FTMHL', 'Kulkas Side By Side 4 Pintu <br>InstaView Door-in-Door® <br>Inverter Linear Compressor <br>Sliding Drawer <br>Ice & Water Dispenser <br>Hygiene Fresh+ <br>Moist Balance Crisper <br>SmartThinQ <br>Kapasitas: 889L/716L', 55494000),
(3, 'foto3.jpg', 'Air Conditioner', 'LG DUALCOOL with Watt Control-Eco 0.5PK', 'Dual Inverter Compressor™ dengan Garansi 10 Tahun, Watt Control, Pendinginan Cepat, Tidak Bising', 3723000),
(4, 'foto4.jpg', 'Setrika', 'Philips Dry Iron GC160', 'Philips setrika kering GC160 yang memiliki ujung alas ramping, mampu mencapai bagian sulit dengan mudah. Dengan tekstur dan kontrol suhu yang mudah diatur mencapai tingkat suhu yang diinginkan. Dengan panjang kabel 1.8 meter, menjadikan anda lebih leluasa bergerak dan tidak perlu terpaku dekat dengan colokan. Tekstur pada gagang setrika ini memberikan kenyamanan Anda selama menyetrika, desainnya yang ergonomis dan pas ditangan serta tidak mudah terlepas meski tangan Anda berkeringat', 320000),
(5, 'foto5.jpg', 'Vacuum Cleaner', 'Baseus Vacuum Cleaner portable', 'Solusi untuk kebutuhan anda dalam membersihkan debu. Memiliki size yang mini, compact dan mudah untuk disimpan dimana saja. Memiliki satu tombol untuk dinyalakan dan daya hisap yang kuat. Memiliki 3 daya baterai, dapat digunakan 7 kali dalam satu kali bisa dicuci langsung dan memiliki tiga filter stainless steel.', 469000),
(6, 'foto6.jpg', 'Rice Cooker', 'Yong Ma YMC-801 / SMC-8017 Digital Rice Cooker', 'Mempunyai kapasitas 2.0 L / 11 orang, Sistem 3d Heating menghangatkan nasi lebih lama dan nasi tidak mudah basi dengan sistem warm 3D, Bisa masak nasi goreng, Fungsi alarm memberitahukan dengan bunyi alarm ketika proses memasak sudah selesai, memiliki 12 macam menu memasak yaitu, cake, soup, stew, bubur, kukus, beras merah.', 499000),
(7, 'foto7.jpg', 'Hand Mixer', 'Cosmos CM-1279 Hand Mixer', 'Cosmos Hand Mixer 5 speed level-CM-1279 merupakan hand mixer memiliki fitur 5 speed dan turbo knob yang terbuat dari bahan stainless steel, dengan daya listrik 80 hingga 200 watt, serta voltage sebesar 220V, hand mixer ini ideal untuk kebutuhan dapur Anda sehari-hari', 142000),
(8, 'foto8.jpg', 'Blender', 'Miyako BL-102PL Blender Plastik 1 L', 'Blender Miyako BL102PL membantu anda dalam mengolah bahan-bahan makanan yang Anda perlukan, menggiling bumbu masak pun menjadi lebih mudah dari seebelumnya, dengan hasil yang higienis akan menjaga kebersihan makanan Anda. Blender ini memiliki kapasitas 1 Liter serta motor berdaya 250W yang kuat dan tahan lama. Dengan kualifikasi food grade membuat bahan blender ini amana untuk makannan Anda. nikmati kemudahaan dalam menikmati makanan yang sehat dan menyegarkan', 309000),
(9, 'foto9.jpg', 'Mesin Cuci', 'Samsung Mesin Cuci Top Loading 7 kg WA70H4200SW/SE', 'Kapasitas : 7 KG, Panel display : Dual Cluster Control, Water level : 5 Levels, Drum type : Diamond Drum, Garansi 1 Tahun', 2189000),
(10, 'foto10.jpg', 'Kamera Mirorless', 'Sony A7 Mark III + Sony Lens 28-70mm', '24 MP Full-Frame Exmor R BSI CMOS Sensor, BIONZ X Image Processing & Front-End LSI, 693-Point Hybrid AF System, UHD 4k30p Video with HLG & S-Log3 Gammas <br> Dibedakan oleh desain sensornya yang diperbarui, Kamer Digital Mirrorless Alpha A7 III dari Sony adalah kamera menyeluruh yang cocok untuk aplikasi foto dan video dalam berbagai situasi kerja.', 29999000),
(11, 'foto11.jpg', 'Lensa Sony Full Frame', 'Sony FE 55mm F/1.8 ZA T* CARL ZEISS SONNAR', 'Sony E Mount Full-Frame Focal length 55mm, Image Stabilization No, Max aperture F/1.8 / Min aperture F22, Number of Diapraghm blades 9, Optics elements 7 & Groups 5, Special elements/coatings 3 aspherichal elements, Minimum focus 0.50 m (19.69), Maximum magnification 0.14', 9683000),
(12, 'foto12.jpg', 'Drone', 'DJI Mavic Pro Combo', 'Gimbal-Stabilized 12mp / 4K Camera, OcuSync Transmission Technology, Upto 4.3 Mile Control Range, Up to 27 Minutes Flight Time, GPS & Vision Position Based Navigation, Flight Autonomy with Obstacle Detection, DJI GO App-Based Control and Monitoring, Top Speed of 40 mph in Sport Mode, Active Track Subject Tracking Modes, Tap and Gesture Based Command', 14700000),
(33, 'foto13.jpg', 'Lampu Emergency', 'Surya Lampu Emergency SQL L1830x LED 18 SMD Rechargeable', 'Menggunakan batrei cas ulang lead-acid 4volt 1500mAh kapasitas besar. Menggunakan baterai yg awet, dapat dicas ulang lebih dari 500 kali. Menggunakan 18 SMD LED yg sangat terang, hemat energi dan tahan lama. Tahan Hingga 8 Jam Pemakaian Ideal digunakan saat listrik padam, berkemah atau saat diperjalanan Terdapat gantungan dibagian atas Rechargeable Produk Berkualitas &amp; Tahan Lama Desain Elegant  Mudah Dibawa Kemana Saja', 34900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
