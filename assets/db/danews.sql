-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 02:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danews`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(199) NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Trần Minh Hải', 'tmhai2004@gmail.com', '$2y$10$/umHmfKhZjECCHyO9AxAuOuPlppho1xT.H4jJAGyJb6Y5SJelTFtS', 1),
(9, 'Nguyễn Gia Long', 'gialong@gmail.com', '$2y$10$cr7yWcdCSLbsjEi01dgiTenmMWWZWyoJAPl43L8PZFiGMYK5HztXC', 1),
(10, 'Nguyễn Minh Đức', 'minhduc@gmail.com', '$2y$10$gw3PV.3ZW0QAY5BSnDmQ7OXHDEn6ZF.NkckyMXwYCbGukEdDGFkje', 1),
(11, 'Trần Ngọc Hân', 'ngochan@gmail.com', '$2y$10$8gYeCZfLWhF10rvkvHjzne5SwWpE4N2/U54ZupEp9qaAn0GrefQn2', 1),
(12, 'Trần Duy Khánh', 'duykhanh@gmail.com', '$2y$10$HY/ImuyVXsE.gkF3BB8lNeJ6bWHPReuFiCnRvJwlV8SBTw3if4n3O', 0),
(13, 'Phạm Thị Trinh', 'thitrinh@gmail.com', '$2y$10$A4R8eJjIhulCHY3be8xLEu/Cfs3AhocR3GXHGPpzoarnxqsmyjAsa', 1),
(14, 'Phạm Ngọc Trinh', 'ngoctrinh@gmail.com', '$2y$10$d/d5lCfz8Ke7O3cJpXIMz.X0ccveVbJScuwlrnwQmI5X73nNSMr8S', 0),
(15, 'Nguyễn Phương Thảo', 'phuongthao@gmail.com', '$2y$10$RD6dm9zMOcOqS6FufiLzSOVqAnstWbmR4pJwwtgNmQGf6YjJyT43W', 0),
(16, 'Lương Duy Dương', 'duyduong@gmail.com', '$2y$10$zc7L.JRZYkGhfUMzOpeJuubexadD/mu2R.JqXU8ozzFYURd3k8U86', 0),
(17, 'Nguyễn Lan Ngọc', 'lanngoc@gmail.com', '$2y$10$WPDAvPQ2300sBY6Yg1rsEOd.7AmE8Nq8/XmIXpIAbfNmsq3DMkrj2', 0),
(18, 'Đặng Văn Lâm', 'vanlam@gmail.com', '$2y$10$s5Xz42r7vFWraNdVEwcFA..p3P/cCFEfJ9Eud0cuvszduQL69o12G', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Thể Thao'),
(4, 'Giải Trí'),
(5, 'Giáo Dục'),
(6, 'Sức Khỏe'),
(7, 'Pháp Luật');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `account_id` int NOT NULL,
  `content` varchar(100) NOT NULL,
  `nameuser` varchar(50) NOT NULL,
  `time_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `account_id`, `content`, `nameuser`, `time_created`) VALUES
(9, 3, 1, 'rất hay và thú vị', '', '2024-06-09 12:11:13'),
(10, 10, 1, 'Trần Minh Hải đẹp zai nhất vũ trụ', 'Trần Minh Hải', '2024-06-09 17:33:48'),
(11, 3, 13, 'Trần Minh Hải đẹp zai nhất vũ trụ', 'Phạm Thị Trinh', '2024-06-10 10:31:26'),
(12, 8, 13, 'Thật sự rất nguy hiểm', 'Phạm Thị Trinh', '2024-06-10 10:31:48'),
(13, 11, 13, 'Hay quá mpabe', 'Phạm Thị Trinh', '2024-06-10 10:32:11'),
(14, 12, 13, 'Thật đáng sợ nha', 'Phạm Thị Trinh', '2024-06-10 10:33:02'),
(15, 9, 13, 'Mưa nhiều quá chán ghê', 'Phạm Thị Trinh', '2024-06-10 10:33:22'),
(16, 23, 10, 'Giỏi quá đi', 'Nguyễn Minh Đức', '2024-06-10 11:09:44'),
(17, 23, 12, 'Các anh này gỏi thật', 'Trần Duy Khánh', '2024-06-10 11:14:31'),
(18, 22, 12, 'Văn năm nay dễ quá', 'Trần Duy Khánh', '2024-06-10 11:15:40'),
(19, 21, 12, 'Thật là tuyệt vời luôn', 'Trần Duy Khánh', '2024-06-10 11:16:11'),
(20, 16, 12, 'Bài hết của sếp hay quá', 'Trần Duy Khánh', '2024-06-10 11:16:49'),
(21, 14, 12, 'Chị này xinh thật', 'Trần Duy Khánh', '2024-06-10 11:17:13'),
(22, 20, 14, 'Chị đẹp quá', 'Phạm Ngọc Trinh', '2024-06-10 11:24:03'),
(23, 21, 14, 'hay quá luôn', 'Phạm Ngọc Trinh', '2024-06-10 11:24:39'),
(24, 16, 14, 'Sơn Tùng mãi đỉnh ', 'Phạm Ngọc Trinh', '2024-06-10 11:27:17'),
(25, 17, 14, 'đẹp quá chị đẹp ơi', 'Phạm Ngọc Trinh', '2024-06-10 11:27:53'),
(26, 2, 14, 'sợ thật sự', 'Phạm Ngọc Trinh', '2024-06-10 11:28:12'),
(27, 9, 14, 'Mưa bẩn kinh', 'Phạm Ngọc Trinh', '2024-06-10 11:28:46'),
(28, 10, 14, 'Nhìn là thấy nóng rồi', 'Phạm Ngọc Trinh', '2024-06-10 11:29:10'),
(29, 15, 14, 'Xinh mà liều quá chị đẹp', 'Phạm Ngọc Trinh', '2024-06-10 11:29:40'),
(30, 18, 14, 'Phim này hay lắm', 'Phạm Ngọc Trinh', '2024-06-10 11:29:56'),
(31, 19, 15, 'Em mê chị này lắm ạ', 'Nguyễn Phương Thảo', '2024-06-10 11:30:46'),
(32, 23, 15, 'đẹp trai còn học giỏi', 'Nguyễn Phương Thảo', '2024-06-10 11:31:01'),
(33, 22, 15, 'bài này hay', 'Nguyễn Phương Thảo', '2024-06-10 11:31:15'),
(34, 18, 15, 'phim rất tuyệt', 'Nguyễn Phương Thảo', '2024-06-10 11:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `account_id` int DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `excerpt` text NOT NULL,
  `img_post` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `view` tinyint NOT NULL DEFAULT '0',
  `time_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `account_id`, `title`, `excerpt`, `img_post`, `content`, `view`, `time_created`, `time_updated`) VALUES
(2, 6, 1, 'Vụ học sinh tử vong vì bị bỏ quên trên xe: Xuất hiện tình tiết bất ngờ', 'Tài xế vụ học sinh tử vong thương tâm ở Thái Bình chỉ tạm thời đưa đón học sinh bằng xe 29 chỗ từ ngày 22/5 vì tài xế chính xin nghỉ phép một tuần và bàn giao lại cho lái xe mới.', 'assets/uploads/1717990941xeduadon.jpg', 'Báo cáo cho thấy, Trường mầm non Hồng Nhung được thành lập năm 2022, do UBND Thành phố quyết định thành lập, phòng GD&ĐT Thành phố cấp phép hoạt động với 12 lớp/ 272 trẻ.\r\n\r\nGiáo viên phụ trách lớp có học sinh tử vong là cô Đoàn Thị Nh., sinh năm 1998, trình độ đào tạo cao đẳng sư phạm mầm non; thứ hai là cô Nguyễn Thị Ph., sinh năm 1966, trình độ đào tạo Đại học sư phạm Mầm non.\r\n\r\nNhân viên tham gia đưa đón học sinh là cô Phương Q. A, trình độ đào tạo Trung cấp Dược.\r\n\r\nTheo nhà trường, lúc 6h20 phút ngày 29/5, lái xe N.V.L và nhân viên Phương Q.A có nhiệm vụ đón trẻ mầm non từ các gia đình đến Trường mầm non Hồng Nhung 2, trong đó có cháu T.G.H.', 6, '2024-06-04 14:37:39', '2024-06-10 03:42:44'),
(3, 3, 11, 'EURO 2024: HLV Roberto Martinez tái hiện màn chào đón dành riêng Cristiano Ronaldo', 'HLV trưởng Đội tuyển Bồ Đào Nha Roberto Martinez mừng rỡ chào đón Cristiano Ronaldo khi tiền đạo 39 tuổi tham dự buổi tập đầu tiên trước thềm EURO 2024.', 'assets/uploads/1717819768euro.jpg', 'Hôm qua, Cristiano Ronaldo đáp chuyến bay về Lisbon tập trung ở trung tâm huấn luyện Cidade do Futebol. Tại thủ đô Bồ Đào Nha, CR7 lập tức tham gia buổi tập cùng toàn đội. Đây là buổi tập đầu tiên của Ronaldo chuẩn bị cho EURO 2024.\r\n\r\nTrong ngày hội quân, Ronaldo được các đồng đội và HLV Roberto Martinez chào đón nồng nhiệt. Như những lần tập trung trước đây, nhà cầm quân người Tây Ban Nha tay bắt mặt mừng khi gặp Ronaldo.\r\n\r\nTrong buổi tập với Seleccao hôm qua, CR7 chủ yếu tập nhẹ và thư giãn. Đây là buổi tập cuối cùng của ĐT Bồ Đào Nha trước trận giao hữu với Croatia vào 23h45 đêm nay (8/6).', 35, '2024-06-04 14:41:11', '2024-06-08 04:09:28'),
(8, 6, 11, 'Ghi nhận 774 cú sấm sét', 'Theo Trung tâm Mạng lưới khí tượng thủy văn quốc gia, lúc 7 giờ 50 sáng nay 5-6, cơ quan này ghi nhận 774 cú sấm sét, trong đó có 439 cú sét đánh xuống đất, 335 sét trong mây', 'assets/uploads/1717609646set.jpg', 'Theo thống kê của Trung tâm Mạng lưới khí tượng thủy văn quốc gia thuộc Tổng cục Khí tượng Thủy văn, sáng 5-6, ở các tỉnh, thành phố trên toàn quốc có hiện tượng sấm sét.\r\n\r\nLúc 7 giờ 50, Trung tâm ghi nhận 774 cú sấm sét, trong đó có 439 cú sét đánh xuống đất, 335 sét trong mây, trong đó tập trung nhiều ở Hà Nội.\r\n\r\nTại khu vực Hà Nội, sấm sét xuất hiện ở nhiều quận, huyện; trong đó, khu vực Thường Tín, Phú Xuyên, Thanh Oai và Ứng Hòa xuất hiện sấm sét dày đặc. Nhiều người dân vô cùng lo lắng về việc sấm chớp liên tục.\r\n\r\nCùng với đó, trận mưa lớn diễn ra từ sáng sớm kéo dài đến khoảng 8 giờ, đúng giờ cao điểm người dân đi làm đã gây ngập lụt và ùn tắc, hỗn loạn giao thông ở nhiều quận, huyện ở TP Hà Nội.', 9, '2024-06-06 00:47:26', '2024-06-08 04:02:43'),
(9, 6, 11, 'Mưa dông kéo dài, nhiều tuyến đường TP Hồ Chí Minh ngập sâu', 'Cơn mưa lớn kéo dài kèm theo gió to khoảng 1 tiếng rưỡi trưa 7-6 đã khiến nhiều tuyến đường tại thành phố Hồ Chí Minh ngập trong “biển nước”', 'assets/uploads/1717819599mua.jpg', 'Theo ghi nhận, trưa 7-6, trên địa bàn thành phố Hồ Chí Minh bất ngờ xuất hiện mưa lớn trên diện rộng, gây ngập nước tại quận 1, quận Phú Nhuận, quận Tân Bình, quận Gò Vấp, huyện Bình Chánh...\r\n\r\nTrong cơn mưa dông, một loạt tuyến đường như: Nguyễn Duy Trinh, Đỗ Xuân Hợp và các tuyến đường quanh chợ Thủ Đức như Dương Văn Cam, Đặng Thị Rành… (thành phố Thủ Đức); đường Ung Văn Khiêm (quận Bình Thạnh), quốc lộ 13 hướng ra cửa ngõ thành phố, xảy ra tình trạng ngập úng cục bộ.', 10, '2024-06-06 19:40:35', '2024-06-08 04:06:39'),
(10, 6, 13, 'Quảng Ngãi, nắng nóng kéo dài trong những ngày tới', 'Trong 24 giờ qua, khu vực Quảng Ngãi đã có nắng nóng trên diện rộng, nhiệt độ đo được lúc 13 giờ ngày hôm nay (7/6) tại Ba Tơ là 36.6 độ C, tại TP.Quảng Ngãi', 'assets/uploads/1717819496nang.jpg', 'Dự báo ngày 8 - 9/6,  nắng nóng tiếp diễn với nhiệt độ cao nhất phổ biến từ 35 - 37 độ C, có nơi trên 37 độ C; độ ẩm thấp nhất từ 50 - 60%. \r\n\r\nTrong 72 giờ đến nắng nóng có khả năng chỉ còn xuất hiện một vài nơi với nhiệt độ cao nhất phổ biến 34 - 36 độ C; độ ẩm thấp nhất phổ biến 55 - 65%. \r\n\r\nNgày 11/6, nắng nóng diện rộng có khả năng xuất hiện trở lại trên khu vực và gia tăng dần về cường độ từ ngày 12/6. \r\n\r\nTrong những ngày tới, mưa dông xuất hiện nhiều vào buổi chiều, tối; cần đề phòng lốc sét, mưa đá và gió giật mạnh trong dông.', 16, '2024-06-06 19:41:37', '2024-06-08 04:04:56'),
(11, 3, 13, 'Mbappe gia nhập Real Madrid', 'Tiền đạo Kylian Mbappe ký hợp đồng với Real Madrid, sau khi đội chủ sân Bernabeu vô địch Champions League.', 'assets/uploads/1717819251mpabe.jpg', 'Mbappe đã thỏa thuận miệng với Real từ hồi tháng Hai. Tiền đạo Pháp sau đó tuyên bố hồi tháng Năm rằng sẽ rời PSG vào cuối mùa giải. Mbappe sẽ trở thành người của Real sau ngày 30/6, thời điểm hợp đồng giữa anh và PSG đáo hạn.Sau khi Real đánh bại Dortmund để vô địch Champions League, ban lãnh đạo CLB này đã thống nhất những điều khoản cuối cùng để đưa Mbappe đến Bernabeu. Theo BBC, ĐKVĐ La Liga sẽ công bố bản hợp đồng trong tuần này, và nhiều khả năng ra mắt Mbappe trước thời điểm Euro 2024 khởi tranh ngày 14/6.\r\n\r\nMbappe sẽ hưởng lương 16,28 triệu USD mỗi năm tại Real, cùng khoản thưởng 162,8 triệu USD tùy thành tích và mức độ cống hiến trong vòng 5 năm. Hợp đồng của Mbappe kéo dài 5 năm, đến 2029. Anh được giữ một phần giá trị bản quyền hình ảnh cá nhân của mình.', 29, '2024-06-06 19:47:22', '2024-06-08 04:00:51'),
(12, 7, 13, 'Thi thể tồn tại trong căn hộ hơn 1 năm qua được phát hiện \"tình cờ\"', 'Thi thể khô ráo, hàng xóm không ngửi thấy mùi nồng nặc, nguyên nhân do đâu?', 'assets/uploads/1717762798image 4 (1).png', 'Trả lời câu hỏi về quá trình phân hủy của thi thể này, một cán bộ pháp y cho biết, khi tổ công tác khám nghiệm hiện trường vào căn hộ chung cư cao cấp trên địa bàn phường Tây Mỗ, nơi phát hiện tử thi, thì vẫn có mùi bốc lên, dù lúc này thi thể đã bị khô lại.\r\n\r\nLý giải về việc phân hủy của thi thể cô gái, cán bộ pháp y này cho hay, sau khi cô gái tử vong, theo thời gian, tử thi vẫn bị thối rữa, phân hủy. Tuy nhiên, do cô gái nằm trên đệm của ghế sofa nên chính đệm này đã hút dịch dẫn đến tình trạng thi thể khô dần. ', 18, '2024-06-07 19:19:58', '2024-06-08 03:55:11'),
(13, 5, 11, 'Đề thi và lời giải môn Toán chuyên vào lớp 10 ở Hà Nội năm 2024', 'Đề thi môn Toán vào lớp 10 chuyên của 4 trường THPT tại Hà Nội gồm 5 câu, mỗi câu từ 1 đến 3 điểm.', 'assets/uploads/1717991060thi10.jpg', 'Kỳ thi lớp 10 ở Hà Nội diễn ra trong hai ngày 8-9/6 với với ba môn Toán, Ngữ văn và Ngoại ngữ. Hơn 105.000 thí sinh dự thi. Những em có nguyện vọng vào hệ chuyên vào các trường THPT chuyên Hà Nội - Amsterdam, chuyên Nguyễn Huệ, Chu Văn An và Sơn Tây, thi thêm môn chuyên trong hôm nay.\r\n\r\nBốn trường này tuyển gần 3.000 học sinh, tăng hơn 300 so với năm ngoái. Trong đó, chuyên Hà Nội - Amsterdam tuyển nhiều nhất - 820 em (770 chuyên, 50 song bằng).\r\n\r\nVới lớp chuyên Toán, tổng chỉ tiêu cả 4 trường là 210, trong khi số thí sinh đăng ký là gần 1.100.\r\n\r\nĐiểm xét tuyển vào hệ chuyên là tổng điểm ba môn Toán, Ngữ văn, Ngoại ngữ qua cộng điểm môn chuyên nhân hệ số hai.', 2, '2024-06-08 15:00:52', '2024-06-10 03:44:20'),
(14, 4, 13, 'Con gái Beckham giới thiệu dòng nước hoa của mẹ', 'Harper Beckham - 13 tuổi, con gái út nhà Beckham - khoe nhan sắc trong video TikTok quảng cáo sản phẩm của mẹ. ', 'assets/uploads/1717991305back.jpg', 'Trong cuộc phỏng vấn tại chương trình This Morning năm 2016, Victoria cho biết từ nhỏ con gái đã hứng thú những món đồ trang điểm. Dù hay chơi đá bóng với các anh, Harper vẫn dành thời gian tìm hiểu đồ makeup và quần áo. Victoria Beckham tiết lộ từ khi bốn tuổi, Harper có thể đi giày cao gót giỏi hơn nhiều người lớn.\r\nSau khi trận đấu kết thúc với tỷ số hòa, cựu danh thủ đăng hình chụp cùng Harper trên Instagram kèm chú thích: \"Dù không giành được ba điểm như hai bố con mong muốn, tôi vẫn có con gái nhỏ bên cạnh\". Nhiều nguồn tin cho biết Harper Beckham cũng thích bóng đá, thường đi xem các trận đấu cùng bố.', 14, '2024-06-08 15:01:15', '2024-06-10 03:48:25'),
(15, 7, 1, 'Cô gái lái ôtô đâm xe đối phương sau ẩu đả', 'Đánh nhau do mâu thuẫn trong cuộc nhậu, Trần Thị Vân, 30 tuổi, lái ôtô đâm nhiều lần vào xe đối thủ đang đỗ trên đường gây hư hỏng, cả khu vực náo loạn.', 'assets/uploads/1717991416cogai.jpg', 'Theo điều tra, khoảng 21h ngày 6/6, nhóm cô gái đang nhậu tại quán vỉa hè trên đường Ngô Quyền - đoạn giao với đường Nguyễn Đình Chiểu, phường Tân Lợi, thì xảy ra mâu thuẫn. Các cô gái lao vào đánh nhau, trong đó có Trần Thị Vân, gây náo loạn cả khu phố.\r\n\r\nVân lên ôtô màu đỏ lái với tốc độ cao, đâm mạnh vào đuôi ôtô của đối phương, khiến hai xe hư hỏng. Khi cảnh sát vào cuộc điều tra, Vân ra trình diện.', 53, '2024-06-08 21:29:03', '2024-06-10 03:50:16'),
(16, 4, 9, 'MV của Sơn Tùng M-TP được xem nhiều nhất thế giới 24 giờ qua', '\"Đừng làm trái tim anh đau\" - MV mới của Sơn Tùng M-TP - là video được xem nhiều nhất trên YouTube toàn cầu 24 giờ qua.', 'assets/uploads/1717991661sontunga.jpg', 'Theo trang thống kê Kworb, tính đến 17h ngày 9/6, MV đứng đầu YouTube sau chưa đầy một ngày phát hành với 5,3 triệu lượt xem. Trước đó, video đạt top một trending ở YouTube Việt Nam sau hai giờ ra mắt - nhanh nhất từ trước đến nay, phá kỷ lục của Jack với bản audio Đom đóm (năm 2020).\r\n\r\nMV cũng lọt vào top thịnh hành của nhiều quốc gia như Australia, Singapore, Hàn Quốc, Nhật Bản, Canada. Đừng làm trái tim anh đau đứng đầu các hệ thống nhạc số nhạc ở Việt Nam như iTunes, Spotify.\r\n\r\nCa khúc đánh dấu sự trở lại của Sơn Tùng M-TP với dòng pop ballad, mang âm hưởng sôi nổi, tương tự loạt hit Nơi này có anh, Có chắc yêu là đây, Muộn rồi mà sao còn. Ca từ là dòng tâm tình chàng trai gửi đến người anh thương, mong cuộc sống luôn có cô kề bên. So với các sáng tác thuộc dòng EDM/dance như There’s no one at all, Making my way, bài mới được phối khí đơn giản hơn, giúp ca sĩ thoải mái thể hiện chất giọng với lối hát nhấn nhá, bay bổng.', 8, '2024-06-10 10:54:21', '2024-06-10 10:54:21'),
(17, 4, 9, 'Midu tung ảnh cưới', 'Diễn viên Midu lần đầu công khai hình ảnh, thông tin chồng sắp cưới - doanh nhân Minh Đạt - qua bộ ảnh trước hôn lễ ngày 29/6.', 'assets/uploads/1717991778midu.jpg', 'Tối 5/6, Midu đăng bộ ảnh cưới thực hiện đầu năm, xác nhận với công chúng thông tin về vị hôn phu. Midu cho biết muốn chọn thời điểm thích hợp để công bố thông tin, tránh ảnh hưởng đến cuộc sống, công việc của cả hai.\r\n\r\nChồng sắp cưới của cô tên đầy đủ Trần Duy Minh Đạt, hiện là doanh nhân, kém Midu một tuổi.\r\nMinh Đạt sinh ra trong gia đình nổi tiếng về ngành nhựa, sở hữu một tập đoàn lớn. Anh du học nhiều năm ở Mỹ, từng tốt nghiệp cử nhân ngành Tài chính và Quản lý tại Đại học Virginia.\r\n\r\nSau khi tốt nghiệp thạc sĩ Quản trị Kinh doanh (MBA) tại Đại học California, Mỹ, anh về nước làm việc cho công ty của gia đình. Hiện Minh Đạt đảm nhận vai trò Giám đốc vận hành.', 2, '2024-06-10 10:56:18', '2024-06-10 10:56:18'),
(18, 4, 9, '\'Bad Boys 4\' - khi thợ săn trở thành con mồi', 'Thanh tra Mike Lowrey - Will Smith đóng - và đồng nghiệp bị băng nhóm tội phạm chơi xấu, đổ tội giết người trong phim \"Bad Boys: Ride or Die\".', 'assets/uploads/1717991905ac.jpg', 'Phần bốn do Adil El Arbi và Bilall Fallah đạo diễn, tiếp nối câu chuyện của Bad Boys for Life (2020), khi thanh tra Mike Lowrey nhận ra phản diện Armando (Jacob Scipio) là người con thất lạc của mình.\r\n\r\nLúc này, đội trưởng Conrad Howard (Joe Pantoliano) bị vu khống hợp tác với các băng đảng ma túy suốt nhiều năm qua. Cảnh sát Mike Lowrey và Marcus Burnett (Martin Lawrence) buộc phải giải oan cho Howard, đồng thời đối đầu với tên trùm bí ẩn, do Eric Dane thủ vai.\r\n\r\nGiống các phần phim trước, dự án duy trì nhiều tình huống gay cấn, các mảng miếng hài được lồng ghép sáng tạo. Phim mở đầu với cảnh Mike và Marcus len lỏi trên đường xá tấp nập để kịp đến lễ cưới của Mike. Tuy nhiên, Marcus đột ngột muốn dừng xe mua bia gừng nhằm giảm cơn đau bụng. Khi vào tiệm tạp hóa, chàng thanh tra bị một tên cướp dí súng vào đầu. Mike đến kịp lúc giải nguy cho bạn mình, đồng thời trừng trị kẻ ác.', 5, '2024-06-10 10:58:25', '2024-06-10 10:58:25'),
(19, 4, 9, 'Lưu Diệc Phi đóng nữ sinh', 'Diễn viên Trung Quốc Lưu Diệc Phi, 37 tuổi, nhận bình luận tích cực khi đóng sinh viên ở phim mới.', 'assets/uploads/1717992002phi.jpg', 'Trong Câu chuyện hoa hồng chiếu từ ngày 8/6, người đẹp đóng Hoàng Diệc Mai - sinh viên 22 tuổi ngành mỹ thuật. Thông minh, xinh đẹp, hoàn cảnh gia đình tốt, Diệc Mai được vô số chàng trai theo đuổi. Nhưng cũng vì có quá nhiều người thích, Hoàng Diệc Mai vướng rắc rối tình cảm, bị hiểu lầm \"cướp người yêu\" của cô gái khác.\r\nNhững tập đầu có các cảnh Diệc Mai ở trường, trượt patin, làm nũng với cha mẹ và anh trai. Cụm từ khóa \"Lưu Diệc Phi đóng nữ sinh\" trở thành chủ đề được quan tâm nhất Weibo ngày 9/6, với hơn 300 triệu lượt xem và hàng trăm nghìn bình luận.\r\n\r\nTheo Sina, phần lớn khán giả bình luận tích cực tạo hình và diễn xuất của Lưu Diệc Phi. Các fan viết: \"Xem cô ấy đóng nữ sinh rất thuận mắt\", \"Thích xem Diệc Phi đóng phim vì gương mặt tự nhiên, cử chỉ và ánh mắt toát vẻ tự tin\", \"Đạo diễn ưu ái dành cho Lưu Diệc Phi nhiều góc quay đẹp\".', 6, '2024-06-10 11:00:03', '2024-06-10 11:00:03'),
(20, 4, 9, 'Cách Dương Cẩm Lynh chống khô da ngày hè', 'Diễn viên Dương Cẩm Lynh tăng cường dùng tinh chất dưỡng ẩm, xịt khoáng, uống nước ấm với mật ong, chống khô da khi thời tiết nắng nóng.', 'assets/uploads/1717992114duong-cam-lynh-2977-1714719978.jpg', 'Theo Dương Cẩm Lynh, thời điểm vào hè, thời tiết hanh khô khiến da dễ nám sạm, không đều màu. Bí quyết cô giữ nước cho làn da là uống một ly nước ấm pha mật ong vào mỗi buổi sáng. Nước ấm có tác dụng thanh lọc cơ thể, thúc đẩy quá trình trao đổi chất, còn mật ong giúp dưỡng ẩm và kháng khuẩn.\r\nNgoài dùng kem chống nắng, cô chú ý kỹ khâu cấp ẩm bằng cách uống đủ hai lít nước, xịt khoáng hàng ngày. Với các bước chăm sóc da, diễn viên cũng chú ý khâu tẩy trang, rửa mặt sạch, do đặc thù công việc phải trang điểm. Buổi tối, cô thường đắp mặt nạ, sử dụng tinh chất dưỡng ẩm phù hợp để da không bị khô và không quên bôi kem dưỡng môi. Cô cho biết vì không có thời gian nên thường dùng mặt nạ giấy hoặc gel mua ở các cửa hàng mỹ phẩm. \"Các dưỡng chất trong mặt nạ bổ sung độ ẩm cho da\", diễn viên cho biết.\r\n\r\nDương Cẩm Lynh nói việc tập luyện thể thao cũng góp phần giúp phụ nữ có làn da đẹp. Vận động giúp máu lưu thông tốt, sản xuất nhiều collagen và các tế bào mới, khiến da sáng, chậm lão hóa hơn. Cô thường dậy sớm thiền và tập các động tác yoga.', 5, '2024-06-10 11:01:54', '2024-06-10 11:01:54'),
(21, 5, 10, 'Điểm chuẩn lớp 10 ở Hà Nội có thể giảm 0,5-1', 'Đề thi Văn và Tiếng Anh tăng nhẹ độ khó, khiến nhiều giáo viên dự đoán điểm chuẩn lớp 10 giảm khoảng 0,5-1 so với năm ngoái.', 'assets/uploads/1717992336affd573a-da07-4336-8809-91ea24-2354-8180-1717935085.jpg', 'Ngữ văn là môn thi đầu tiên. Đề gồm hai phần, lần lượt 6,5 và 3,5 điểm. Phần I cho 8 câu thơ trong bài Đồng chí của Chính Hữu, hỏi thí sinh về thể thơ, ý nghĩa của từ ngữ, hình ảnh, sau đó yêu cầu viết một đoạn văn 15 câu làm rõ hình ảnh người lính (nghị luận văn học).\r\n\r\nỞ phần II, học sinh được hỏi \"có ích kỷ không nếu chúng ta không sống để đáp ứng mong đợi của người khác\", đồng thời thể hiện quan điểm bằng cách viết một đoạn văn với chủ đề: Nên ứng xử thế nào trước mong đợi của những người thân yêu (nghị luận xã hội).\r\n\r\nTheo nhiều giáo viên, đề Văn khó hơn năm ngoái một chút, tính phân hóa thể hiện ở hai câu viết đoạn văn. Câu nghị luận xã hội có chủ đề gần gũi nhưng nội dung mở, đòi hỏi học sinh nêu được quan điểm và hành động phù hợp với hoàn cảnh. Còn để lấy hết điểm bài nghị luận văn học, ngoài việc cảm nhận những khía cạnh của hình tượng người lính, các em cần phân tích được cách miêu tả, chọn lọc chi tiết vừa chân thực, vừa có sức gợi cao của nhà thơ.\r\n\r\n\"Phổ điểm trung bình khoảng 6,5-7. Điểm từ 8 trở lên sẽ thuộc về những bài viết cẩn thận, khai thác hết ý nghĩa của các tín hiệu nghệ thuật trong phần nghị luận văn học; bày tỏ được ý kiến đa chiều, sâu sắc ở nghị luận xã hội\", cô Dương Thùy Linh, phụ trách môn Ngữ văn hệ THCS, trường M.V.Lômônôxốp, đúc kết.\r\n\r\nTiếng Anh có độ khó rõ ràng hơn. Đề thi gồm 40 câu trắc nghiệm, kiểm tra kiến thức ngữ âm, từ vựng, ngữ pháp, đọc hiểu và viết câu của học sinh.\r\n\r\nĐiểm khác biệt so với năm ngoái là ở các câu hỏi thuộc dạng bài giao tiếp, đọc chọn đáp án và phần trọng âm. Ví dụ, ở phần giao tiếp, đề đưa vào các tình huống thực tế, lấy ngữ cảnh là biển báo hoặc thông báo. Phần trọng âm, đề có những từ 3-4 âm tiết thay vì 2-3 như trước.\r\n\r\nCô Trần Thị Hương Giang, giáo viên Tiếng Anh trường THCS Giảng Võ, nhận xét đề thi có nhiều câu gây bối rối, phân loại học sinh. Tỷ lệ câu khó của đề khoảng 15-20%. Vì vậy, mức điểm phổ biến được dự đoán là 7-8; số thí sinh đạt 9-10 sẽ ít hơn năm ngoái.\r\n\r\nĐây cũng là nhận định của các giáo viên với đề thi môn Toán. Đề thi có 5 câu, trong đó câu 4 là bài hình học, chiếm nhiều điểm nhất.\r\n\r\nCô Lê Thị Thu Hà, Tổ trưởng Tự nhiên, trường Tiểu học và THCS FPT, đánh giá các câu hỏi nhận biết, thông hiểu chiếm 7,25 điểm. Học sinh khá có thể dễ đạt mức này. Với các câu còn lại, tính phân loại cao hơn, đặc biệt ở hai ý cuối bài hình và câu 5 về bất đẳng thức.', 15, '2024-06-10 11:05:36', '2024-06-10 11:05:36'),
(22, 5, 10, 'Đề Văn lớp 10 nhầm \'lúa vàng, gạo trắng\' thành \'lúa gạo, vàng trắng\'', 'Đề thi lớp 10 chuyên Văn nhầm \"lúa vàng, gạo trắng\" thành \"lúa gạo, vàng trắng\" khi trích dẫn bài viết của nhà văn Nguyễn Quang Thiều, có thể ảnh hưởng đến hơn 300 thí sinh.', 'assets/uploads/1717992395237c1ee9-e7a9-4e01-819a-221831-3787-3251-1717948450.jpg', 'Ông Lê Duy Định, Giám đốc Sở Giáo dục và Đào tạo Gia Lai, ngày 9/6, thừa nhận đề thi vào lớp 10 chuyên Văn của tỉnh có sai sót.\r\n\r\nTrong câu 2 của phần Làm văn (5 điểm), thí sinh được hỏi quan điểm về nhận định: Thơ ca không làm ra lúa gạo, vàng trắng nhưng thơ ca làm ra giấc mơ cho người gieo trồng. Chỉ có giấc mơ thiêng liêng và lộng lẫy mới giúp con người đi qua được bóng tối của dục vọng và tội lỗi, tìm đến đồng loại để chia sẻ và dâng hiến những vẻ đẹp của khát vọng sống cho mọi con người.\r\n\r\nĐề cho biết đây là một đoạn trích trong bài viết \"Thông điệp về cái đẹp và tự do\" của nhà văn Nguyễn Quang Thiều. Thực tế, câu chính xác là: \"Thơ ca không làm ra lúa vàng, gạo trắng...\".\r\n\r\nTrên Facebook, nhà văn Nguyễn Quang Thiều cho hay câu nói trên của người làng Chùa (xã Ứng Hòa, Hà Nội) mà ông sưu tầm được. Ngoài ra, từ \"vàng trắng\" trong ngữ cảnh này là vô lý, song người ra đề không phát hiện ra.\r\n\r\nCó ý kiến cho rằng việc nhầm lẫn có thể khiến thí sinh hiểu sai, ảnh hưởng tới kết quả bài thi.\r\n\r\n\"Đây là sai sót không đáng có, không ai mong muốn, song chưa đến mức phải tổ chức thi lại\", ông Định nói.\r\n\r\nSở Giáo dục và Đào tạo đang nghiên cứu cách xử lý, nhằm đảm bảo công bằng cho thí sinh, đồng thời lựa chọn được những em có năng khiếu vào lớp chuyên Văn. Phương án giải quyết dự kiến được đưa ra vào ngày 10/6.', 30, '2024-06-10 11:06:35', '2024-06-10 11:06:35'),
(23, 5, 10, 'Học sinh Bắc Giang giành huy chương vàng Olympic Vật lý châu Á', '8 học sinh Việt Nam thi Olympic Vật lý châu Á (APhO) đều giành huy chương, trong đó có một huy chương vàng, là thành tích tốt nhất ba năm qua.', 'assets/uploads/1717992499441968299-1171481547215715-649-2909-8573-1717928188.jpg', 'Học sinh giành huy chương vàng là Thân Thế Công, trường THPT chuyên Bắc Giang, tỉnh Bắc Giang, theo thông báo của Bộ Giáo dục và Đào tạo, chiều 9/6.\r\n\r\nHuy chương bạc thuộc về Hà Duyên Phúc, trường THPT chuyên Lam Sơn, tỉnh Thanh Hóa.\r\n\r\nSáu em giành huy chương đồng, gồm: Nguyễn Nhật Minh (THPT chuyên Khoa học Tự nhiên, Đại học Quốc gia Hà Nội), Nguyễn Thành Duy (chuyên Trần Phú, Hải Phòng), Trương Phi Hùng (chuyên Bắc Giang), Hoàng Tuấn Kiệt và Trần Vũ Lê Hoàng (chuyên Lam Sơn), Nguyễn Thế Quân (chuyên Phan Bội Châu, Nghệ An).\r\n\r\nHầu hết các em là học sinh lớp 12, riêng Thế Quân lớp 11.\r\n\r\n\"Đây là kết quả vượt trội so với những năm trước bởi sau nhiều năm, đoàn Việt Nam mới giành được huy chương vàng\", Bộ cho biết.\r\n\r\nỞ kỳ APhO năm ngoái, Việt Nam có 4 huy chương đồng và 4 bằng khen. Năm 2022, các huy chương gồm một bạc, hai đồng và 5 bằng khen.\r\n\r\nTrước đó, ở APhO 2021, Việt Nam giành 2 huy chương vàng, trong đó Ngô Mạnh Quân (THPT chuyên Hà Nội - Amsterdam) đạt điểm cao nhất kỳ thi.', 13, '2024-06-10 11:08:19', '2024-06-10 11:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD KEY `post_id` (`post_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
