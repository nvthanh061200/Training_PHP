-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2021 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 1,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `permission`, `username`, `password`, `address`, `fullname`) VALUES
(125, 1, 'YEN', '$2y$10$JtGM4zjs57EhMNmw5Wif4uUYgQAnD5VHYl1NcqU3G7HYaPXZrS/qG', 'Phu tho1', 'ho hai yen'),
(126, 1, 'Lanh', '$2y$10$icp66d2VVHo8sIicy58nX.UJ43JGy7O6ccuMFcdZInOk4t0P9csJi', '  Nam Định', 'Trần Tuyết Lành'),
(128, 1, 'thanh@gmail.com', '$2y$10$a.COscyTTeUKitUekjyXt.r7kUWGUkW/oqdt1lnX3PUkh9aI1Y7Wu', 'admin', 'qq'),
(129, 1, 'phuc123fsdf', '$2y$10$tBa.xPOisp6ZGuEoy5HuiesAIwVffBYmgqsBmZaZ2X9KvUOyvJLFu', 'trai cau', 'nguyen hong phuc'),
(131, 1, 'thanh', '$2y$10$PggE21m1vXpfnDYxqJ1h9OUL.XF9Cw3D0TROejeYW0an3VOk8ogBC', 'Phú Lương', 'Trần Tuyết Lành'),
(133, 10, 'admin', '$2y$10$bTg/6EVdPUK9msg0aTVUkumIKnNGQTv75IlGybL0L20KHD6dLdTBq', 'admin', 'Trần Tuyết Lành'),
(140, 1, 'anh', '$2y$10$6siOILIt8jcZIoDHzlETvePvJQWhr9RWjuJa8eeycMj3p6lV6d4bq', 'Phú Bình 2', 'Nguyen Huu Anh'),
(143, 1, 'qwertyu', '$2y$10$zXRRyulZd8WMnZmyMF97X.6OJnq5pv.Kec77S7iVMuUJ8FtU6D3Ia', 'qwertyui', '1234567');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `id_loai_tin` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `hinh_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `id_loai_tin`, `title`, `content`, `hinh_anh`) VALUES
(39, 111, 'MAC', 'Laptop Apple HPPro M1 2020 (Z11C000CJ) với chip M1 dành riêng cho MacBook đưa hiệu năng của MacBook Pro 2020 lên một tầm cao mới. Màn hình Retina siêu nét, thời lượng pin ấn tượng và hàng loạt các tính năng hiện đại giúp bạn có được trải nghiệm làm việc chuyên nghiệp nhất. update lan 2', 'm1.jpg'),
(45, 111, 'MAC', 'hp cuc khoe nhawwwwww 3333 ', 'hp3.jpg'),
(46, 111, 'MAC', 'Không gian hiển thị tuyệt mĩ trên màn hình 13.3 inch\r\nMàn hình Retina (2560 x 1600) mang đến những hình ảnh, văn bản sắc nét, những thước phim sống động nhất. Tấm nền IPS cho góc nhìn rộng, hiển thị đồng nhất qua từng góc nhìn. Công nghệ True Tone cân bằng màu trắng tự động để phù hợp với nhiệt độ màu của ánh sáng tự nhiên xung quanh, đem đến trải nghiệm xem tự nhiên nhất.', 'hp3.jpg'),
(47, 112, 'PH', 'HP Pavilion Gaming 15 dk1159TX i7 (31J36PA) có hiệu năng đa nhiệm mạnh mẽ với chip Intel Core i7 Gen 10 và card GTX 1650Ti 4GB mang đến trải nghiệm chơi game giải trí, làm việc hoàn hảo.', 'hp-omen-15-ek0078tx-i7-26y68pa-600x600.jpg'),
(48, 111, 'MAC', 'Mac pro 2019 cực mạnh', 'm2.jpg'),
(49, 112, 'PH', 'Laptop HP sở hữu chip Intel Core i7 10750H thế hệ 10 chuyên dụng cho chơi game giúp tăng hiệu năng đa nhiệm và tốc độ lưu xuất định dạng file video với độ phân giải 4K nhưng vẫn tiết kiệm điện năng đáng kể giúp bạn thoải mái chiến game với xung nhịp mạnh mẽ từ 2.6 GHz lên đến 5.0 GHz dưới sự hỗ trợ của Turbo Boost.', 'hp-pavilion-gaming-15-dk1159tx-i7-10750h-8gb-32gb-600x600.jpg'),
(51, 111, 'MAC', 'MAc 2021', 'm1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission` (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
