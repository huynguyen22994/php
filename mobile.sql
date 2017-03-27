-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2013 at 02:00 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_ips`
--

CREATE TABLE IF NOT EXISTS `counter_ips` (
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `visit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counter_ips`
--

INSERT INTO `counter_ips` (`ip`, `visit`) VALUES
('127.0.0.1', '2013-04-17 17:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `counter_values`
--

CREATE TABLE IF NOT EXISTS `counter_values` (
  `id` bigint(11) NOT NULL,
  `day_id` bigint(11) NOT NULL,
  `day_value` bigint(11) NOT NULL,
  `week_id` bigint(11) NOT NULL,
  `week_value` bigint(11) NOT NULL,
  `month_id` bigint(11) NOT NULL,
  `month_value` bigint(11) NOT NULL,
  `year_id` bigint(11) NOT NULL,
  `year_value` bigint(11) NOT NULL,
  `all_value` bigint(11) NOT NULL,
  `record_date` datetime NOT NULL,
  `record_value` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `counter_values`
--

INSERT INTO `counter_values` (`id`, `day_id`, `day_value`, `week_id`, `week_value`, `month_id`, `month_value`, `year_id`, `year_value`, `all_value`, `record_date`, `record_value`) VALUES
(1, 106, 2, 16, 10, 4, 24, 2013, 52, 52, '2013-03-27 09:22:46', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbldt`
--

CREATE TABLE IF NOT EXISTS `tbldt` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hinh` text COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TTSP` longtext COLLATE utf8_unicode_ci NOT NULL,
  `HangSX` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ChatLuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BanChay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbldt`
--

INSERT INTO `tbldt` (`Id`, `Hinh`, `TenSP`, `TTSP`, `HangSX`, `Gia`, `LoaiSP`, `ChatLuong`, `BanChay`, `NgayCapNhat`) VALUES
(1, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Iphone 5', '<p>\r\n	M&agrave;n h&igrave;nh: DVGA, 4.0&quot;, 640 x 1136 pixels CPU: Dual-core 1.2 GHz, RAM: 1 GB Hệ điều h&agrave;nh: iOS 6 Camera ch&iacute;nh: 8.0 MP, Quay phim FullHD 1080p@30fps Camera phụ: 1.2 MP Bộ nhớ trong: 16 GB Thẻ nhớ ngo&agrave;i đến: Kh&ocirc;ng Dung lượng pin: 1440 mAh</p>\r\n', 'Apple', '17990000', 'DT', 'Hàng Cao Cấp', '', '30/03/2013'),
(2, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy S4 I9500', '<p>\r\n	M&agrave;n h&igrave;nh: DVGA, 4.0&quot;, 640 x 1136 pixels CPU: Dual-core 1.2 GHz, RAM: 1 GB Hệ điều h&agrave;nh: iOS 6 Camera ch&iacute;nh: 8.0 MP, Quay phim FullHD 1080p@30fps Camera phụ: 1.2 MP Bộ nhớ trong: 16 GB Thẻ nhớ ngo&agrave;i đến: Kh&ocirc;ng Dung lượng pin: 1440 mAh</p>\r\n', 'Samsung', '16990000', 'DT', 'Hàng Cao Cấp', 'BC', '27/03/2013'),
(3, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy Y S5360', '<p>\r\n	M&agrave;n h&igrave;nh: DVGA, 4.0&quot;, 640 x 1136 pixels CPU: Dual-core 1.2 GHz, RAM: 1 GB Hệ điều h&agrave;nh: iOS 6 Camera ch&iacute;nh: 8.0 MP, Quay phim FullHD 1080p@30fps Camera phụ: 1.2 MP Bộ nhớ trong: 16 GB Thẻ nhớ ngo&agrave;i đến: Kh&ocirc;ng Dung lượng pin: 1440 mAh</p>\r\n', 'Samsung', '17190000', 'DT', 'Hàng Cao Cấp', 'BC', '27/03/2013'),
(4, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy S4 I9500', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '16990000', 'DT', 'Hàng trung cấp', '', ''),
(5, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy Y S5360', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '17190000', 'DT', 'Hàng cao cấp', '', ''),
(6, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy S4 I9500', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '16990000', 'DT', 'Hàng cao cấp', '', ''),
(7, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy Y S5360', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '17190000', 'DT', 'Hàng cao cấp', '', ''),
(8, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy S4 I9500', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '16990000', 'DT', 'Hàng phổ thông', '', '23/03/2013'),
(10, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy S4 I9500', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels\r\nCPU: Dual-core 1.2 GHz, RAM: 1 GB\r\nHệ điều hành: iOS 6\r\nCamera chính: 8.0 MP, Quay phim FullHD 1080p@30fps\r\nCamera phụ: 1.2 MP\r\nBộ nhớ trong: 16 GB\r\nThẻ nhớ ngoài đến: Không\r\nDung lượng pin:	1440 mAh', 'Samsung', '16990000', 'DT', 'Hàng phổ thông', '', ''),
(11, 'http://localhost/DTDD/public/images/img_products/hinh1.jpg', 'Samsung Galaxy Y S5360', 'Màn hình: DVGA, 4.0", 640 x 1136 pixels CPU: Dual-core 1.2 GHz, RAM: 1 GB Hệ điều hành: iOS 6 Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps Camera phụ: 1.2 MP Bộ nhớ trong: 16 GB Thẻ nhớ ngoài đến: Không Dung lượng pin: 1440 mAh', 'Samsung', '17190000', 'DT', 'Hàng Cao Cấp', '', '23/03/2013'),
(12, 'http://localhost/dtdd/public/images/img_products/LG-Optimus-L5-Dual-E615-m.jpg', 'LG Optimus L5 Dual E615', '<p>\r\n	Tổng quan Băng tần GSM 850 / 900 / 1800 / 1900, HSDPA 900 / 1900 / 2100 Ng&ocirc;n ngữ C&oacute; tiếng Việt Ng&agrave;y ra mắt 2012 Hỗ trợ đa sim C&oacute; Kiểu d&aacute;ng Thanh K&iacute;ch cỡ K&iacute;ch thước 118.3 x 66.5 x 9.9 mm Trọng lượng 120 g Hiển thị Loại m&agrave;n h&igrave;nh Cảm ứng điện dung IPS LCD, 16M colors K&iacute;ch thước m&agrave;n h&igrave;nh 320 x 480 pixels, 4.0 inches M&agrave;n h&igrave;nh cảm ứng C&oacute; B&agrave;n ph&iacute;m QWERTY Kh&ocirc;ng Nhạc chu&ocirc;ng Loại nhạc chu&ocirc;ng MP3 Cho ph&eacute;p tải nhạc C&oacute; Loa ngo&agrave;i C&oacute; Bộ nhớ Danh bạ Kh&ocirc;ng giới hạn Bộ nhớ trong 4GB (khả dụng 2.6GB), 512 MB RAM. CPU: 800 MHz Cortex-A5 Thẻ nhớ ngo&agrave;i microSD, hỗ trợ đến 32GB Dữ liệu GPRS C&oacute; EDGE C&oacute; H&ocirc;̃ trợ 3G C&oacute; Wifi Wi-Fi 802.11 b/g/n, Wi-Fi hotspot Trình duy&ecirc;̣t HTML Bluetooth C&oacute; Hồng ngoại Kh&ocirc;ng USB C&oacute; GPS C&oacute; Đặc t&iacute;nh Tin nhắn SMS (threaded view), MMS, Email, Push Email, IM Ghi &acirc;m C&oacute; FM Radio C&oacute; Hệ điều h&agrave;nh Android v4.0 (ICS ) Giải trí Tr&ograve; chơi v&agrave; ứng dụng C&agrave;i sẵn, c&oacute; thể c&agrave;i th&ecirc;m Java C&oacute; M&aacute;y ảnh 5 MP, 2560 x 1920 pixels, autofocus, LED flash Quay phim C&oacute; Nghe nhạc MP3/WAV/eAAC+ Xem phim MP4/DivX/Xvid/H.264/H.263 Ứng dụng văn phòng C&oacute; Ghi &acirc;m cuộc gọi Kh&ocirc;ng Pin Loại pin Li-Ion 1540 mAh Thời gian chờ 600 giờ Thời gian thoại 10 giờ</p>\r\n', 'LG', '3969000', 'DT', 'Hàng Cao Cấp', 'BC', '27/03/2013'),
(13, 'http://localhost/dtdd/public/images/img_products/c3ac74bdb9c541bc5cc72dacacaf8e91_blackberry-z10-white-hero_thumbnail_180_135.jpg.png', 'BlackBerry Z10', 'Tổng quan  Băng tần  GSM 850 / 900 / 1800 / 1900, HSDPA 800 / 850 / 1700 / 1900 / 2100, LTE 700 / 850 / 1700 / 1900\r\nNgôn ngữ  Nhiều\r\nNgày ra mắt  30/01/2013\r\nHỗ trợ đa sim  Không\r\nKiểu dáng  Thanh\r\nKích cỡ  Kích thước  130 x 65.6 x 9 mm\r\nTrọng lượng  135g\r\nHiển thị  Loại màn hình  Cảm ứng điện dung, 16 triệu màu\r\nKích thước màn hình  768 x 1280 pixels, 4.2 inches\r\nMàn hình cảm ứng  Có\r\nBàn phím QWERTY  Có\r\nNhạc chuông  Loại nhạc chuông  MP3\r\nCho phép tải nhạc  Có\r\nLoa ngoài  Có\r\nBộ nhớ  Danh bạ  Không giới hạn\r\nBộ nhớ trong  16GB, 2GB RAM. CPU Dual-core 1.5 GHz Krait\r\nThẻ nhớ ngoài  microSD đến 32GB\r\nDữ liệu  GPRS  Có\r\nEDGE  Có\r\nHỗ trợ 3G  Có\r\nWifi  Wi-Fi 802.11 a/b/g/n, dual band\r\nTrình duyệt  HTML5\r\nBluetooth  Có\r\nHồng ngoại  Không\r\nUSB  Có\r\nGPS  Có\r\nĐặc tính  Tin nhắn  SMS, MMS, Email, Push Email, IM, BBM 6\r\nGhi âm  Có\r\nFM Radio  Có\r\nHệ điều hành  Blackberry 10\r\nGiải trí  Trò chơi và ứng dụng  Cài sẵn, có thể cài thêm từ Blackberry World\r\nJava  Có\r\nMáy ảnh  8 MP, 3264 x 2448 pixels, autofocus, LED flash. Máy ảnh phụ 2 MP, 720p@30fps\r\nQuay phim  1080p@30fps\r\nNghe nhạc  MP3/WMA/WAV/eAAC+/FlAC\r\nXem phim  DivX/XviD/MP4/WMV/H.263/H.264\r\nỨng dụng văn phòng  Có\r\nGhi âm cuộc gọi  Có\r\nPin  Loại pin  Li-Ion 1800 mAh\r\nThời gian chờ  \r\nThời gian thoại', 'BlackBerry', '14999000', 'DT', 'Hàng Cao Cấp', '', '23/03/2013'),
(14, 'http://localhost/dtdd/public/images/img_products/9050e9ab3d721f7478fd9369980d9181_nokia-lumia-520.jpg', 'Nokia Lumia 520', 'Tổng quan  Băng tần  GSM 850 / 900 / 1800 / 1900; HSDPA 900 / 2100 - RM-914\r\nNgôn ngữ  Có Tiếng Việt\r\nNgày ra mắt  \r\nHỗ trợ đa sim  Không\r\nKiểu dáng  Thanh\r\nKích cỡ  Kích thước  119.9 x 64 x 9.9 mm\r\nTrọng lượng  124 g\r\nHiển thị  Loại màn hình  IPS LCD Cảm ứng điện dung, 16 triệu màu\r\nKích thước màn hình  4.0 inches,480 x 800 pixels\r\nMàn hình cảm ứng  Có\r\nBàn phím QWERTY  Không\r\nNhạc chuông  Loại nhạc chuông  Vibration; MP3, WAV ringtones\r\nCho phép tải nhạc  Có\r\nLoa ngoài  Có\r\nBộ nhớ  Danh bạ  Không giới hạn\r\nBộ nhớ trong  8 GB, 512 MB RAM\r\nThẻ nhớ ngoài  microSD, up to 64 GB\r\nDữ liệu  GPRS  Có\r\nEDGE  Có\r\nHỗ trợ 3G  Có\r\nWifi  Wi-Fi 802.11 a/b/g/n\r\nTrình duyệt  HTML5\r\nBluetooth  Có\r\nHồng ngoại  Có\r\nUSB  Có\r\nGPS  Có\r\nĐặc tính  Tin nhắn  SMS (threaded view), MMS, Email, Push Email, IM\r\nGhi âm  Có\r\nFM Radio  Có\r\nHệ điều hành  Microsoft Window Phone 8\r\nGiải trí  Trò chơi và ứng dụng  Có thể cài đặt thêm\r\nJava  Có\r\nMáy ảnh  5 MP, 2592х1936 pixels, autofocus\r\nQuay phim  Có\r\nNghe nhạc  Có\r\nXem phim  Có\r\nỨng dụng văn phòng  Có\r\nGhi âm cuộc gọi  Có\r\nPin  Loại pin  Li-Ion 1430 mAh battery\r\nThời gian chờ  Up to 360 h\r\nThời gian thoại  Lên đến 14 h 40 min (2G) / Lên đến 9 h 40 min (3G)', 'Nokia', '3899000', 'DT', 'Hàng Cao Cấp', '', '24/03/2013'),
(15, 'http://localhost/dtdd/public/images/img_products/ea1851f81a13bd0d41501890f9c064e7_Sony-Xperia-S-LT26_LT26i_21_thumbnail_260_260.jpg.png', 'Sony Ericsson Xperia S', 'Tổng quan  Băng tần  GSM 850/900/1800/1900; HSPDA 850/900/2100\r\nNgôn ngữ  Nhiều\r\nNgày ra mắt  2012\r\nHỗ trợ đa sim  Không\r\nKiểu dáng  Thanh\r\nKích cỡ  Kích thước  128 x 64 x 10.6 (mm)\r\nTrọng lượng  144g\r\nHiển thị  Loại màn hình  Cảm ứng điện dung, đa điểm, LED-backlit IPS TFT 16 triệu màu\r\nKích thước màn hình  4.3 inches, 720 x 1280 px\r\nMàn hình cảm ứng  Có\r\nBàn phím QWERTY  Không\r\nNhạc chuông  Loại nhạc chuông  MP3\r\nCho phép tải nhạc  Có\r\nLoa ngoài  Có\r\nBộ nhớ  Danh bạ  Không giới hạn\r\nBộ nhớ trong  16GB. CPU: Dual-core 1.5GHz proccessor, RAM 1GB\r\nThẻ nhớ ngoài  Không\r\nDữ liệu  GPRS  Có\r\nEDGE  Có\r\nHỗ trợ 3G  Có\r\nWifi  Wi-Fi hotspot, Wi-Fi 802.11 b/g/n, DLNA\r\nTrình duyệt  HTML5\r\nBluetooth  Có\r\nHồng ngoại  Không\r\nUSB  Có\r\nGPS  Có\r\nĐặc tính  Tin nhắn  SMS/MMS/Instant Messaging\r\nGhi âm  Có\r\nFM Radio  Có\r\nHệ điều hành  Android v2.3.5 (Gingerbread )\r\nGiải trí  Trò chơi và ứng dụng  Cài sẵn, có thể cài thêm\r\nJava  Có\r\nMáy ảnh  12 MP (4000 x 3000 pixels), tự động lấy nét, nhận diện khuôn mặt, đèn flash. Máy ảnh trước 1.3 MP, 720p@30fps\r\nQuay phim  1080p@30fps\r\nNghe nhạc  MP3/WAV\r\nXem phim  MP4/H.264(MPEG4-AVC) H.263\r\nỨng dụng văn phòng  Có\r\nGhi âm cuộc gọi  Không\r\nPin  Loại pin  Li-on 1750 mAh\r\nThời gian chờ  450 giờ\r\nThời gian thoại  8 giờ', 'Sony Ericsson', '11999000', 'DT', 'Hàng Cao Cấp', '', '24/03/2013'),
(17, 'http://localhost/dtdd/public/images/img_products/8febadbd0164a8bfd7b7e3753aebc357_sony-xperia-z.jpg', 'Sony Xperia Z2', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" class="product-feature tvalignt mt10" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td class="w20x" rowspan="5">\r\n				<strong>Tổng quan</strong></td>\r\n			<td class="w20x">\r\n				Băng tần</td>\r\n			<td class="w60x">\r\n				GSM 850 / 900 / 1800 / 1900 - C6602, C6603, HSDPA 850 / 900 / 2100 - C6603, LTE 800 / 850 / 900 / 1800 / 2100 / 2600 - C6603</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ng&ocirc;n ngữ</td>\r\n			<td class="w60x">\r\n				C&oacute; tiếng Việt</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ng&agrave;y ra mắt</td>\r\n			<td class="w60x">\r\n				2012</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hỗ trợ đa sim</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Kiểu d&aacute;ng</td>\r\n			<td class="w60x">\r\n				Thanh</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="2">\r\n				<strong>K&iacute;ch cỡ</strong></td>\r\n			<td class="w20x">\r\n				K&iacute;ch thước</td>\r\n			<td class="w60x">\r\n				139 x 71 x 7.9 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Trọng lượng</td>\r\n			<td class="w60x">\r\n				146 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="4">\r\n				<strong>Hiển thị</strong></td>\r\n			<td class="w20x">\r\n				Loại m&agrave;n h&igrave;nh</td>\r\n			<td class="w60x">\r\n				TFT Cảm ứng điện dung, 16 triệu m&agrave;u</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				K&iacute;ch thước m&agrave;n h&igrave;nh</td>\r\n			<td class="w60x">\r\n				1080 x 1920 pixels, 5.0 inches</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				M&agrave;n h&igrave;nh cảm ứng</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				B&agrave;n ph&iacute;m QWERTY</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Nhạc chu&ocirc;ng</strong></td>\r\n			<td class="w20x">\r\n				Loại nhạc chu&ocirc;ng</td>\r\n			<td class="w60x">\r\n				Vibration; MP3 ringtones</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Cho ph&eacute;p tải nhạc</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Loa ngo&agrave;i</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Bộ nhớ</strong></td>\r\n			<td class="w20x">\r\n				Danh bạ</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng giới hạn</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Bộ nhớ trong</td>\r\n			<td class="w60x">\r\n				16 GB, 2 GB RAM. CPU Quad-core 1.5 GHz Krait</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thẻ nhớ ngo&agrave;i</td>\r\n			<td class="w60x">\r\n				microSD, up to 64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="9">\r\n				<strong>Dữ liệu</strong></td>\r\n			<td class="w20x">\r\n				GPRS</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				EDGE</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				H&ocirc;̃ trợ 3G</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Wifi</td>\r\n			<td class="w60x">\r\n				Wi-Fi 802.11 a/b/g/n</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Tr&igrave;nh duy&ecirc;̣t</td>\r\n			<td class="w60x">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Bluetooth</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hồng ngoại</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				USB</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				GPS</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="4">\r\n				<strong>Đặc t&iacute;nh</strong></td>\r\n			<td class="w20x">\r\n				Tin nhắn</td>\r\n			<td class="w60x">\r\n				SMS (threaded view), MMS, Email, IM, Push Email</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ghi &acirc;m</td>\r\n			<td class="w60x">\r\n				Cos</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				FM Radio</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hệ điều h&agrave;nh</td>\r\n			<td class="w60x">\r\n				Android v4.1 (Jelly Bean)</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="8">\r\n				<strong>Giải tr&iacute;</strong></td>\r\n			<td class="w20x">\r\n				Tr&ograve; chơi v&agrave; ứng dụng</td>\r\n			<td class="w60x">\r\n				C&agrave;i sẵn, c&oacute; thể c&agrave;i th&ecirc;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Java</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				M&aacute;y ảnh</td>\r\n			<td class="w60x">\r\n				13.1 MP, 4128x3096 pixels, autofocus, LED flash</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Quay phim</td>\r\n			<td class="w60x">\r\n				Yes, 1080p@30fps, video stabilization, HDR</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Nghe nhạc</td>\r\n			<td class="w60x">\r\n				Nhiều định dạng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Xem phim</td>\r\n			<td class="w60x">\r\n				Nhiều định dạng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ứng dụng văn ph&ograve;ng</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ghi &acirc;m cuộc gọi</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Pin</strong></td>\r\n			<td class="w20x">\r\n				Loại pin</td>\r\n			<td class="w60x">\r\n				Li-Ion 2330 mAh battery</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thời gian chờ</td>\r\n			<td class="w60x">\r\n				L&ecirc;n đến 550 h (2G) / L&ecirc;n đến 530 h (3G)</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thời gian thoại</td>\r\n			<td class="w60x">\r\n				L&ecirc;n đến 11 h (2G) / L&ecirc;n đến 14 h (3G)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Sony Ericsson', '15000000', 'DT', 'Hàng Cao Cấp', 'BC', '27/03/2013'),
(18, 'http://localhost/dtdd/public/images/img_products/8febadbd0164a8bfd7b7e3753aebc357_sony-xperia-z.jpg', 'Sony Xperia Z3', '<p>\r\n &nbsp;</p>\r\n<p>\r\n &nbsp;</p>\r\n<p>\r\n &nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" class="product-feature tvalignt mt10" width="100%">\r\n <tbody>\r\n  <tr>\r\n   <td class="w20x" rowspan="5">\r\n    <strong>Tổng quan</strong></td>\r\n   <td class="w20x">\r\n    Băng tần</td>\r\n   <td class="w60x">\r\n    GSM 850 / 900 / 1800 / 1900 - C6602, C6603, HSDPA 850 / 900 / 2100 - C6603, LTE 800 / 850 / 900 / 1800 / 2100 / 2600 - C6603</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Ng&ocirc;n ngữ</td>\r\n   <td class="w60x">\r\n    C&oacute; tiếng Việt</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Ng&agrave;y ra mắt</td>\r\n   <td class="w60x">\r\n    2012</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Hỗ trợ đa sim</td>\r\n   <td class="w60x">\r\n    Kh&ocirc;ng</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Kiểu d&aacute;ng</td>\r\n   <td class="w60x">\r\n    Thanh</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="2">\r\n    <strong>K&iacute;ch cỡ</strong></td>\r\n   <td class="w20x">\r\n    K&iacute;ch thước</td>\r\n   <td class="w60x">\r\n    139 x 71 x 7.9 mm</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Trọng lượng</td>\r\n   <td class="w60x">\r\n    146 g</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="4">\r\n    <strong>Hiển thị</strong></td>\r\n   <td class="w20x">\r\n    Loại m&agrave;n h&igrave;nh</td>\r\n   <td class="w60x">\r\n    TFT Cảm ứng điện dung, 16 triệu m&agrave;u</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    K&iacute;ch thước m&agrave;n h&igrave;nh</td>\r\n   <td class="w60x">\r\n    1080 x 1920 pixels, 5.0 inches</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    M&agrave;n h&igrave;nh cảm ứng</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    B&agrave;n ph&iacute;m QWERTY</td>\r\n   <td class="w60x">\r\n    Kh&ocirc;ng</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="3">\r\n    <strong>Nhạc chu&ocirc;ng</strong></td>\r\n   <td class="w20x">\r\n    Loại nhạc chu&ocirc;ng</td>\r\n   <td class="w60x">\r\n    Vibration; MP3 ringtones</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Cho ph&eacute;p tải nhạc</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Loa ngo&agrave;i</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="3">\r\n    <strong>Bộ nhớ</strong></td>\r\n   <td class="w20x">\r\n    Danh bạ</td>\r\n   <td class="w60x">\r\n    Kh&ocirc;ng giới hạn</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Bộ nhớ trong</td>\r\n   <td class="w60x">\r\n    16 GB, 2 GB RAM. CPU Quad-core 1.5 GHz Krait</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Thẻ nhớ ngo&agrave;i</td>\r\n   <td class="w60x">\r\n    microSD, up to 64 GB</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="9">\r\n    <strong>Dữ liệu</strong></td>\r\n   <td class="w20x">\r\n    GPRS</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    EDGE</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    H&ocirc;̃ trợ 3G</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Wifi</td>\r\n   <td class="w60x">\r\n    Wi-Fi 802.11 a/b/g/n</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Tr&igrave;nh duy&ecirc;̣t</td>\r\n   <td class="w60x">\r\n    &nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Bluetooth</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Hồng ngoại</td>\r\n   <td class="w60x">\r\n    Kh&ocirc;ng</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    USB</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    GPS</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="4">\r\n    <strong>Đặc t&iacute;nh</strong></td>\r\n   <td class="w20x">\r\n    Tin nhắn</td>\r\n   <td class="w60x">\r\n    SMS (threaded view), MMS, Email, IM, Push Email</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Ghi &acirc;m</td>\r\n   <td class="w60x">\r\n    Cos</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    FM Radio</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Hệ điều h&agrave;nh</td>\r\n   <td class="w60x">\r\n    Android v4.1 (Jelly Bean)</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="8">\r\n    <strong>Giải tr&iacute;</strong></td>\r\n   <td class="w20x">\r\n    Tr&ograve; chơi v&agrave; ứng dụng</td>\r\n   <td class="w60x">\r\n    C&agrave;i sẵn, c&oacute; thể c&agrave;i th&ecirc;m</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Java</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    M&aacute;y ảnh</td>\r\n   <td class="w60x">\r\n    13.1 MP, 4128x3096 pixels, autofocus, LED flash</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Quay phim</td>\r\n   <td class="w60x">\r\n    Yes, 1080p@30fps, video stabilization, HDR</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Nghe nhạc</td>\r\n   <td class="w60x">\r\n    Nhiều định dạng</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Xem phim</td>\r\n   <td class="w60x">\r\n    Nhiều định dạng</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Ứng dụng văn ph&ograve;ng</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Ghi &acirc;m cuộc gọi</td>\r\n   <td class="w60x">\r\n    C&oacute;</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x" rowspan="3">\r\n    <strong>Pin</strong></td>\r\n   <td class="w20x">\r\n    Loại pin</td>\r\n   <td class="w60x">\r\n    Li-Ion 2330 mAh battery</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Thời gian chờ</td>\r\n   <td class="w60x">\r\n    L&ecirc;n đến 550 h (2G) / L&ecirc;n đến 530 h (3G)</td>\r\n  </tr>\r\n  <tr>\r\n   <td class="w20x">\r\n    Thời gian thoại</td>\r\n   <td class="w60x">\r\n    L&ecirc;n đến 11 h (2G) / L&ecirc;n đến 14 h (3G)</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n<p>\r\n &nbsp;</p>', 'Sony Ericsson', '19000000', 'DT', 'Hàng Cao Cấp', '', '24/03/2013'),
(19, 'http://localhost/dtdd/public/images/img_products/8febadbd0164a8bfd7b7e3753aebc357_sony-xperia-z.jpg', 'Sony Xperia Z4 ttttt', '<p>\r\n	&nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" class="product-feature tvalignt mt10" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td class="w20x" rowspan="5">\r\n				<strong>Tổng quan</strong></td>\r\n			<td class="w20x">\r\n				Băng tần</td>\r\n			<td class="w60x">\r\n				GSM 850 / 900 / 1800 / 1900 - C6602, C6603, HSDPA 850 / 900 / 2100 - C6603, LTE 800 / 850 / 900 / 1800 / 2100 / 2600 - C6603</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ng&ocirc;n ngữ</td>\r\n			<td class="w60x">\r\n				C&oacute; tiếng Việt</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ng&agrave;y ra mắt</td>\r\n			<td class="w60x">\r\n				2012</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hỗ trợ đa sim</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Kiểu d&aacute;ng</td>\r\n			<td class="w60x">\r\n				Thanh cong</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="2">\r\n				<strong>K&iacute;ch cỡ</strong></td>\r\n			<td class="w20x">\r\n				K&iacute;ch thước</td>\r\n			<td class="w60x">\r\n				139 x 71 x 7.9 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Trọng lượng</td>\r\n			<td class="w60x">\r\n				146 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="4">\r\n				<strong>Hiển thị</strong></td>\r\n			<td class="w20x">\r\n				Loại m&agrave;n h&igrave;nh</td>\r\n			<td class="w60x">\r\n				TFT Cảm ứng điện dung, 16 triệu m&agrave;u</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				K&iacute;ch thước m&agrave;n h&igrave;nh</td>\r\n			<td class="w60x">\r\n				1080 x 1920 pixels, 5.0 inches</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				M&agrave;n h&igrave;nh cảm ứng</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				B&agrave;n ph&iacute;m QWERTY</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Nhạc chu&ocirc;ng</strong></td>\r\n			<td class="w20x">\r\n				Loại nhạc chu&ocirc;ng</td>\r\n			<td class="w60x">\r\n				Vibration; MP3 ringtones</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Cho ph&eacute;p tải nhạc</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Loa ngo&agrave;i</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Bộ nhớ</strong></td>\r\n			<td class="w20x">\r\n				Danh bạ</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng giới hạn</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Bộ nhớ trong</td>\r\n			<td class="w60x">\r\n				16 GB, 2 GB RAM. CPU Quad-core 1.5 GHz Krait</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thẻ nhớ ngo&agrave;i</td>\r\n			<td class="w60x">\r\n				microSD, up to 64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="9">\r\n				<strong>Dữ liệu</strong></td>\r\n			<td class="w20x">\r\n				GPRS</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				EDGE</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				H&ocirc;̃ trợ 3G</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Wifi</td>\r\n			<td class="w60x">\r\n				Wi-Fi 802.11 a/b/g/n</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Tr&igrave;nh duy&ecirc;̣t</td>\r\n			<td class="w60x">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Bluetooth</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hồng ngoại</td>\r\n			<td class="w60x">\r\n				Kh&ocirc;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				USB</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				GPS</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="4">\r\n				<strong>Đặc t&iacute;nh</strong></td>\r\n			<td class="w20x">\r\n				Tin nhắn</td>\r\n			<td class="w60x">\r\n				SMS (threaded view), MMS, Email, IM, Push Email</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ghi &acirc;m</td>\r\n			<td class="w60x">\r\n				Cos</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				FM Radio</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Hệ điều h&agrave;nh</td>\r\n			<td class="w60x">\r\n				Android v4.1 (Jelly Bean)</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="8">\r\n				<strong>Giải tr&iacute;</strong></td>\r\n			<td class="w20x">\r\n				Tr&ograve; chơi v&agrave; ứng dụng</td>\r\n			<td class="w60x">\r\n				C&agrave;i sẵn, c&oacute; thể c&agrave;i th&ecirc;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Java</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				M&aacute;y ảnh</td>\r\n			<td class="w60x">\r\n				13.1 MP, 4128x3096 pixels, autofocus, LED flash</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Quay phim</td>\r\n			<td class="w60x">\r\n				Yes, 1080p@30fps, video stabilization, HDR</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Nghe nhạc</td>\r\n			<td class="w60x">\r\n				Nhiều định dạng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Xem phim</td>\r\n			<td class="w60x">\r\n				Nhiều định dạng</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ứng dụng văn ph&ograve;ng</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Ghi &acirc;m cuộc gọi</td>\r\n			<td class="w60x">\r\n				C&oacute;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x" rowspan="3">\r\n				<strong>Pin</strong></td>\r\n			<td class="w20x">\r\n				Loại pin</td>\r\n			<td class="w60x">\r\n				Li-Ion 2330 mAh battery</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thời gian chờ</td>\r\n			<td class="w60x">\r\n				L&ecirc;n đến 550 h (2G) / L&ecirc;n đến 530 h (3G)</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="w20x">\r\n				Thời gian thoại</td>\r\n			<td class="w60x">\r\n				L&ecirc;n đến 11 h (2G) / L&ecirc;n đến 14 h (3G)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Apple', '19000000', 'DT', 'Hàng Cao Cấp', '', '30/03/2013'),
(20, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'Tấm dán MH Samsung Galaxy Tab 10.1', '<p>\r\n	&nbsp;</p>\r\n<table border="1" cellpadding="0" cellspacing="0" class="product-feature tvalignt mt10" width="100%">\r\n	<tbody>\r\n		<tr id="ctl21_ctl05_rptProperty_ctl01_trLayout">\r\n			<td class="w20x">\r\n				<strong>Loại</strong></td>\r\n			<td class="w80x" colspan="2">\r\n				Tấm d&aacute;n điện thoại</td>\r\n		</tr>\r\n		<tr id="ctl21_ctl05_rptProperty_ctl02_trLayout">\r\n			<td class="w20x">\r\n				<strong>K&iacute;ch thước</strong></td>\r\n			<td class="w80x" colspan="2">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr id="ctl21_ctl05_rptProperty_ctl03_trLayout">\r\n			<td class="w20x">\r\n				<strong>Chất liệu</strong></td>\r\n			<td class="w80x" colspan="2">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr id="ctl21_ctl05_rptProperty_ctl04_trLayout">\r\n			<td class="w20x">\r\n				<strong>D&ograve;ng m&aacute;y hỗ trợ</strong></td>\r\n			<td class="w80x" colspan="2">\r\n				Samsung Galaxy Tab 10.1 P7500</td>\r\n		</tr>\r\n		<tr id="ctl21_ctl05_rptProperty_ctl05_trLayout">\r\n			<td class="w20x">\r\n				<strong>T&iacute;nh năng kh&aacute;c</strong></td>\r\n			<td class="w80x" colspan="2">\r\n				&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Phụ Kiện', '80000', 'PK', '', '', '26/03/2013'),
(21, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'phu kien', '<p>\r\n hjkdashjkdhashdjklasd</p>', 'Phụ Kiện', '900000', 'PK', '', '', '26/03/2013'),
(22, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'phu kien 2', '<p>\r\n rtrtryytytytryry</p>', 'Phụ Kiện', '20000', 'PK', '', '', '26/03/2013'),
(25, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'phu kien 5 thanh cong ', '<p>\r\n	thanh cong</p>\r\n', 'Phụ Kiện', '68000', 'PK', '', '', '26/03/2013'),
(26, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'phu kien 6', '<p>\r\n gfgdfgfdgfdgdfg</p>', 'Phụ Kiện', '64000', 'PK', '', '', '26/03/2013');

-- --------------------------------------------------------

--
-- Table structure for table `tblgioithieu`
--

CREATE TABLE IF NOT EXISTS `tblgioithieu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblgioithieu`
--

INSERT INTO `tblgioithieu` (`Id`, `NoiDung`) VALUES
(1, '<p style="text-align: justify;">\r\n	<span style="color:#ff8c00;">K&iacute;nh mong qu&yacute; cơ quan, doanh nghiệp. Trước hết ch&uacute;ng t&ocirc;i gửi đến qu&yacute; cơ quan, doanh nghiệp lời ch&uacute;c tốt đẹp nhất. K&iacute;nh ch&uacute;c qu&yacute; doanh nghiệp th&agrave;nh c&ocirc;ng v&agrave; ph&aacute;t đạt. Thưa qu&yacute; doanh nghiệp cho ph&eacute;p ch&uacute;ng t&ocirc;i được giới thiệu sơ về m&igrave;nh. C&ocirc;ng ty Quảng c&aacute;o &amp; Sự Kiện T&acirc;n Thế Giới l&agrave; c&ocirc;ng ty chuy&ecirc;n thiết kế v&agrave; tổ chức sự kiện cung cấp qu&agrave; tặng v&agrave; c&aacute;c tổ chức sự kiện&hellip; v&agrave; thực hiện quảng c&aacute;o cho qu&yacute; doanh nghiệp tr&ecirc;n c&aacute;c phương tiện trực quan, truyền thong (Media). Mỗi doanh nghiệp trong qu&aacute; tr&igrave;nh h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển điều m&agrave; c&aacute;c nh&agrave; l&atilde;nh đạo lu&ocirc;n lu&ocirc;n phải trăng trở, lu&ocirc;n lu&ocirc;n phải quan t&acirc;m v&agrave; mong muốn l&agrave; doanh nghiệp sớm được định vị v&agrave; khẳng định một vị thế tr&ecirc;n thị trường , v&igrave; lẻ đ&oacute; ch&uacute;ng t&ocirc;i lu&ocirc;n tự đặt m&igrave;nh trong mọi ho&agrave;n cảnh của qu&yacute; doanh nghiệp để thấu hiểu để cảm nhận được hết những g&igrave; m&agrave; qu&yacute; doanh nghiệp lu&ocirc;n mong chờ. V&acirc;n đ&oacute; cũng l&agrave; nhiệm vụ đầy trọng tr&aacute;ch của c&ocirc;ng ty Quảng C&aacute;o &amp; Sự Kiện T&acirc;n Thế Giới phải đạt được cho đối t&aacute;c, ch&uacute;ng t&ocirc;i lu&ocirc;n lu&ocirc;n phấn đấu lu&ocirc;n lu&ocirc;n học hỏi để đạt được sự ho&agrave;n mỹ nhất trong mất kh&aacute;ch h&agrave;ng !</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbllienhe`
--

CREATE TABLE IF NOT EXISTS `tbllienhe` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbllienhe`
--

INSERT INTO `tbllienhe` (`Id`, `Ten`, `Email`, `TieuDe`, `NoiDung`) VALUES
(3, 'Lê Quốc Tú', 'it.lequoctu@gmail.com', 'Chào Admin', 'Xin chào Admin ! chúc một ngày làm việc vui vẻ và hiệu quả'),
(4, 'NGUYEN VAN A', 'vien@gmail.com', 'dsfsfsdfd', 'rwrtretertfdgf');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaker`
--

CREATE TABLE IF NOT EXISTS `tblmaker` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TenHangSX` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblmaker`
--

INSERT INTO `tblmaker` (`Id`, `TenHangSX`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'LG'),
(5, 'Nokia'),
(7, 'HTC'),
(8, 'BlackBerry'),
(9, 'Sony Ericsson'),
(10, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TenBanTin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTatBanTin` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`Id`, `TenBanTin`, `TomTatBanTin`, `NoiDung`, `Hinh`) VALUES
(1, 'Lộ diện P780: Quái vật về pin, cấu hình tầm trung', 'P780 là chiếc điện thoại bí ẩn mà Lenovo đang phát triển và sẽ sớm được ra mắt trong thời gian ngắn sắp tới. Điểm đặc biệt của chiếc smartphone này đó là thời lượng pin cực khủng lên đến 4.000 mAh.', '<p>\r\n	Tuy vậy, P780 vẫn chưa thể ph&aacute; được kỷ lục điện thoại c&oacute; thời lượng pin cao nhất thế giới bởi danh hiệu n&agrave;y đang thuộc về Ascend Mate với dung lượng pin 4.050 mAh.</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost/dtdd/public/images/img_news/ImageView_aspx.jpg" style="width: 600px; height: 356px;" /></p>\r\n<p>\r\n	Ngo&agrave;i vi&ecirc;n pin c&oacute; dung lượng &quot;khủng khiếp&quot; th&igrave; P870 chỉ l&agrave; một smartphone sở hữu cấu h&igrave;nh tầm trung với vi xử l&yacute; l&otilde;i tứ MediaTek MT6589 chưa r&otilde; tốc độ c&ugrave;ng 1 GB RAM v&agrave; m&agrave;n h&igrave;nh cảm ứng 5 inch cho độ ph&acirc;n giải 720x1.280 pixel. C&aacute;c th&ocirc;ng số kh&aacute;c về cấu h&igrave;nh của P780 bao gồm 8 GB bộ nhớ trong c&ugrave;ng camera 8 chấm.</p>\r\n', 'http://localhost/dtdd/public/images/img_news/ImageView_aspx.jpg'),
(2, 'Windows Phone 8 của Samsung sắp được bán ở Singapore', 'Là điện thoại chạy Windows Phone 8 đầu tiên, ra mắt từ tháng 8 năm ngoái, nhưng Samsung Ativ S lại xuất hiện trên thị trường chậm hơn nhiều so với các đối thủ HTC 8X và Nokia Lumia 920.\r\n', '<p style="text-align: center;">\r\n	<img alt="" src="http://localhost/dtdd/public/images/img_news/ImageView2.jpg" style="width: 500px; height: 386px;" /></p>\r\n<p style="text-align: center;">\r\n	<span style="font-size:12px;">Ativ S chạy Windows Phone 8 với thiết kế lấy cảm hứng giống <a href="http://viettelstore.vn/Home/San-pham,Dien-thoai/Hang-san-xuat,Samsung/Samsung-Galaxy-S-III-I9300/">Galaxy S III</a> v&agrave; <a href="http://viettelstore.vn/Home/San-pham,Dien-thoai/Hang-san-xuat,Samsung/Samsung-Galaxy-Note-II-N7100/">Note II</a></span></p>\r\n<p style="text-align: justify;">\r\n	Tại triển l&atilde;m IFA 2012 th&aacute;ng 8 năm ngo&aacute;i, c&ugrave;ng với <a href="http://viettelstore.vn/Home/San-pham,Dien-thoai/Hang-san-xuat,Samsung/Samsung-Galaxy-Note-II-N7100/">Galaxy Note II</a>, Samsung đ&atilde; g&acirc;y bất ngờ khi l&agrave; h&atilde;ng đầu ti&ecirc;n c&ocirc;ng bố smartphone chạy Windows Phone 8. Tuy nhi&ecirc;n, sản phẩm n&agrave;y li&ecirc;n tục bị tr&igrave; ho&atilde;n ng&agrave;y b&aacute;n. Thậm ch&iacute;, d&ugrave; c&oacute; th&ocirc;ng tin Ativ S bắt đầu được b&aacute;n từ th&aacute;ng 12 cuối năm ngo&aacute;i ở Bắc Mỹ v&agrave; ch&acirc;u &Acirc;u, Windows Phone của Samsung vẫn vắng b&oacute;ng tr&ecirc;n thị trường v&agrave; rất hiếm người được sở hữu.<br />\r\n	<br />\r\n	Tuy nhi&ecirc;n, theo th&ocirc;ng tin mới từ Cnet Asia, Samsung đang khởi động lại kế hoạch với điện thoại Windows Phone 8 của m&igrave;nh khi kể từ 2/3, Ativ S sẽ được ph&aacute;t h&agrave;nh ở Singapore. Sản phẩm c&oacute; gi&aacute; b&aacute;n 798 đ&ocirc;la Singapore, tương đương khoảng 13,4 triệu đồng, rẻ hơn <a href="http://viettelstore.vn/Home/San-pham,Dien-thoai/Hang-san-xuat,Samsung/Samsung-Galaxy-S-III-I9300/">Galaxy S III</a> v&agrave; <a href="http://viettelstore.vn/Home/San-pham,Dien-thoai/Hang-san-xuat,Samsung/Samsung-Galaxy-Note-II-N7100/">Note II</a>. Trong khi đ&oacute;, Ativ S vẫn chưa c&oacute; kế hoạch ph&aacute;t h&agrave;nh ở Việt Nam.<br />\r\n	<br />\r\n	So với c&aacute;c model Windows Phone 8 đang c&oacute; tr&ecirc;n thị trường, Ativ S vẫn l&agrave; model c&oacute; cấu h&igrave;nh mạnh v&agrave; tốt với m&agrave;n h&igrave;nh Super AMOLED HD k&iacute;ch thước 4,8 inch. M&aacute;y d&ugrave;ng vi xử l&yacute; l&otilde;i k&eacute;p tốc độ 1,5 GHz của Qualcomm, RAM 2 GB v&agrave; đi k&egrave;m camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 8 megapixel.</p>\r\n', 'http://localhost/dtdd/public/images/img_news/ImageView2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE IF NOT EXISTS `tblpayment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TT_HoaDon` longtext COLLATE utf8_unicode_ci NOT NULL,
  `TenKhachHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`Id`, `TT_HoaDon`, `TenKhachHang`, `DiaChi`, `Email`, `SDT`) VALUES
(1, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>Samsung Galaxy Y S5360</td><!---name--->\r\n								<td>1</td>\r\n								<td>17.190.000VND</td><!---price--->\r\n							 </tr><tr style=''text-align:center;''>\r\n								<td>2</td><!---STT---->\r\n								<td>Tấm dán MH Samsung Galaxy Tab 10.1</td><!---name--->\r\n								<td>1</td>\r\n								<td>80.000VND</td><!---price--->\r\n							 </tr><tr style=''text-align:center;''>\r\n								<td>3</td><!---STT---->\r\n								<td>phu kien 5 thanh cong </td><!---name--->\r\n								<td>1</td>\r\n								<td>68.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>17.338.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>3</td>\r\n							</tr>\r\n					</table>', 'Lê Quốc Tú', 'Mỹ Luông, Chợ Mới, An Giang', 'it.lequoctu@gmail.com', '01689433214'),
(2, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>Iphone 5</td><!---name--->\r\n								<td>1</td>\r\n								<td>17.990.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>17.990.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>1</td>\r\n							</tr>\r\n					</table>', 'Đoàn Thị Viện', 'Trà Vinh', 'vien@gmail.com', '01234569874'),
(3, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>BlackBerry Z10</td><!---name--->\r\n								<td>1</td>\r\n								<td>14.999.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>14.999.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>1</td>\r\n							</tr>\r\n					</table>', 'lequoctu', 'an giang', 'darklqt_2008@yahoo.com', '0763626173'),
(4, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>Sony Xperia Z3</td><!---name--->\r\n								<td>2</td>\r\n								<td>38.000.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>38.000.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>2</td>\r\n							</tr>\r\n					</table>', 'admin2013', 'admin2013', 'admin@gmail.com', '9999888223'),
(5, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>LG Optimus L5 Dual E615</td><!---name--->\r\n								<td>1</td>\r\n								<td>3.969.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>3.969.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>1</td>\r\n							</tr>\r\n					</table>', 'Đạt Trần', 'Chợ Mỹ Luông', 'Dat@yahoo.com', '0235698564'),
(6, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>Nokia Lumia 520</td><!---name--->\r\n								<td>1</td>\r\n								<td>3.899.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>3.899.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>1</td>\r\n							</tr>\r\n					</table>', 'Lê Quốc Tú', 'Long Xuyên', 'thuytran0286@yahoo.com.vn', '01234956784'),
(7, '\r\n					<table>\r\n						<thead>\r\n							<tr style=''text-align:center;''>\r\n								<th>STT</th>\r\n								<th>Tên Sản Phẩm</th>\r\n								<th>Số Lượng</th>\r\n								<th>Giá</th>\r\n							</tr>\r\n						</thead><tr style=''text-align:center;''>\r\n								<td>1</td><!---STT---->\r\n								<td>Samsung Galaxy S4 I9500</td><!---name--->\r\n								<td>1</td>\r\n								<td>16.990.000VND</td><!---price--->\r\n							 </tr><tr>\r\n								<td colspan=''3''><strong>Tổng tiền</strong></td>\r\n								<td>\r\n								<div style=''color:red; text-align:center;''>16.990.000VND</div>\r\n								</td>\r\n							 </tr>\r\n							<tr>\r\n								<td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n								<td style=''text-align:center;''>1</td>\r\n							</tr>\r\n					</table>', 'nguyen van a', 'fsfsfsf', 'it.lequoctu@gmail.com', '01689433214'),
(8, '\r\n                        <table>\r\n                            <thead>\r\n                                <tr style=''text-align:center;''>\r\n                                    <th>STT</th>\r\n                                    <th>Tên Sản Phẩm</th>\r\n                                    <th>Số Lượng</th>\r\n                                    <th>Giá</th>\r\n                                </tr>\r\n                            </thead><tr style=''text-align:center;''>\r\n                                    <td>1</td><!---STT---->\r\n                                    <td>Samsung Galaxy S4 I9500</td><!---name--->\r\n                                    <td>1</td>\r\n                                    <td>16.990.000VND</td><!---price--->\r\n                                 </tr><tr>\r\n                                    <td colspan=''3''><strong>Tổng tiền</strong></td>\r\n                                    <td>\r\n                                    <div style=''color:red; text-align:center;''>16.990.000VND</div>\r\n                                    </td>\r\n                                 </tr>\r\n                                <tr>\r\n                                    <td colspan=''2''><strong>Số lượng hàng trong giỏ</strong></td>\r\n                                    <td style=''text-align:center;''>1</td>\r\n                                </tr>\r\n                        </table>', 'Đoàn Thị Viện', 'dfsdfsdf', 'vien@gmail.com', '01689433214');

-- --------------------------------------------------------

--
-- Table structure for table `tblslider`
--

CREATE TABLE IF NOT EXISTS `tblslider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblslider`
--

INSERT INTO `tblslider` (`Id`, `Hinh`, `TieuDe`, `Link`) VALUES
(1, 'http://localhost/dtdd/public/images/img_products/LG-Optimus-L5-Dual-E615-m.jpg', 'demo lan 2', 'http://localhost/dtdd/home/detail_news/2'),
(3, 'http://localhost/dtdd/public/images/img_products/227dbc97355815450a63ff501a69d193_tan-dan-p7500_thumbnail_260_260.jpg.png', 'thanh cong', 'http://localhost/dtdd/home/detail_news/1');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Level` int(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `Username`, `Password`, `Level`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
