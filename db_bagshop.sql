-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 09:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bagshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cate_id`, `cate_name`, `status`) VALUES
(1, 'PEDRO', 1),
(2, 'COACH', 1),
(3, 'CECI', 1),
(4, 'PUMA', 1),
(5, 'HAVAIANAS', 1),
(6, 'MLB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(2) NOT NULL,
  `user_id` int(2) DEFAULT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `user_id`, `firstname`, `lastname`, `birthday`, `phone`, `address`, `city`, `status`) VALUES
(1, 2, 'Bảoa', 'Nguyễna', '2002-03-11', '0946777124', '33 LMN', 'HCM', b'1'),
(2, 4, 'Nguyễn Ngọ', 'Bảoo', '2023-05-25', '0946777828', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', b'1'),
(3, 6, 'Bao', 'Nguyễn Ngọc', '1111-11-11', '0946777827', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minh', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(2) NOT NULL,
  `cus_id` int(2) DEFAULT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `notes` text DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cus_id`, `firstname`, `lastname`, `address`, `city`, `phone`, `email`, `date`, `notes`, `status`) VALUES
(1, 2, 'Nguyễn Ngọ', 'Bảo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minh', '0946777827', 'bao201102@gmail.com', '', '', b'1'),
(2, 2, 'Nguyễn Ngọ', 'Bảo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minh', '0946777827', 'bao201102@gmail.com', '', '', b'1'),
(3, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '', '', b'0'),
(4, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '', '', b'0'),
(8, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '', '', b'0'),
(9, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '', '', b'0'),
(10, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '02-06-2023 21:41:54', '', b'0'),
(11, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '02-06-2023 21:44:05', '', b'0'),
(12, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '02-06-2023 21:44:40', '', b'0'),
(13, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '03-06-2023 18:10:19', '', b'0'),
(14, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '03-06-2023 18:20:16', '', b'0'),
(15, 2, 'Nguyễn Ngọ', 'Bảoo', 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh', 'Hồ Chí Minhh', '0946777828', 'bao201102@gmail.com', '03-06-2023 20:58:14', '', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL,
  `prod_id` int(2) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `prod_id`, `prod_name`, `quantity`, `prod_price`, `status`) VALUES
(1, 1, 10, 'Túi đeo chéo nữ trong suốt dáng vuông trẻ trung', 1, 20, b'0'),
(2, 1, 9, 'Túi đeo chéo nữ phom vuông nhỏ đính đá lấp lánh', 2, 12, b'0'),
(3, 2, 4, 'Túi đeo chéo nữ nắp gập thanh lịch Saddle', 1, 53, b'0'),
(4, 2, 5, 'Túi đeo vai phom vuông Willow 21', 1, 500, b'0'),
(5, 3, 10, 'Túi đeo chéo nữ trong suốt dáng vuông trẻ trung', 1, 20, b'0'),
(6, 4, 9, 'Túi đeo chéo nữ phom vuông nhỏ đính đá lấp lánh', 1, 12, b'0'),
(10, 8, 2, 'Túi xách nữ hình hộp chữ nhật Leather Mini Vanity', 2, 70, b'0'),
(11, 9, 8, 'Ví nữ dáng dài phom chữ nhật thời trang', 1, 23, b'0'),
(12, 10, 8, 'Ví nữ dáng dài phom chữ nhật thời trang', 1, 23, b'0'),
(13, 10, 3, 'Túi đeo chéo nữ chữ nhật Tweed', 1, 53, b'0'),
(14, 11, 6, 'Túi đeo chéo nữ nắp gập Hayden', 1, 230, b'0'),
(15, 12, 3, 'Túi đeo chéo nữ chữ nhật Tweed', 1, 53, b'0'),
(16, 13, 2, 'Túi xách nữ hình hộp chữ nhật Leather Mini Vanity', 3, 70, b'0'),
(17, 13, 4, 'Túi đeo chéo nữ nắp gập thanh lịch Saddle', 3, 53, b'0'),
(18, 14, 3, 'Túi đeo chéo nữ chữ nhật Tweed', 1, 53, b'0'),
(19, 15, 2, 'Túi xách nữ hình hộp chữ nhật Leather Mini Vanity', 2, 70, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `prod_id` int(2) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_quantity` int(100) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `cate_id` int(2) NOT NULL,
  `prod_detail_id` int(2) DEFAULT NULL,
  `brand_des` text DEFAULT NULL,
  `maintance_des` text NOT NULL,
  `img_link` varchar(10) DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `prod_quantity`, `prod_price`, `cate_id`, `prod_detail_id`, `brand_des`, `maintance_des`, `img_link`, `status`) VALUES
(1, 'Túi đeo vai nữ chữ nhật Chain Detailed', 100, 54, 1, 1, 'a', 'Vệ sinh bằng khăn ẩm mềm. Tránh tiếp xúc trực tiếp với môi trường hóa chất. Bảo quản sản phẩm nơi khô thoáng', 'img1.png', b'1'),
(2, 'Túi xách nữ hình hộp chữ nhật Leather Mini Vanity', 43, 70, 1, 2, NULL, 'Vệ sinh bằng khăn ẩm mềm. Tránh tiếp xúc trực tiếp với môi trường hóa chất. Bảo quản sản phẩm nơi khô thoáng', 'img2.png', b'1'),
(3, 'Túi đeo chéo nữ chữ nhật Tweed', 7, 53, 1, 3, NULL, 'Vệ sinh bằng khăn ẩm mềm. Tránh tiếp xúc trực tiếp với môi trường hóa chất. Bảo quản sản phẩm nơi khô thoáng', 'img3.png', b'1'),
(4, 'Túi đeo chéo nữ nắp gập thanh lịch Saddle', 6, 53, 1, 4, NULL, 'Vệ sinh bằng khăn ẩm mềm. Tránh tiếp xúc trực tiếp với môi trường hóa chất. Bảo quản sản phẩm nơi khô thoáng', 'img4.png', b'1'),
(5, 'Túi đeo vai phom vuông Willow 21', 19, 500, 2, 5, 'Thương hiệu Coach được thành lập tại New York vào năm 1941, được nhiều người biết đến như một nhà mốt hàng đầu về thiết kế phụ kiện sang trọng hiện đại, dựa trên di sản phong phú của thương hiệu về chế tác các chất liệu da cao cấp và đưa vào những dòng sản phẩm sáng tạo. Các thiết kế của Coach luôn bắt kịp xu hướng mới nhất, hướng đến sự sang trọng, đẳng cấp và không ngừng đổi mới để khẳng định bản thân.', 'Vệ sinh bằng khăn ẩm mềm, tránh tiếp xúc trực tiếp với môi trường xăng dầu, kiềm. Bảo quản sản phẩm nơi khô thoáng', 'img5.png', b'1'),
(6, 'Túi đeo chéo nữ nắp gập Hayden', 19, 230, 2, 5, 'Thương hiệu Coach được thành lập tại New York vào năm 1941, được nhiều người biết đến như một nhà mốt hàng đầu về thiết kế phụ kiện sang trọng hiện đại, dựa trên di sản phong phú của thương hiệu về chế tác các chất liệu da cao cấp và đưa vào những dòng sản phẩm sáng tạo. Các thiết kế của Coach luôn bắt kịp xu hướng mới nhất, hướng đến sự sang trọng, đẳng cấp và không ngừng đổi mới để khẳng định bản thân.', 'Vệ sinh bằng khăn ẩm mềm, tránh tiếp xúc trực tiếp với môi trường xăng dầu, kiềm. Bảo quản sản phẩm nơi khô thoáng', 'img6.png', b'1'),
(7, 'Túi đeo vai nữ chữ nhật nắp gập Pillow Tabby 26 Wi', 20, 750, 2, 7, 'Thương hiệu Coach được thành lập tại New York vào năm 1941, được nhiều người biết đến như một nhà mốt hàng đầu về thiết kế phụ kiện sang trọng hiện đại, dựa trên di sản phong phú của thương hiệu về chế tác các chất liệu da cao cấp và đưa vào những dòng sản phẩm sáng tạo. Các thiết kế của Coach luôn bắt kịp xu hướng mới nhất, hướng đến sự sang trọng, đẳng cấp và không ngừng đổi mới để khẳng định bản thân.', 'Vệ sinh bằng khăn ẩm mềm, tránh tiếp xúc trực tiếp với môi trường xăng dầu, kiềm, bảo quản sản phẩm nơi khô thoáng', 'img7.png', b'1'),
(8, 'Ví nữ dáng dài phom chữ nhật thời trang', 18, 23, 2, 8, 'Thương hiệu Coach được thành lập tại New York vào năm 1941, được nhiều người biết đến như một nhà mốt hàng đầu về thiết kế phụ kiện sang trọng hiện đại, dựa trên di sản phong phú của thương hiệu về chế tác các chất liệu da cao cấp và đưa vào những dòng sản phẩm sáng tạo. Các thiết kế của Coach luôn bắt kịp xu hướng mới nhất, hướng đến sự sang trọng, đẳng cấp và không ngừng đổi mới để khẳng định bản thân.', 'Vệ sinh bằng khăn ẩm mềm, tránh tiếp xúc trực tiếp với môi trường xăng dầu, kiềm, bảo quản sản phẩm nơi khô thoáng', 'img8.png', b'1'),
(9, 'Túi đeo chéo nữ phom vuông nhỏ đính đá lấp lánh', 97, 12, 3, 9, NULL, 'Tránh tiếp xúc với nước kể cả nước hoa, kem dưỡng da và các hóa chất khác. Vệ sinh bằng vải đánh bóng, bảo quản ở nơi khô thoáng', 'img9.png', b'1'),
(10, 'Túi đeo chéo nữ trong suốt dáng vuông trẻ trung', 18, 20, 3, 10, NULL, 'Vệ sinh bằng vải mềm, bảo quản ở nơi khô thoáng', 'img10.png', b'1'),
(11, 'Túi gym unisex phom chữ nhật Training', 10, 73, 4, 11, 'Được thành lập vào năm 1948 tại Đức, PUMA là một trong những thương hiệu thể thao hàng đầu thế giới về thiết kế, phát triển các mặt hàng giày dép, quần áo, phụ kiện. PUMA chuyên sản xuất giày thời trang và giày thể thao dùng trong bóng đá, chạy bộ, giày để tập luyện trong phòng tập, golf và đua xe mô-tô. Thương hiệu hiện phân phối các dòng sản phẩm tại hơn 120 quốc gia và được phân phối tại Việt Nam bởi u\'lyth', 'Vệ sinh bằng khăn ẩm mềm, tránh tiếp xúc trực tiếp với môi trường xăng dầu, kiềm, bảo quản sản phẩm nơi khô thoáng', 'img11.png', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_detail_des`
--

CREATE TABLE `tbl_prod_detail_des` (
  `prod_detail_id` int(2) NOT NULL,
  `size` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `detail_1` text DEFAULT NULL,
  `detail_2` text DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prod_detail_des`
--

INSERT INTO `tbl_prod_detail_des` (`prod_detail_id`, `size`, `material`, `detail_1`, `detail_2`, `origin`) VALUES
(1, 'H:90 x W: 18.5 x D: ', 'Pearlized Calf Leather. Lớp lót: Microfiber & Fabric', 'Kiểu dáng thời trang nữ tính với phom chữ nhật hiện đại', 'Khóa cài zip chắc chắn. Phối mắc xích kim loại sáng bóng, nổi bật. Gam màu hiện đại dễ dàng phối với nhiều trang phục', 'Singapore'),
(2, ' H8 x W12 x D7 (cm)', 'Embossed Calf Leather. Lớp lót: Faux Suede & Microfiber', 'Kiểu dáng túi xách hình hộp độc đáo, thanh lịch', 'Khóa cài zip kim loại 2 chiều sáng bóng. Tay cầm da cố định. Dây đeo mắc xích kim loại, có thể tháo rời. Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện ', 'Singapore'),
(3, 'W22 x H14 x D8 (cm)', 'Tweed', 'Kiểu dáng túi đeo chéo phom chữ nhật', 'Nắp gập, khóa kim loại cao cấp, tiện lợi. Dây đeo vai mắc xích kim loại nổi bật, Gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện.', 'Singapore'),
(4, 'W17.5 x H11.5 x D6 (cm)', 'Suede/microfiber', 'Kiểu dáng túi đeo chéo nữ phom chữ nhật thời trang', 'Nắp gập thanh lịch, phối logo sang trọng. Thiết kế bo tròn các cạnh ở đáy túi. Dây đeo da bản mảnh, có thể tháo rời và thay đổi độ dài, gam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện.', 'Singapore'),
(5, '9 1/4\" (L) x 8 3/4\" (H) x 4 1/4\" (W)', 'Da thật', 'Kiểu dáng túi đeo vai phom vuông hiện đại', 'Kích thước vừa vặn để đựng nhiều đồ dùng\r\nThiết kế tay cầm da bằng da. Khóa cài bằng kim loại nổi bật. Phối thẻ da in tên thương hiệu tạo điểm nhấn.', 'New York'),
(6, '8\" (L) x 4 3/4\" (H) x 1 1/2\" (W)', ' Signature coated canvas, Refined calf leather', 'Thiết kế túi đeo chéo phom chữ nhật thời trang ', 'Nắp gập phối khóa bấm tiện lợi, phối khóa kéo zip chắc chắn, gồm 8 khe cắm thẻ, dây đeo da có thể tháo rời, hoa văn logo chữ C thương hiệu nổi bật', 'New York'),
(7, '10 1/2\" (L) x 5 3/4\" (H) x 3\" (W)', 'Nappa leather', 'Kiểu dáng túi chữ nhật dáng dài thời trang', 'Nắp gập, phối logo chữ \"C\" thương hiệu nổi bật, thiết kế hiệu ứng màu ombre độc đáo, đi kèm dây đeo vai và dây đeo chéo da bản mảnh nữ tính, có thể tháo rời.', 'New York'),
(8, '6.5cm x 11cm', 'Printed coated canvas', 'Thiết kế ví nhỏ dạng gấp 3 bỏ túi', 'Nút bấm đóng mở chắc chắn, gồm 6 móc treo chìa khóa tiện lợi. Logo thương hiệu bằng kim loại sáng bóng', 'New York'),
(9, ' 10.5 x 11.5 x 10 x 6 (cm)', 'Da tổng hợp', 'Kiểu dáng túi đeo chéo nữ phom vuông thời trang', 'Kích thước nhỏ gọn và tiện dụng. Nắp gập, khóa nút bấm kim loại tiện dụng, thiết kế đính nhiều đá nhỏ, lấp lánh. Đi kèm 1 dây đeo mắc xích dài có thể tháo rời, màu sắc thời trang, dễ dàng phối với nhiều trang phục', 'Việt Nam'),
(10, '18 x 7 x 19 (cm)', 'Nhựa pvc', 'Thiết kế túi hình hộp vuông thời trang, kích thước nhỏ gọn và tiện dụng', '\r\nKhóa cài zip kim loại tiện lợi, dây đeo bản lớn có thể điều chỉnh và tháo rời, nổi bật với thiết kế nhựa trong suốt phối hình chú mèo đáng yêu. Màu sắc thời trang, dễ dàng phối với nhiều trang phục khác nhau', 'Việt Nam'),
(11, 'vừa vặn có thể đựng được nhiều vật dụng', '100% Polyester. Lớp lót: 100% Polyester', 'Kiểu dáng túi xách tay thể thao, cá tính', 'Khóa kéo zip đóng mở ngăn chính, phối ngăn lưới ở bên ngoài. Logo thương hiệu in nổi bật, tay cầm đôi cố định và dây đeo có thể điều chỉnh kích thước linh hoạt', 'Đức');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `user_id`, `firstname`, `lastname`, `phone`, `address`, `status`) VALUES
(1, 1, 'Huệ', 'Uyên', 2147483642, 'Hậu Giang, Phường 5, Quận 6, Thành Phố Hồ Chí Minh', b'1'),
(2, 5, 'Bảo', 'Nguyễn Ngọc', 946777827, 'B17-08, Block B chung cư Carillon 7, 33 Lương Minh Nguyệt, quận Tân Phú', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_type` bit(1) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email`, `password`, `user_type`, `status`) VALUES
(1, 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', b'0', b'1'),
(2, 'bao@gmail.coma', 'c4ca4238a0b923820dcc509a6f75849b', b'1', b'1'),
(4, 'bao201102@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', b'1', b'1'),
(5, 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', b'0', b'1'),
(6, 'bao123@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', b'1', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type` bit(1) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`user_type`, `type`) VALUES
(b'0', 'staff'),
(b'1', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `prod_name` (`prod_name`);

--
-- Indexes for table `tbl_prod_detail_des`
--
ALTER TABLE `tbl_prod_detail_des`
  ADD PRIMARY KEY (`prod_detail_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prod_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_prod_detail_des`
--
ALTER TABLE `tbl_prod_detail_des`
  MODIFY `prod_detail_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
