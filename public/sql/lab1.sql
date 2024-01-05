-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th1 05, 2024 lúc 08:46 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `suruchi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `new`, `view`, `hot`) VALUES
(1, 'Product 1', 10.99, 'image1.jpg', 1, 100, 0),
(2, 'Product 2', 19.99, 'image2.jpg', 0, 200, 1),
(3, 'Product 3', 14.99, 'image3.jpg', 1, 150, 0),
(4, 'Product 4', 9.99, 'image4.jpg', 0, 50, 0),
(5, 'Product 5', 12.99, 'image5.jpg', 0, 300, 1),
(6, 'Product 6', 8.99, 'image6.jpg', 1, 75, 1),
(7, 'Product 7', 24.99, 'image7.jpg', 0, 225, 1),
(8, 'Product 8', 17.99, 'image8.jpg', 1, 125, 0),
(9, 'Product 9', 11.99, 'image9.jpg', 1, 80, 0),
(10, 'Product 10', 16.99, 'image10.jpg', 0, 250, 1),
(11, 'Product 11', 13.99, 'image11.jpg', 1, 180, 1),
(12, 'Product 12', 7.99, 'image12.jpg', 0, 40, 1),
(13, 'Product 13', 21.99, 'image13.jpg', 0, 275, 0),
(14, 'Product 14', 9.99, 'image14.jpg', 1, 90, 0),
(15, 'Product 15', 14.99, 'image15.jpg', 1, 120, 1),
(16, 'Product 16', 18.99, 'image16.jpg', 0, 220, 1),
(17, 'Product 17', 10.99, 'image17.jpg', 0, 60, 0),
(18, 'Product 18', 15.99, 'image18.jpg', 1, 140, 1),
(19, 'Product 19', 12.99, 'image19.jpg', 0, 190, 0),
(20, 'Product 20', 8.99, 'image20.jpg', 1, 100, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
