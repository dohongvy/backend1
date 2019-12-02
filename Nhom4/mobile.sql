-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2019 lúc 10:18 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_cart`
--

CREATE TABLE `bill_cart` (
  `ID_Bill` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `price_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_cart`
--

INSERT INTO `bill_cart` (`ID_Bill`, `username`, `date`, `price_total`) VALUES
(1, 'Vy', '0000-00-00', 198377000000),
(2, 'Trang', '2019-11-11', 12871600),
(3, 'Vy', '2019-11-29', 13123300),
(4, 'trang', '2019-11-29', 66000000),
(5, 'trang', '2019-11-29', 66000000),
(6, 'trang', '2019-11-29', 66000000),
(7, 'trang', '2019-11-29', 66000000),
(8, 'trang', '2019-11-29', 66000000),
(9, 'trang', '2019-11-29', 66000000),
(10, 'trang', '2019-11-29', 66000000),
(11, 'trang', '2019-11-29', 66000000),
(12, 'trang', '2019-11-29', 66000000),
(13, 'trang', '2019-11-29', 66000000),
(14, 'trang', '2019-11-29', 66000000),
(15, 'trang', '2019-11-29', 66000000),
(16, 'trang', '2019-11-29', 66000000),
(17, 'trang', '2019-11-29', 66000000),
(18, 'trang', '2019-11-29', 66000000),
(19, 'trang', '2019-11-29', 66000000),
(20, 'trang', '2019-11-29', 66000000),
(21, 'trang', '2019-11-29', 22000000),
(22, 'trang', '2019-11-29', 22000000),
(23, 'trang', '2019-11-29', 11000000),
(24, 'trang', '2019-11-29', 11000000),
(25, 'trang', '2019-11-29', 11000000),
(26, 'trang', '2019-12-01', 11000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ID` int(225) NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `product_ID` int(225) NOT NULL,
  `username` varchar(500) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`ID`, `content`, `product_ID`, `username`) VALUES
(1, 'Tôi rất thích sản phẩm này', 1, 'trang'),
(2, 'vy', 21, 'trang'),
(3, 'hihi haha', 21, 'trang'),
(4, 'hihi', 21, 'trang'),
(5, 'Không biết', 21, 'trang'),
(6, 'TRang hâm', 20, 'trang'),
(7, 'Trang kkkkk', 20, 'trang'),
(8, 'Công bình luận nè mấy đứa', 21, 'cong'),
(9, 'dsd', 28, 'trang'),
(10, 'edqjhnj', 14, 'trang'),
(11, 'èvqea', 14, 'trang'),
(12, 's', 12, 'trang'),
(13, 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2019 by Refsnes Data. All Rights Reserved.\r\nPowered by W3.CSS.', 12, 'trang'),
(14, 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2019 by Refsnes Data. All Rights Reserved. Powered by W3.CSS.', 12, 'trang'),
(15, 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2019 by Refsnes Data. All Rights Reserved. Powered by W3.CSS.', 12, 'trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_ID` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `manu_img` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_ID`, `manu_name`, `manu_img`) VALUES
(1, 'Apple', 'Iphonelogo.jpg'),
(2, 'SamSung', 'SamSunglogo.jpg'),
(3, 'Sony', 'exlogo.jpg'),
(11, 'ABC', '1.PNG'),
(12, '124dgdsdgsefs', 'canh-hoa-bi-ngan-dro-dep_111158061.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `manu_ID` int(11) NOT NULL,
  `type_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `name`, `price`, `image`, `description`, `manu_ID`, `type_ID`) VALUES
(1, 'j1', 11000, 'j1.jpg', 'mua cho vui dung co su dung', 2, 1),
(3, 'Iphone 5', 11000000, 'iphone5.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 1),
(4, 'Iphone 6', 11000000, 'iphone6.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 1),
(5, 'E72', 11000000, 'E72.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 4, 1),
(6, 'Iphone 6plus', 11000000, 'iphone6plus.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 1),
(7, 'Ipad 2', 11000000, 'ipad2.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 4),
(8, 'Macbook 13inch', 11000000, 'macbook13.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 3),
(9, 'Galaxy tab A8', 11000000, 'tabA8.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 2, 4),
(10, 'Ipad gen6', 11000000, 'ipadgen6.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 4),
(11, 'Galaxy fodl', 11000000, 'galaxyfodl.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 2, 1),
(12, 'Xperia Z5123', 11000000, 'Xperiaz5.jpg', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 1, 3),
(17, 'Apple Warth seri 2 hihi', 11000000, '', 'mua ve deo khoe thien ha', 0, 0),
(18, 'Blackbery key2', 11000000, '', 'iPad WiFi New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 0, 0),
(19, 'Back123', 123, '201-screenshot.PNG', 's123', 0, 0),
(30, '', 0, '', '', 4, 5),
(31, '', 0, '', '', 4, 5),
(32, '', 0, '', '', 4, 5),
(33, '', 0, '', '', 4, 5),
(34, '', 0, '', '', 4, 5),
(35, '', 0, '', 'sa', 4, 5),
(36, '', 0, '', '', 4, 5),
(37, '', 0, '', '', 4, 5),
(38, 'sg', 43, '', 'gew', 4, 5),
(39, 'dg', 6535, '', 'gS', 4, 5),
(40, 'ưd', 0, '', 'ư', 4, 5),
(41, 'ưd', 0, '', 'ư', 4, 5),
(42, 'ưd', 0, '', 'ư', 4, 5),
(43, 'ưd', 0, '', 'ư', 4, 5),
(45, 'FWE', 145363, '', 'FWE', 4, 5),
(46, 'EQ', 642, 'phong-tuc-chat-dao-ngay-tet-chot-nong-tren-cong-dong-mang-1.jpg', 'ẲH', 4, 5),
(48, 'gả', 55, 'step0.PNG', 'gửa', 4, 5),
(49, 'Smart watch123', 55, '', 'ưT', 5, 3),
(51, 'test1', 145, 'canh-hoa-bi-ngan-dro-dep_111158061.jpg', 'q3r', 4, 5),
(53, 'Smart watch123', 144234, 'phong-tuc-chat-dao-ngay-tet-chot-nong-tren-cong-dong-mang-1.jpg', 'gaes', 5, 1),
(54, 'Smart watch123', 144234, 'phong-tuc-chat-dao-ngay-tet-chot-nong-tren-cong-dong-mang-1.jpg', 'gaes', 5, 1),
(55, 'Smart watch123', 3564757, 'phong-tuc-chat-dao-ngay-tet-chot-nong-tren-cong-dong-mang-1.jpg', 'e5id76', 5, 2),
(56, 'name', 123567890, 'hinh-nen-hinh-anh-hoa-bo-cong-anh-dep-nhat-8-1400x788.jpg', 'mô tả', 5, 1),
(57, '$name', 0, '$image', '$description', 0, 0),
(58, 'Smart watch123', 123456789, 'phong-tuc-chat-dao-ngay-tet-chot-nong-tren-cong-dong-mang-1.jpg', 'testthdsfgjlabfh', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_ID` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `type_img` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_ID`, `type_name`, `type_img`) VALUES
(1, 'Phone ', 'phone.jpg'),
(2, 'Headphone', 'headphone.jpg'),
(3, 'Laptop', 'laptop.jpg'),
(4, 'Tablet', 'table.jpg'),
(5, 'Smart watch', 'sm.jpg'),
(12, 'ABCDEF123', '222222222.PNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `type` int(10) NOT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `first_name` varchar(250) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `last_name`, `first_name`) VALUES
(1, 'vy', '12345', 1, 'Vy', 'Đỗ Thị Hồng'),
(2, 'cong', '12345', 0, 'Công', 'Lê  Xuân Công'),
(3, 'thang', '12345', 0, 'Thắng', 'Lê Văn'),
(4, 'trang', '12345', 0, 'Trang', 'Nguyễn Thị Thùy'),
(5, 'admin', '12345', 0, 'min', 'ad'),
(9, 'vy12', '123', 0, 'Vy', 'Trần Diễm'),
(10, 'Trang12', '123', 0, 'Trang', 'Lê Thị'),
(11, '17211TT4118', '1', 0, 'Hùng', 'Nguyễn Tấn'),
(12, 'vy_test12', '12345', 0, 'Vy', 'Đỗ Hồng'),
(13, 'vy21', '12345', 0, 'Vy', 'Đỗ'),
(14, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ware`
--

CREATE TABLE `ware` (
  `ID` int(11) NOT NULL,
  `ID_Bill` int(11) NOT NULL,
  `name_product` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ware`
--

INSERT INTO `ware` (`ID`, `ID_Bill`, `name_product`, `qty`) VALUES
(1, 15, 's10', 1),
(2, 19, 'Galaxy fodl', 5),
(3, 19, 'Xperia Z5', 1),
(4, 20, 'Galaxy fodl', 5),
(5, 20, 'Xperia Z5', 1),
(6, 21, 'Xperia Z5', 2),
(7, 22, 'Galaxy fodl', 1),
(8, 22, 'Ipad gen6', 1),
(9, 23, 'Xperia Z5', 1),
(10, 24, 'Macbook 13inch', 1),
(11, 25, 'Galaxy fodl', 1),
(12, 26, 'Xperia Z5123', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill_cart`
--
ALTER TABLE `bill_cart`
  ADD PRIMARY KEY (`ID_Bill`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_ID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ware`
--
ALTER TABLE `ware`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill_cart`
--
ALTER TABLE `bill_cart`
  MODIFY `ID_Bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ware`
--
ALTER TABLE `ware`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
