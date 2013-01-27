-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2013 at 12:28 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thichtruyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `password`) VALUES
('dasdas', '89defae676abd3e3a42b41df17c40096'),
('demo', 'fe01ce2a7fbac8fafaed7c982a04e229'),
('dinhkhanh', '30929257e98316931c841283bdf193d6'),
('truc', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE IF NOT EXISTS `loai` (
  `loai_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`loai_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`loai_id`, `ten`, `hinh`, `excerpt`, `link`) VALUES
(1, 'Truyện tranh', 'http://127.0.0.1/img/hinh/4fc8f1845d55dd6f3eaa3c1baf39533d.jpg', 'Truyện tranh là thể loại được rất nhiều trẻ nhỏ trên thế giới yêu thích, gắn liền với tuổi thơ của rất nhiều người.', ''),
(2, 'Truyện ngắn', 'http://127.0.0.1/img/hinh/truyenngan.jpg', 'Mỗi ngày đọc một vài truyện ngắn sẽ mang đến cho bạn những khoảng lặng ý nghĩa trong tâm hồn.', ''),
(4, 'Truyện bộ', 'http://127.0.0.1/img/hinh/truyenbo.jpg', 'Những bộ truyện dài cuốn hút người đọc từ đầu đến cuối.', ''),
(5, 'Truyện lẻ', 'http://127.0.0.1/img/hinh/truyenle.jpg', 'Truyện ngắn, truyện lẻ, tình tiết ngắn gọn nhưng hấp dẫn.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE IF NOT EXISTS `tacgia` (
  `tg_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`tg_id`, `ten`, `hinh`, `link`, `excerpt`) VALUES
(1, 'Masashi Kishimoto', 'http://127.0.0.1/img/hinh/fcd92d99643805195d767fc901db142b.jpg', 'http://en.wikipedia.org/wiki/Masashi_Kishimoto', 'Kishimoto Masashi (tiếng Nhật: 岸本斉史; phiên âm: Ngạn Bản Tề Sử; sinh ngày 8 tháng 11 năm 1974 ở Okayama, Nhật Bản[1]) là một họa sĩ truyện tranh đã được biết đến qua bộ truyện tranh nổi tiếng thế giới Naruto.Người em song sinh của Masashi, Kishimoto Seishi, cũng là một họa sĩ truyện tranh, tác giả của 666 Satan và Blazer Drive.'),
(2, 'Nguyễn Nhật Ánh', 'http://127.0.0.1/img/hinh/c933b3d092befce2bbd59b374c31dc75.jpg', 'http://vi.wikipedia.org/wiki/Nguy%E1%BB%85n_Nh%E1%BA%ADt_%C3%81nh', 'Nguyễn Nhật Ánh là tên và cũng là bút danh của một nhà văn Việt Nam chuyên viết cho tuổi mới lớn. Ông sinh ngày 7 tháng 5 năm 1955 tại huyện Thăng Bình, Quảng Nam.'),
(3, 'Nguyễn Ngọc Tư', 'http://127.0.0.1/img/hinh/bd8bb8f9df552d01c8c99bc7291d79e9.jpg', 'http://vi.wikipedia.org/wiki/Nguy%E1%BB%85n_Ng%E1%BB%8Dc_T%C6%B0', 'Nhà văn Nguyễn Ngọc Tư (sinh năm 1976 tại xã Tân Duyệt, huyện Đầm Dơi, tỉnh Cà Mau) là một nữ nhà văn trẻ của Hội nhà văn Việt Nam.\r\nTác phẩm nổi tiếng nhất của cô là tác phẩm Cánh đồng bất tận, đã nhận được giải thưởng của Hội nhà văn Việt Nam năm 2006.'),
(4, 'Nguyễn Quang Sáng', 'http://127.0.0.1/img/hinh/NhavanNQS.jpg', 'http://vi.wikipedia.org/wiki/Nguy%E1%BB%85n_Quang_S%C3%A1ng', 'Nhà văn Nguyễn Quang Sáng, còn có bút danh là Nguyễn Sáng chào đời ngày 12 tháng 1 năm 1932 tại xã Mỹ Luông (nay là thị trấn Mỹ Luông), huyện Chợ Mới, tỉnh An Giang. Trong thời kỳ kháng chiến chống Pháp, ông gia nhập quân đội và hoạt động ở chiến trường miền Nam'),
(6, 'Gosho Aoyama', 'http://127.0.0.1/img/hinh/goshoaoyama.jpg', 'http://en.wikipedia.org/wiki/Gosho_Aoyama', 'Aoyama Gōshō (Kanji:青山 剛昌; phiên âm: Thanh Sơn Cương Xương), tên khai sinh là Aoyama Yoshimasa (Kanji như bút danh), sinh ngày 21 tháng 6 năm 1963 tại Daiei, tỉnh Tottori, Nhật Bản. Ông là một nhà sáng tác truyện tranh, nổi tiếng với bộ truyện tranh Thám tử lừng danh Conan (名探偵コナン).'),
(7, 'Fujiko F. Fujio', 'http://127.0.0.1/img/hinh/fuji.jpg', 'http://vi.wikipedia.org/wiki/Fujiko_Fujio', 'Fujiko Fujio (Nhật: 藤子 不二雄 Đằng Tử Bất Nhị Hùng?) IPA: /ɸɯdʒiko ɸɯdʒio/ là bút danh chung của hai nghệ sỹ manga Nhật Bản.\r\nNăm 1987, họ chia tay để theo đuổi con đường sáng tác riêng rẽ và trở thành "Fujiko F. Fujio" và "Fujiko Fujio (A)".');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE IF NOT EXISTS `truyen` (
  `truyen_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tg_id` int(11) DEFAULT NULL,
  `loai_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`truyen_id`),
  KEY `tg_id` (`tg_id`),
  KEY `loai_id` (`loai_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`truyen_id`, `ten`, `excerpt`, `link`, `hinh`, `tg_id`, `loai_id`) VALUES
(3, 'Trại Hoa Vàng', 'Hẳn bạn đọc ở lứa tuổi học trò đã từng quen thuộc với tác giả Nguyễn Nhật Anh với những truyện ngắn và truyện dài đậm chất học trò như: Trại hoa vàng, Chú bé rắc rối, Phòng trọ ba người, Bồ câu không đưa thư, Những chàng trai xấu tính, Cô gái đến từ hôm qua, Trước vòng chung kết, Hạ đỏ, Hoa hồng xứ khác, Buổi chiều Windows, Ut Quyên và tôi... Với lối viết dung dị và cách chọn đề tài gần gũi với lứa tuổi học trò, như quan hệ thầy trò, trường lớp, bạn bè, gia đình... nên những truyện của ông chiếm được cảm tình của rất nhiều bạn đọc nhỏ tuổi. Họ hào hứng và nóng lóng đón đọc các trang viết của ông. HieuHoc.com sẽ lần lượt giới thiệu với bạn đọc các tác phẩm của ông', 'http://www.vn-zoom.com/f372/trai-hoa-vang-truyen-full-bo-day-214367.html', 'http://127.0.0.1/img/hinh/9a2c04d5a5ef77b52b79285bbd1968e8.jpg', 2, 2),
(6, 'Naruto', 'Naruto là bộ truyện được hàng triệu người yêu thích', 'https://www.facebook.com/media/set/?set=a.182101395247127.6829.181821898608410&type=1', 'http://127.0.0.1/img/hinh/cc149edcd5bc15c9cf9f3fbddcdc36df.jpg', 1, 1),
(7, 'Doremon', 'Doremon là bộ truyện được hàng triệu em nhỏ yêu thích, gắn liền với tuổi thơ của rất nhiều người.', 'http://www.facebook.com/12horoscopes.tc/app_539996576027189', 'http://127.0.0.1/img/hinh/fee8f860d4f13fdca09899b3f34a3921.jpg', 7, 1),
(12, 'Cánh đồng bất tận', 'Truyện kể về cuộc sống nay đây mai đó của một gia đình gồm người cha và hai đứa con (Điền và Nương) sau khi người mẹ đã bỏ theo một người đàn ông khác. Bối cảnh câu chuyện là vùng đồng quê miền Tây Nam Bộ với những người nông dân nghèo khó.\r\nCó nhiều ý kiến khác nhau về tác phẩm. Ý kiến không ủng hộ cho rằng nhà văn có cái nhìn đen tối về đồng quê, không hướng con người đến những điều tốt đẹp. Ý kiến ủng hộ cho rằng nhà văn đã viết về cuộc sống của những người nghèo khổ một cách thấu hiểu và không ngại dư luận.', 'http://vi.wikipedia.org/wiki/C%C3%A1nh_%C4%91%E1%BB%93ng_b%E1%BA%A5t_t%E1%BA%ADn', 'http://127.0.0.1/img/hinh/1c4a2b103140abb3c06172ee39b565e5.jpg', 3, 5),
(13, 'Cánh Đồng Hoang', 'Bộ phim mang tính cô đọng, khái quát cao, tả rõ tội ác của đế quốc Mỹ và lột tả tình cảm gia đình, tình cha con, tình vợ chồng sâu sắc và thắm thiết, nói lên việc mặc dù chiến tranh khốc liệt và sự hiểm nguy hằng ngày rình rập vẫn không thể ngăn nổi sự hồn nhiên, yêu đời trong cuộc sống của người dân thường yêu nước.', 'http://vi.wikipedia.org/wiki/C%C3%A1nh_%C4%91%E1%BB%93ng_hoang', 'http://127.0.0.1/img/hinh/canhdonghoang.png', 4, 4),
(14, 'Mắt biếc', 'Mắt Biếc là truyện dài của nhà văn Nguyễn Nhật Ánh. Đây là một trong những truyện có cái kết đau buồn nhất của Nguyễn Nhật Ánh', 'http://www.wattpad.com/75150-m%E1%BA%AFt-bi%E1%BA%BFc', 'http://127.0.0.1/img/hinh/52ef59a09619120dfd0c719d53930ad6.jpg', 2, 2),
(15, 'Conan', 'Conan là bộ truyện trinh thám được hàng triệu trẻ em yêu thích.', 'http://truyentranhconan.blogspot.com/', 'http://127.0.0.1/img/hinh/conan.jpg', 6, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`tg_id`) REFERENCES `tacgia` (`tg_id`),
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`loai_id`) REFERENCES `loai` (`loai_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
