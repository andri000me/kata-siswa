-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 12:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kata-siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id` int(11) NOT NULL,
  `idUnggahan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id`, `idUnggahan`, `nama`, `pesan`) VALUES
(2, 2, 'Ahmad Nuhisya', 'pertamax'),
(3, 1, 'Ahmad Nuhisya', 'keduax'),
(4, 1, 'Ahmad Nuhisya', 'ketigax'),
(9, 0, 'Ahmad Nuhisya', 'keempatx'),
(10, 2, 'Ahmad Nuhisya', 'tugas terooos materinya kagak'),
(11, 1, 'Ahmad Nuhisya', 'motivasi terooos materinya kagak'),
(12, 8, 'Ahmad Nuhisya', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa'),
(13, 14, 'Ahmad Nuhisya', 'asyik!!!, saya dapat gaji walaupun gak ngapa-ngapain'),
(14, 19, 'Ahmad Nuhisya', 'bapak santuy'),
(15, 20, 'Ahmad Nuhisya', 'mari'),
(16, 19, 'Ahmad Nuhisya', 'iya, pak'),
(17, 21, 'Ahmad Nuhisya', 'hyumimu'),
(18, 21, 'Ahmad Nuhisya', 'mjugtg5'),
(19, 23, 'Ahmad Nuhisya', 'jajajaja'),
(20, 14, 'Ahmad Nuhisya', 'aaaa'),
(21, 24, 'Ahmad Nuhisya', 'sadasdasdad'),
(22, 25, 'Ahmad Nuhisya', 'ini komen'),
(23, 26, 'Ahmad Nuhisya', 'diskusi'),
(24, 30, 'Ahmad Nuhisya', 'aaa'),
(25, 29, 'Ahmad Nuhisya', 'tes'),
(26, 28, 'Ahmad Nuhisya', 'test'),
(27, 27, 'Ahmad Nuhisya', 'test'),
(28, 32, 'Ahmad Nuhisya', 'bbb'),
(29, 39, 'Ahmad Nuhisya', 'hhh'),
(30, 39, 'Ahmad Nuhisya', 'hhhh'),
(31, 39, 'Ahmad Nuhisya', 'hhhhh'),
(32, 38, 'Ahmad Nuhisya', 'ggg'),
(33, 38, 'Ahmad Nuhisya', 'gggg'),
(34, 37, 'Ahmad Nuhisya', 'fff'),
(35, 37, 'Ahmad Nuhisya', 'ffff'),
(36, 37, 'Ahmad Nuhisya', 'fffff'),
(37, 36, 'Ahmad Nuhisya', 'eeee'),
(38, 36, 'Ahmad Nuhisya', 'eeee'),
(39, 36, 'Ahmad Nuhisya', 'eeeee'),
(40, 47, 'Ilham Trsitadika S', 'ngopo yo'),
(41, 48, 'Nur Cahyo Putro', 'ra wedi'),
(42, 48, 'Nur Cahyo Putro', 'opo'),
(43, 46, 'Ilham Trsitadika S', 'aku yo ilham'),
(44, 48, 'admin', 'titenono le tak parani omahmu'),
(45, 2, 'admin', 'waalaikumsalam'),
(46, 49, 'Nur Cahyo Putro', 'tak tau dan tak nak tau yang ipin tau, ayam goreng sedap dimakan nyam nyam nyam nyam nyam');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_siswa`
--

CREATE TABLE `pesan_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pesan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_siswa`
--

INSERT INTO `pesan_siswa` (`id`, `nama`, `kategori`, `pesan`) VALUES
(1, 'admin', 'Kritik & Saran', 'tes'),
(2, 'admin', 'Kritik & Saran', 'tes lagi'),
(3, 'admin', 'Lapor', 'nyobo lapor'),
(4, 'Ilham Trsitadika S', 'Lapor', 'pak, cahyo nakal'),
(5, 'Narendra Hidayah', 'Kritik & Saran', 'test'),
(6, 'Narendra Hidayah', 'Kritik & Saran', 'tes'),
(7, 'Narendra Hidayah', 'Kritik & Saran', 'coba'),
(8, 'Narendra Hidayah', 'Kritik & Saran', 'coba lagi'),
(9, 'Narendra Hidayah', 'Kritik & Saran', 'masih narendra'),
(10, 'Narendra Hidayah', 'Kritik & Saran', 'terus mencoba'),
(11, 'Narendra Hidayah', 'Kritik & Saran', 'cek'),
(12, 'Narendra Hidayah', 'Kritik & Saran', 'check'),
(13, 'Narendra Hidayah', 'Kritik & Saran', 'tes'),
(14, 'Narendra Hidayah', 'Lapor', 'saya lapor');

-- --------------------------------------------------------

--
-- Table structure for table `unggahan`
--

CREATE TABLE `unggahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(200) NOT NULL,
  `teks` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unggahan`
--

INSERT INTO `unggahan` (`id`, `nama`, `tanggal`, `judul`, `teks`) VALUES
(2, 'Ahmad Nuhisya', '2019-09-21', '', 'Assalamualikum, ini unggahan pertama dari saya.'),
(3, 'Ahmad Nuhisya', '2019-09-21', '', 'Ashiaaap!'),
(4, 'Ahmad Nuhisya', '2019-09-21', '', 'Naniii!!!!!'),
(5, 'Ahmad Nuhisya', '2019-09-21', '', 'Nyobo neh ahh!'),
(6, 'Ahmad Nuhisya', '2019-09-21', '', 'Nyobo t3rooos!!!'),
(7, 'Ahmad Nuhisya', '2019-09-21', '', 'Nyobo t3rooos!!!'),
(8, 'Ahmad Nuhisya', '2019-09-22', '', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.\r\nIn porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.\r\nDonec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.\r\nPellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper, ante vitae sollicitudin posuere, metus quam iaculis nibh, vitae scelerisque nunc massa eget pede. Sed velit urna, interdum vel, ultricies vel, faucibus at, quam. Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi.\r\nIn in nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Donec ullamcorper fringilla eros. Fusce in sapien eu purus dapibus commodo. Cum sociis natoque penatibus e'),
(13, 'Ahmad Nuhisya', '2019-09-22', '', 'Kalo ndak sulit bukan tugas nooo!'),
(14, 'Ahmad Nuhisya', '2019-09-22', '', 'Nanti dipelajari sendiri ya!'),
(17, 'Ahmad Nuhisya', '2019-09-22', '', 'saya juga belum terlalu paham, nanti bisa dicari di internet kalo nggak baca modul'),
(18, 'Ahmad Nuhisya', '2019-09-22', '', 'hidup S A N T U Y dengan menjadi PNS dan ngasih tugas setiap hari.'),
(19, 'Ahmad Nuhisya', '2019-09-23', '', 'nanati dipelaari sendiri'),
(20, 'Ahmad Nuhisya', '2019-09-23', '', 'mari diskusi'),
(21, 'Ahmad Nuhisya', '2019-09-24', '', 'Nanti ke perpus, saya tak pergi dulu'),
(22, 'Ahmad Nuhisya', '2019-09-24', '', 'aedewew'),
(23, 'Ahmad Nuhisya', '2019-09-24', '', 'jajajajajaj'),
(24, 'Ahmad Nuhisya', '2019-09-27', '', 'skjdakjdkajsd'),
(25, 'Ahmad Nuhisya', '2019-09-27', 'ini judul', 'ini teks'),
(26, 'Ahmad Nuhisya', '2019-09-27', 'INI ADALAH JUDUL', 'ini adalah teks'),
(27, 'Ahmad Nuhisya', '2019-09-27', 'anyar', 'anyar\r\n'),
(28, 'Ahmad Nuhisya', '2019-09-27', 'test', 'test'),
(29, 'Ahmad Nuhisya', '2019-09-27', 'tes', 'tes'),
(30, 'Ahmad Nuhisya', '2019-09-27', 'aaa', 'aaa'),
(31, 'Ahmad Nuhisya', '2019-09-27', 'bbb', 'bbb'),
(32, 'Ahmad Nuhisya', '2019-09-27', 'bbb', 'bbb'),
(33, 'Ahmad Nuhisya', '2019-09-27', 'judul', 'tulis sesuatu!'),
(34, 'Ahmad Nuhisya', '2019-09-27', 'ccc', 'ccc'),
(35, 'Ahmad Nuhisya', '2019-09-27', 'ddd', 'ddd'),
(36, 'Ahmad Nuhisya', '2019-09-27', 'eee', 'eee'),
(37, 'Ahmad Nuhisya', '2019-09-27', 'fff', 'fff'),
(38, 'Ahmad Nuhisya', '2019-09-27', 'ggg', 'ggg'),
(39, 'Ahmad Nuhisya', '2019-09-27', 'hhh', 'hhh'),
(40, 'Ahmad Nuhisya', '2019-09-27', 'ini adalah judul yang panjang sekali pake banget d', 'dahlah'),
(41, 'Ahmad Nuhisya', '2019-09-27', 'panjang panjang panjang panjang panjang panjang', 'sedikit'),
(42, 'Ahmad Nuhisya', '2019-09-27', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce pos', 'dah lah'),
(43, 'Ahmad Nuhisya', '2019-09-27', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce pos', '1 jam bingung meh ngekei jeneng'),
(44, 'Ahmad Nuhisya', '2019-09-27', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis ', 'bingung neh'),
(45, 'Muhammad Alwan A', '2019-09-28', 'jenengku wes bedo', 'oa oe oa oe'),
(46, 'Ilham Trsitadika S', '2019-09-28', 'aku ilham', 'masih ilham'),
(47, 'Nur Cahyo Putro', '2019-09-28', 'berubah menjadi cahyo', 'dah lah'),
(48, 'admin', '2019-09-30', 'aku admin', 'jo macem-macem'),
(49, 'admin', '2019-10-07', 'Korang tau tak ape bezenye ayam kaco dengan ayam kampong', ''),
(50, 'Muhammad Bintang A', '2019-10-09', 'sebat gan', ''),
(51, 'Bima Satria E', '2019-10-09', 'tes', ''),
(52, 'Narendra Hidayah', '2019-10-09', 'seto ndi?', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nis`, `nama`, `gambar`, `password`) VALUES
(12, '999999999', 'admin', 'logo-cc.gif', '21232f297a57a5a743894a0e4a801fc3'),
(14, '18.007683', 'Ilham Trsitadika S', 'CCompiler_Logo_256x256px4.png', 'b63d204bf086017e34d8bd27ab969f28'),
(15, '18.007694', 'Nur Cahyo Putro', 'default.png', 'd0fb963ff976f9c37fc81fe03c21ea7b'),
(16, '18.007688', 'Muhammad Alwan A', 'MinGW1.png', '5a1d365841386335862599302dedb9a1'),
(17, '18.007691', 'Narendra Hidayah', 'icon_Shopee2.png', 'd07076fc73210d878b335fb92c230ae3'),
(18, '18.007676', 'Bima Satria E', 'default.png', '7fcba392d4dcca33791a44cd892b2112'),
(19, '18.007689', 'Muhammad Bintang A', 'default.png', 'da819c4354bda60065199725e6f48328'),
(20, '18.007677', 'Bintang Kusuma I', 'default.png', 'baecd9261ee45efd0d11c7fb9ca936af'),
(21, '18.007693', 'Nouval Algi M', 'default.png', '6efc67e68005e7503df580d11e5e7a23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_siswa`
--
ALTER TABLE `pesan_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unggahan`
--
ALTER TABLE `unggahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pesan_siswa`
--
ALTER TABLE `pesan_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `unggahan`
--
ALTER TABLE `unggahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
