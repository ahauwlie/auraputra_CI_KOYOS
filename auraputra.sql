-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2020 at 07:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auraputra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_adm` varchar(100) NOT NULL,
  `foto_adm` varchar(255) DEFAULT NULL,
  `moto_adm` varchar(255) NOT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `password`, `nama_adm`, `foto_adm`, `moto_adm`, `whatsapp`, `instagram`, `facebook`, `twitter`, `youtube`, `active`) VALUES
(2, 'ahauwlie@gmail.com', '$2y$10$cSqB1F1.IRlhwh5cSpNUku16Q8R6jXhQHiFrm.VNhYBXmm8YpEdpm', 'ahauwlie', 'http://localhost/auraputra_CI_KOYOS/inti/img/upload/11.JPG', 'mau nyoba dulu nihh', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(2) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `tanggal_blog` date NOT NULL,
  `isi_blog` text NOT NULL,
  `kategori_blog` varchar(50) NOT NULL,
  `quotes_blog` varchar(255) DEFAULT NULL,
  `quotes_author_blog` varchar(50) DEFAULT NULL,
  `img_1_blog` varchar(255) DEFAULT NULL,
  `img_2_blog` varchar(255) DEFAULT NULL,
  `img_3_blog` varchar(255) DEFAULT NULL,
  `img_4_blog` varchar(255) DEFAULT NULL,
  `id_adm` int(2) NOT NULL,
  `NULL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `tanggal_blog`, `isi_blog`, `kategori_blog`, `quotes_blog`, `quotes_author_blog`, `img_1_blog`, `img_2_blog`, `img_3_blog`, `img_4_blog`, `id_adm`, `NULL`) VALUES
(1, 'home', '2020-06-30', '&lt;p&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&quot;&gt;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&quot;&gt;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&quot;&gt;https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg&lt;/a&gt;&lt;br&gt;&lt;/p&gt;', 'home', '12', '12', 'https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg', 'https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg', 'https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg', 'https://www.tehsariwangi.com/uploads/ar/article/283/3dc739bbeca9c8fbe33d2ca9dd8346a3.jpg', 2, 0),
(2, 'barang codeigniter', '2020-06-30', '&lt;p&gt;barang codeigniter&lt;br&gt;&lt;/p&gt;', 'barang codeigniter', 'barang codeigniterbarang codeigniterbarang codeigniterbarang codeignitervbarang codeignitervbarang codeigniter', 'barang', 'https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg', 'https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg', 'https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg', 'https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg', 2, 0),
(3, 'leleterbang', '2020-06-30', '&lt;p&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&quot;&gt;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&quot;&gt;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&quot;&gt;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&quot;&gt;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&quot;&gt;https://kissfmmedan.com/wp-content/uploads/2017/09/anak-kecil-lucu-bergaya-ala-korea-696x464.jpg&lt;/a&gt;&lt;img alt=&quot;&quot; src=&quot;https://doktersehat.com/wp-content/uploads/2017/06/manfaat-puasa-bagi-anak-doktersehat.jpg&quot;&gt;&lt;br&gt;&lt;/p&gt;', 'kokokok', '', '', 'https://cdn-cas.orami.co.id/parenting/images/bukan-artis-tapi-xx-anak-ini-jad.original.jpegquality-90.jpg', 'https://cdn-cas.orami.co.id/parenting/images/bukan-artis-tapi-xx-anak-ini-jad.original.jpegquality-90.jpg', 'https://cdn-cas.orami.co.id/parenting/images/bukan-artis-tapi-xx-anak-ini-jad.original.jpegquality-90.jpg', 'https://cdn-cas.orami.co.id/parenting/images/bukan-artis-tapi-xx-anak-ini-jad.original.jpegquality-90.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_com` int(11) NOT NULL,
  `id_blog` int(8) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_state` tinyint(1) NOT NULL,
  `comment_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_com`, `id_blog`, `parent_id`, `comment_name`, `comment_email`, `comment_body`, `comment_state`, `comment_created`) VALUES
(5, 2, 0, '123', '123@gmail.com', '123', 0, 1593491479),
(6, 2, 0, 'holi', '123@gmail.com', 'nyobaaa ajajajajajaja', 0, 1593491576);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_pro` int(2) NOT NULL,
  `kategori_pro` varchar(50) NOT NULL,
  `judul_pro` varchar(100) NOT NULL,
  `mini_text_pro` varchar(255) NOT NULL,
  `tanggal_pro` date NOT NULL,
  `id_adm` int(2) NOT NULL,
  `nama_client_pro` varchar(50) DEFAULT NULL,
  `lokasi_pro` varchar(255) DEFAULT NULL,
  `img_1_pro` varchar(255) DEFAULT NULL,
  `img_2_pro` varchar(255) DEFAULT NULL,
  `img_3_pro` varchar(255) DEFAULT NULL,
  `img_4_pro` varchar(255) DEFAULT NULL,
  `isi_pro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_pro`, `kategori_pro`, `judul_pro`, `mini_text_pro`, `tanggal_pro`, `id_adm`, `nama_client_pro`, `lokasi_pro`, `img_1_pro`, `img_2_pro`, `img_3_pro`, `img_4_pro`, `isi_pro`) VALUES
(1, 'nyoba1', 'Nyobaaaaa', '&lt;?=  $row-&gt;judul_blog  ?&gt;', '2020-06-30', 2, '', '', 'https://img.okezone.com/content/2014/09/20/198/1041874/65Zo0Kf4Wy.jpg', 'https://oceanedu.co.id/wp-content/uploads/2016/06/anak-kecil.jpg', 'https://cdn1-production-images-kly.akamaized.net/gTl4GRrEMIYbknLwHIg86vDJINc=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2791881/original/081469700_1556544145-iStock-539830042.jpg', 'https://i.pinimg.com/originals/3b/8a/d2/3b8ad2c7b1be2caf24321c852103598a.jpg', '&lt;p&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2991309/original/044741100_1575937614-page.jpg&quot;&gt;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:...&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2991309/original/044741100_1575937614-page.jpg&quot;&gt;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:...&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2991309/original/044741100_1575937614-page.jpg&quot;&gt;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:...&lt;/a&gt;&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2991309/original/044741100_1575937614-page.jpg&quot;&gt;https://cdn1-production-images-kly.akamaized.net/V6FeZHDEu4qu85ujX4RUdFivNn0=/640x360/smart/filters:...&lt;/a&gt;&lt;br&gt;&lt;/p&gt;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_adm` (`id_adm`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_adm` (`id_adm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_pro` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
