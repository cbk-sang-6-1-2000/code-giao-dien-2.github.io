-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2023 lúc 10:51 AM
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
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtincanhan`
--

CREATE TABLE `thongtincanhan` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `JapaneseLevel` varchar(50) NOT NULL,
  `EngLishLevel` varchar(50) NOT NULL,
  `FaroriteJob` varchar(11) NOT NULL,
  `WokingPlan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtincanhan`
--

INSERT INTO `thongtincanhan` (`id`, `FirstName`, `LastName`, `Country`, `PhoneNumber`, `Sex`, `Age`, `JapaneseLevel`, `EngLishLevel`, `FaroriteJob`, `WokingPlan`) VALUES
(1, 'Hoàng', 'Sang', 'VN', '0818940765', 'Nam', 23, 'N1', 'B2', 'LT', 'Chưa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtincanhan`
--
ALTER TABLE `thongtincanhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtincanhan`
--
ALTER TABLE `thongtincanhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
