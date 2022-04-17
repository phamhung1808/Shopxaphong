DROP TABLEadmin;

CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO admin VALUES("1","admin","202cb962ac59075b964b07152d234b70","1");
INSERT INTO admin VALUES("2","huannb12","21dc18f9d66c8afa7628e0d7a4361472","1");



DROP TABLEbrands;

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO brands VALUES("1","Enchanteur","1");
INSERT INTO brands VALUES("2","Lux","1");
INSERT INTO brands VALUES("3","Lifebuoy","1");
INSERT INTO brands VALUES("5","Cỏ Mềm HomeLab","1");
INSERT INTO brands VALUES("6","Double Rich","1");
INSERT INTO brands VALUES("7","On The Body","1");
INSERT INTO brands VALUES("8","Aiken","1");
INSERT INTO brands VALUES("9","Đặng Văn Huấn","0");



DROP TABLEcategories;

CREATE TABLE `categories` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO categories VALUES("1","Xà phòng loại 1","1");
INSERT INTO categories VALUES("2","Xà phòng loại 2","1");
INSERT INTO categories VALUES("3","Xà phòng loại 3","1");
INSERT INTO categories VALUES("4","Xà phòng loại 4","1");
INSERT INTO categories VALUES("5","Xà phòng loại 5","1");
INSERT INTO categories VALUES("6","Xà phòng loại 6","1");



DROP TABLEcomments;

CREATE TABLE `comments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `member_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `content` tinytext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO comments VALUES("2","2","2","2021-08-04 23:24:27","Xà phòng rất thơm !!!","1");
INSERT INTO comments VALUES("5","4","0","2021-08-05 08:50:21","Xà phòng rất thơm !","1");
INSERT INTO comments VALUES("7","1","4","2021-08-05 09:36:11","Xà phòng rất thơm !","1");
INSERT INTO comments VALUES("9","50","1","2021-11-27 01:25:53","ád","1");
INSERT INTO comments VALUES("11","50","1","2021-11-27 01:26:32","xà phòng không thơm","1");
INSERT INTO comments VALUES("12","50","1","2021-11-27 01:27:33","xà phòng thơm
","1");
INSERT INTO comments VALUES("13","48","1","2021-12-01 22:32:12","Xà phòng không thơm
","1");
INSERT INTO comments VALUES("14","48","1","2021-12-01 22:32:26","Xad phòng không thơm lắm!!!!!","1");
INSERT INTO comments VALUES("15","48","1","2021-12-01 22:32:51","Xad phòng không thơm lắm!!!!!","1");
INSERT INTO comments VALUES("16","52","1","2021-12-02 14:17:47","Xà phòng ko thơm","1");
INSERT INTO comments VALUES("17","52","1","2021-12-02 14:18:16","Xà phòng ko thơm","1");



DROP TABLEmembers;

CREATE TABLE `members` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO members VALUES("48","huannb123","21dc18f9d66c8afa7628e0d7a4361472","Huan DangVan","1234214455","ninh bình","huannb12@gmail.com","1");
INSERT INTO members VALUES("49","huannb12","d41d8cd98f00b204e9800998ecf8427e","Huan DangVan","0949692825","ninh bình","huannb2000@gmail.com","1");
INSERT INTO members VALUES("50","huannb123456","d41d8cd98f00b204e9800998ecf8427e","Huan DangVan","0949692825","ninh bình","huannb2000@gmail.com","1");
INSERT INTO members VALUES("51"," huannb20","ddc49c0dc913ad0e8e259a078f3b3ec8","Huan DangVan","0949692825","ninh bình","huannb2000@gmail.com","1");
INSERT INTO members VALUES("52","huannb20","21dc18f9d66c8afa7628e0d7a4361472","Huan DangVan","0949692825","ninh bình","huannb2000no1@gmail.com","1");



DROP TABLEorderdetail;

CREATE TABLE `orderdetail` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO orderdetail VALUES("1","14","1","3200000");
INSERT INTO orderdetail VALUES("1","20","1","3200000");
INSERT INTO orderdetail VALUES("1","21","3","3200000");
INSERT INTO orderdetail VALUES("2","14","2","210000");
INSERT INTO orderdetail VALUES("2","15","2","210000");
INSERT INTO orderdetail VALUES("2","20","1","210000");
INSERT INTO orderdetail VALUES("3","15","1","1200000");
INSERT INTO orderdetail VALUES("4","15","1","250000");



DROP TABLEordermethod;

CREATE TABLE `ordermethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO ordermethod VALUES("1","Trực tiếp cho người giao hàng ","1");
INSERT INTO ordermethod VALUES("2","Chuyển khoản","1");
INSERT INTO ordermethod VALUES("3","Thanh toán tại shop","1");
INSERT INTO ordermethod VALUES("4","Paypal","1");



DROP TABLEorders;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_method_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Chưa xử lý; 2: Đang xử lý; 3: Đã xử lý; 4: Huỷ ',
  `name` varchar(25) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO orders VALUES("20","1","50","2021-11-25 17:41:01","3","Huan DangVan","ninh bình","0949692825","huannb2000@gmail.com","ship nhanh");
INSERT INTO orders VALUES("21","1","52","2021-12-02 14:18:53","3","Huan DangVan","ninh bình","0949692825","huannb2000no1@gmail.com","ship nhanh");



DROP TABLEproducts;

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_cat` int(5) NOT NULL,
  `product_brand` int(5) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO products VALUES("1","3","8","Xà phòng hương hoa anh đào","3200000","xaphong1.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>
","1");
INSERT INTO products VALUES("2","4","2","Xà phòng hương hoa cúc","210000","xaphong4.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("3","6","3","Xà phòng hương hoa xoài","1200000","xaphong5.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("4","2","2","Xà phòng hương hoa nho","250000","xaphong2.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("5","5","5","Xà phòng hương hoa mận","900000","xaphong3.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("6","5","3","Xà phòng hương hoa nhãn","670000","1637066593_Xaphong18.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("8","1","1","Xà phòng hương hoa chuối","120000000","1637066624_Xaphong19.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("11","2","3","Xà phòng hương hoa huệ","150000","1637066647_Xaphong20.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("12","4","5","Xà phòng hương hoa nhài","150005","1637066670_Xaphong25.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("13","1","2","Xà phòng hương hoa mai","155450","1637066696_Xaphong23.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("14","5","1","Xà phòng hương hoa hồng","15000","xaphong5.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("15","2","2","Xà phòng hương hoa lan","150005","1637066754_Xaphong24.jpg","<p>-Làm sạch da dịu nhẹ</p>
<p>-Duy trì và cung cấp độ ẩm cho làn da</p>
<p>-Trị thâm, mờ sẹo, làm sáng da</p>
<p>-Dưỡng da trắng hồng, bóng khỏe</p>
<p>-Giảm đau, hỗ trợ điều trị vết thương hở</p>
<p>-Chống nắng tự nhiên</p>
<p>-Kháng viêm, diệt khuẩn</p>
<p>-Chống dị ứng da</p>
<p>-Làm mờ đốm đen, cải thiện sắc tố da</p>","1");
INSERT INTO products VALUES("16","2","2","Xà phòng hoa ban mai","150000","1637066771_Xaphong26.jpg","Xà phòng rất thơm","1");
INSERT INTO products VALUES("17","1","2","Xà phòng hương bạc hà","150000","Xaphong6.jpg","Loại bỏ âm thanh khó chịu của cánh cửa
 
Xà phòng có thể xử lý vấn đề âm thanh nếu trong nhà bạn có cánh cửa bị khít và hay phát ra tiếng kêu cọt kẹt mỗi khi mở. Với trường hợp này, bạn chỉ cần dùng bánh xà phòng chà lên bản lề của cửa sau đó mở và đóng cửa một vài lần để xà phòng phát huy hiệu quả.
 
Làm sạch mảnh kính vỡ
 
Nếu trót làm vỡ đồ dùng bằng thủy tinh và lo lắng vẫn còn những mảnh vỡ nhỏ lưu lại trên sàn nhà, lúc này bạn có thể dùng xà phòng để giải quyết vấn đề này.","1");
INSERT INTO products VALUES("18","2","2","Bánh xà phòng hoa Tulip","200005","1637066715_Xaphong27.jpg","Loại bỏ âm thanh khó chịu của cánh cửa
 
Xà phòng có thể xử lý vấn đề âm thanh nếu trong nhà bạn có cánh cửa bị khít và hay phát ra tiếng kêu cọt kẹt mỗi khi mở. Với trường hợp này, bạn chỉ cần dùng bánh xà phòng chà lên bản lề của cửa sau đó mở và đóng cửa một vài lần để xà phòng phát huy hiệu quả.
 
Làm sạch mảnh kính vỡ
 
Nếu trót làm vỡ đồ dùng bằng thủy tinh và lo lắng vẫn còn những mảnh vỡ nhỏ lưu lại trên sàn nhà, lúc này bạn có thể dùng xà phòng để giải quyết vấn đề này.","1");
INSERT INTO products VALUES("19","3","2","Bánh xà phòng hoa phong lan","30000","1637067421_Xaphong15.jpg","Loại bỏ âm thanh khó chịu của cánh cửa
 
Xà phòng có thể xử lý vấn đề âm thanh nếu trong nhà bạn có cánh cửa bị khít và hay phát ra tiếng kêu cọt kẹt mỗi khi mở. Với trường hợp này, bạn chỉ cần dùng bánh xà phòng chà lên bản lề của cửa sau đó mở và đóng cửa một vài lần để xà phòng phát huy hiệu quả.
 
Làm sạch mảnh kính vỡ
 
Nếu trót làm vỡ đồ dùng bằng thủy tinh và lo lắng vẫn còn những mảnh vỡ nhỏ lưu lại trên sàn nhà, lúc này bạn có thể dùng xà phòng để giải quyết vấn đề này.","1");
INSERT INTO products VALUES("20","4","4","Bánh xà phòng hoa thiên điểu","40000","Xaphong9.jpg","Phòng trừ sâu bệnh
 
Xà phòng có khả năng tiêu diệt và xua đuổi các loài côn trùng gây hại phổ biến trên các loại cây trồng trong nhà và ngoài vườn. Nếu áp dụng phương pháp này bạn nên ưu tiên sử dụng xà phòng có thành phần hữu cơ để chúng không gây hại đến quá trình sinh trưởng của cây.
 
Cách làm như sau: Pha 3-4 lít nước với 1 thìa canh xà phòng lỏng và 1 thìa canh dầu thực vật sau đó lắc đều và phun dung dịch vừa được pha chế lên cây là bạn đã có thể yên tâm lũ côn trùng không dám bén mảng đến cây cối trong nhà.","1");
INSERT INTO products VALUES("21","5","4","Bánh xà phòng hoa sen","50000","Xaphong10.jpg","Phòng trừ sâu bệnh
 
Xà phòng có khả năng tiêu diệt và xua đuổi các loài côn trùng gây hại phổ biến trên các loại cây trồng trong nhà và ngoài vườn. Nếu áp dụng phương pháp này bạn nên ưu tiên sử dụng xà phòng có thành phần hữu cơ để chúng không gây hại đến quá trình sinh trưởng của cây.
 
Cách làm như sau: Pha 3-4 lít nước với 1 thìa canh xà phòng lỏng và 1 thìa canh dầu thực vật sau đó lắc đều và phun dung dịch vừa được pha chế lên cây là bạn đã có thể yên tâm lũ côn trùng không dám bén mảng đến cây cối trong nhà.","1");
INSERT INTO products VALUES("22","6","5","Bánh xà phòng hoa lưu ly","60000","Xaphong11.jpg","Phòng trừ sâu bệnh
 
Xà phòng có khả năng tiêu diệt và xua đuổi các loài côn trùng gây hại phổ biến trên các loại cây trồng trong nhà và ngoài vườn. Nếu áp dụng phương pháp này bạn nên ưu tiên sử dụng xà phòng có thành phần hữu cơ để chúng không gây hại đến quá trình sinh trưởng của cây.
 
Cách làm như sau: Pha 3-4 lít nước với 1 thìa canh xà phòng lỏng và 1 thìa canh dầu thực vật sau đó lắc đều và phun dung dịch vừa được pha chế lên cây là bạn đã có thể yên tâm lũ côn trùng không dám bén mảng đến cây cối trong nhà.","1");
INSERT INTO products VALUES("23","5","6","Bánh xà phòng hoa Gazania","10000","Xaphong12.jpg","Loại bỏ mùi ẩm mốc khó chịu
 
Nếu gặp tình trạng quần áo để trong tủ lâu ngày có mùi hôi mốc khó chịu bạn có thể lựa chọn một thanh xà phòng có mùi hương yêu thích và đặt nó trong kệ, tủ quần áo. Lúc này hương thơm tỏa ra từ xà phòng sẽ thấm vào quần áo, đánh bay mùi khó chịu còn sót lại. Bạn có thể dùng vải mỏng bọc bánh xà phòng lại để tránh chúng dính vào quần áo.","1");
INSERT INTO products VALUES("24","1","3","Bánh xà phòng hoa lay ơn","30000","Xaphong13.jpg","Hỗ trợ làm trắng da hiệu quả.
Khử mùi cơ thể nhanh chóng, vệ sinh sạch sẽ bụi bẩn bên trong lỗ chân lông.
Trị mụn lưng, trị viêm lỗ chân lông rất tốt.
Chứa bên trong các thành phần đến từ thiên nhiên lành tính.
Lưu hương trên da lên đến 2 tiếng đồng hồ.
Tạo bọt vừa phải, dễ sử dụng và giá thành siêu rẻ.","1");
INSERT INTO products VALUES("25","2","4","Bánh xà phòng hoa bằng lăng","25000","Xaphong14.jpg","Đến từ thương hiệu mỹ phẩm nổi tiếng nhất thế giới.
Chứa bên trong những thành phần sạch, giúp da được nuôi dưỡng và cải thiện và màu sắc an toàn.
Thiết kế đẹp, tạo mùi hương nhẹ nhàng dễ chịu và có thể dùng cho cả da mặt.
Mức giá phải chăng, dễ dàng mua tại nhiều địa điểm bán mỹ phẩm tại Việt Nam.","1");
INSERT INTO products VALUES("26","7","2","Bánh xà phòng hoa bàng","150000","Xaphong16.jpg","Sản phẩm có thể sử dụng cho vùng mặt (đối với da mặt khỏe).
Hỗ trợ điều trị mụn và cải thiện màu sắc của da khá ổn.
Có hương thơm lưu trên da sau khi tắm xong.
Chứa một lượng thành phần dưỡng ẩm nhẹ nên sau khi dùng xong không gây khô da.
Giá thành rẻ.","1");



