-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 23, 2017 lúc 11:51 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onlineshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
(1, 'Sáo Việt', 'Sáo làm bằng trúc, nứa, xuất xứ từ Việt Nam', '2017-02-09 00:00:00', NULL),
(2, 'Sáo Dizi', 'Sáo xuất xứ từ Trung Quốc, được gia công rất bắt mắt ', '2017-02-09 00:00:00', NULL),
(3, 'Sáo Mèo', NULL, '2017-02-09 00:00:00', NULL),
(4, 'Sáo Bầu', NULL, '2017-02-09 00:00:00', NULL),
(5, 'Tiêu - Sáo Dọc', NULL, '2017-02-13 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `amount` float NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping_address`, `amount`, `status`, `date_created`, `date_updated`) VALUES
(47, 0, NULL, 1600000, NULL, '2017-02-22 07:39:37', NULL),
(48, 0, NULL, 2200000, NULL, '2017-02-22 07:40:06', NULL),
(49, 0, 'dsdsds', 2600000, NULL, '2017-02-22 07:41:39', NULL),
(50, 0, '', 250000, NULL, '2017-02-23 06:43:08', NULL),
(51, 0, '', 250000, NULL, '2017-02-23 06:43:08', NULL),
(52, 0, '', 250000, NULL, '2017-02-23 06:43:08', NULL),
(53, 0, '', 250000, NULL, '2017-02-23 06:43:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` float NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `price`, `status`, `date_created`, `date_updated`) VALUES
(3, 0, 3, 50, 250000, 1, '2017-02-14 13:55:02', NULL),
(4, 0, 4, 90, 500000, 1, '2017-02-14 13:55:56', NULL),
(5, 0, 5, 110, 300000, 1, '2017-02-14 13:56:29', NULL),
(6, 0, 6, 120, 560000, 1, '2017-02-14 13:56:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `tags` varchar(1000) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `creator_id`, `image_url`, `description`, `price`, `quantity`, `tags`, `status`, `date_created`, `date_updated`, `category_id`) VALUES
(1, 'Sáo Nứa Tone Đô Cho Người Mới', 0, 'saonuado.jpg', 'nothing', 250000, 50, 'dsds', 1, '2017-02-09 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'Sáo nứa tone Đô ( loại phổ thông )', 0, 'saonuado1.jpg', 'Sáo nứa tone Đô là loại phổ biến nhất trong các loại sáo, được làm từ (trúc) nứa vùng Lâm Đồng cho màu sắc đẹp , âm thanh trong sáng.\r\n--------------------------------------------------------------------------------------------\r\nĐược chế tác thủ công tỉ mỉ - đo âm chuẩn cao độ 440-443hz\r\nSản phẩm cam kết 100% như trong hình.\r\n\r\nTặng kèm túi nhung đựng sáo cho tất sản phẩm', 200000, 50, 'nothing', 1, '2017-02-09 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Sáo Son trầm', 0, 'saosontram.jpg', 'Sáo son trầm thuộc dòng sáo ngang Việt Nam, điểm nổi bật của sáo Son trầm là cho âm thanh trầm ấm, thích hợp cho những bản nhạc buồn, trữ tình da diết.', 250000, 50, 'nothing', 1, '2017-02-09 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Sáo nứa cao cấp CN1', 0, 'saonuacaocapCN1.jpg', 'dsds', 500000, 0, 'dsds', 1, '2017-02-09 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Sáo Nứa Cao Cấp', 0, 'saonuacaocap.jpg', 'Sáo được chế tác từ những ống nứa vùng Lâm Đồng, độ tròn,dày khá tiêu chuẩn.<br />\r\nCao độ 442-445 Hz', 300000, 50, 'nothing', 1, '2017-02-10 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Sáo dizi vàng khớp kép', 0, 'dizivang.jpg', '-Sáo dizi Vàng được làm từ trúc quế, độ già trên 5 năm, được sơn bằng nước sơn cao cấp,màu vàng nhũ.\r\n- Điểm nổi bật so với tất cả các dòng khách đó là: Khớp nối kép rất chắc chắn, âm thanh được đánh giá thuộc loại dizi tôt nhất trên thị trường dizi hiện tại.\r\n-Shop cam kết 100% hàng được làm thủ công, tỉ mỉ tới từng chi tiết.', 560000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(7, 'Dizi đen khớp Kép', 0, 'diziden.jpg', 'nothing', 450000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(8, 'Dizi D21 khớp kép', 0, 'dizid21.jpg', 'Dizi D21 khớp kép là loại dizi cao cấp \r\n--------------------------------------------------\r\nĐược đánh giá là loại Dizi cho âm sắc hay nhất, dùng cho độc tấu các ca khúc nhạc hoa \r\nĐược chế tác từ trúc siêu già trên 5 năm vùng Chiết Giang.', 550000, 50, 'nothing ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(9, 'Sáo Dizi trúc tím cao cấp', 0, 'dizitructim.jpg', '-Sáo được làm từ trúc tím của vùng Hoa Đông và Chiết Giang.\r\nLoại trúc được chọn để chuyên sản xuất các loại nhạc cụ cao cấp như, sáo dizi, động tiêu hay sáo mèo cao cấp.\r\n-Trúc bền màu vĩnh viễn , không bị phai màu theo thời gian.', 500000, 50, 'nothing ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(10, 'Sáo Dizi ngọc D27', 0, 'dizid27.jpg', 'Xuất xứ từ Chiết Giang - nơi có những xưởng sản xuất nhạc cụ lớn nhất Trung Quốc,\r\nSáo dizi ngọc D27 nay đã được saotruccaodinh.com nhập khẩu trực tiếp và phân phối về Việt Nam với số lượng cực lớn trong các năm qua.', 250000, 50, 'nothing', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(11, 'Sáo Dizi đen', 0, 'diziden(2).jpg', 'Sáo Dizi đen có nước sơn bền,hai đầu giả đá hoa cương\r\nĐặc điểm: Trúc dày,khớp nối inox siêu bền,', 300000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(12, 'Dizi D21 ( Vip )', 0, 'dizid21(vip).jpg', 'Dizi Vip (Mã D21) là loại dizi cao cấp.\r\n--------------------------------------------------\r\nĐược đánh giá là loại Dizi cho âm sắc hay nhất, dùng cho độc tấu các ca khúc nhạc hoa \r\nĐược chế tác từ trúc già trên 5 năm vùng Chiết Giang.', 450000, 0, 'nothing', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(13, 'Dizi bạch mã', 0, 'dizibachma.jpg', 'Sáo Dizi bạch mã có màu sắc bắt mắt, hình thức đẹp, âm thanh khá ổn.\r\nÂm thanh và chất lượng tương đối giống dizi xanh\r\n----\r\nNguyên liệu từ trúc vùng Chiết Giang, khớp nối inox hai đầu giả ngọc', 350000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(14, 'Sáo Dizi xanh', 0, 'dizixanh.jpg', 'Sáo Dizi xanh có màu sắc bắt mắt, hình thức đẹp, âm thanh khá ổn.\r\n----\r\nNguyên liệu từ trúc vùng Chiết Giang, khớp nối inox hai đầu giả ngọc\r\n-----------------------------------------------------------------------\r\nThích hợp cho những người đã chơi sáo tốt - Là món quà tặng vô cùng ý nghĩa !\r\nTặng kèm túi nhung,màng rung khi mua hàng', 350000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(15, ' Sáo Dizi D23 ', 0, 'dizid23.jpg', 'Sáo Dizi D23 là sản phẩm giá rẻ nhưng cho âm thanh khá hay, được chọn lựa tương đối kỹ,\r\n----\r\nHiện D23 đang là sản phẩm sáo Dizi bán chạy nhất shop.\r\n--------------------------------------------------------------------\r\n\r\nĐược chế tác từ trúc già, lớp sơn bền màu,có khớp nối thuận tiện cho vận chuyển và cất dữ, \r\nĐặc biệt hơn khi saotruccaodinh.com tặng theo sản phẩm: 01 túi nhung - 02 gói màng rung - 1 dây treo sáo cho khách hàng mà không mất thêm khoản chi phí phát sinh nào.', 220000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(16, 'Sáo Si giáng (Bb)', 0, 'saosigiang.jpg', 'Sáo si giáng là một trong những dòng sáo được nhiều người yêu thích nhất vì sáo ở quãng tầm trung khớp với rất nhiều beat gốc của các bài hát trên mạng', 250000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(17, 'Tiêu trúc tím hai khúc', 0, 'tieutructim2khuc.jpg', 'Tiêu bát khổng trúc tím 2khúc dễ tháo lắp và vận chuyển, được sản xuất từ trúc tím, có khớp nối inox.\r\n----------------------------------------------------------------------------\r\nÂm thanh trầm , ấm thích hợp với những bản nhạc buồn , có sẵn tone đô ,rê\r\nMàu sắc đen đậm đặc trưng.\r\nTặng kèm túi nhung và dây treo khi mua hàng.', 400000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5),
(21, 'Sáo mèo kép trúc tím', 0, 'saomeokeptructim.jpg', '-Sáo Mèo kép được chế tác dựa trên thang âm của hai cây sáo mèo đơn, được ghép lại công phu ,giúp cho cây mèo có quãng rộng hơn, nhờ đó có thể chơi được nhiều ca khúc hơn so với cây mèo đơn.', 790000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(24, 'Dizi đại địch', 0, 'dizidaidich.jpg', 'Được chế tác từ trúc tím siêu già, cấu tạo hai khúc,có khớp nối kép và hai đầu bọc sừng', 1500000, 10, 'nothing ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(25, 'Bộ sáo ngang Việt Nam (8 cây)', 0, 'bosaotruc8.jpg', 'Trên đây gồm đầy đủ các tone như: Fa, son, son#, la, sib , si, đô và rê\r\nGiúp người dùng có thể chơi được hết tất cả các bài mà không gặp khó khăn gì với beat nhạc.', 1500000, 10, 'nothing ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(27, 'Sáo mèo nữ', 0, 'saomeonu.jpg', '-Sáo mèo nữ thuộc 1 trong hai cây của cặp sáo H\'Mông (Cặp sáo mèo Việt) \r\n-Mèo nữ rất nhỏ gọn (khoảng 30-35 CM) nhưng lại phát ra âm thanh vô cùng trong trẻo và vang vọng.', 300000, 50, 'nothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(2) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `rate`, `comment`, `status`, `date_created`, `date_updated`) VALUES
(1, 1, 1, 5, 'good', 1, '2017-02-17 09:19:30', NULL),
(2, 2, 1, 5, 'very good', 1, '2017-02-17 10:13:43', NULL),
(3, 1, 2, 1, 'not good', 1, '2017-02-17 10:26:40', NULL),
(4, 1, 3, 3, 'it\'s OK', 1, '2017-02-17 10:27:15', NULL),
(5, 1, 4, 2, 'so bad', 1, '2017-02-17 10:27:51', NULL),
(6, 1, 5, 3, 'not bad ', 1, '2017-02-17 10:33:44', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Peanut Drifted', 'toymusic1992@gmail.com', '123456', 0, '2017-02-08 08:46:28', NULL),
(2, 'abc', 'toy_music1993@gmail.com', '12345', 1, '2017-02-08 02:14:34', NULL),
(3, 'Cu Tí', 'utechay1993@gmail.com', '12345678', 0, '2017-02-09 06:45:24', NULL),
(17, 'Tùng', 'toy1993@gmail.com', '$2y$10$psRgULc.ufxfWj4MvV.2ROPUP8cdvq5kR5qHoZIlNcHhi.RIRXMk2', 0, '2017-02-10 10:10:08', NULL),
(19, 'Tùng', 'toy_music1@gmail.com', '$2y$10$egaEQTOKlY4XROc4D9LCr.H4qkPWCR8fUKICgd2iR4aVNPYAgyIeC', 0, '2017-02-10 10:12:33', NULL),
(20, 'Tùng', 'toy_music123@gmail.com', '$2y$10$mjQ36aPL1h67JDg7c9G65eiX5HyCeMWtQxY5ffyfRbiiPFErxwBtS', 0, '2017-02-14 01:28:08', NULL),
(21, 'Peanut Drifted', 'toymusic@gmail.com', '123456', 0, '2017-02-22 06:50:20', NULL),
(22, 'Tùng', 'utechay123@gmail.com', '$2y$10$psRgULc.ufxfWj4MvV.2ROPUP8cdvq5kR5qHoZIlNcHhi.RIRXMk2', 0, '2017-02-22 07:07:28', NULL),
(23, 'abcd', 'abc123@gmail.com', '1', 0, '2017-02-23 04:30:29', NULL),
(36, 'abc', 'abc1997@gmail.com', '$2y$10$hScRgE78cdWauTXnYqE/jOlowec0usmxFstb1m5bU7tr4aUdHzTu6', 0, '2017-02-23 09:31:49', NULL),
(37, 'xyz', 'xyz@gmail.com', '$2y$10$hScRgE78cdWauTXnYqE/jOlowec0usmxFstb1m5bU7tr4aUdHzTu6', 0, '2017-02-23 10:43:53', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
