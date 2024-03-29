<?php
require "../config/database.php";
require "../models/Db.php";
require "../models/products.php";
require "../models/manufactures.php";
session_start();
if ($_SESSION['type'] == 1) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="public/css/uniform.css" />
	<link rel="stylesheet" href="public/css/select2.css" />
	<link rel="stylesheet" href="public/css/matrix-style.css" />
	<link rel="stylesheet" href="public/css/matrix-media.css" />
	<link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

	<!--Header-part-->
	<div id="header">
		<h1><a href="dashboard.php">Dashboard</a></h1>
	</div>
	<!--close-Header-part-->

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
					data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span
						class="text">Welcome Super Admin</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
					class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span
						class="label label-important">5</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
					<li class="divider"></li>
					<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
					<li class="divider"></li>
					<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
					<li class="divider"></li>
					<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
				</ul>
			</li>
			<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
			<li class=""><a title="" href="../logout.php"><i class="icon icon-share-alt"></i> <span
						class="text">Logout</span></a></li>
		</ul>
	</div>

	<!--start-top-serch-->
	<div id="search">
		<form action="result.php" method="get">
			<input type="text" placeholder="Search here..." name="key" />
			<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
		</form>
	</div>
	<!--close-top-serch-->

	<!--sidebar-menu-->

	<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
			<li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
			<li> <a href="form.php"><i class="icon icon-th-list"></i> <span>Add New Product</span></a></li>
			<li> <a href="manufactures.php"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>
			<li> <a href="add_manufactures.php"><i class="icon icon-th-list"></i> <span>Add Manufactures</span></a></li>
			<li> <a href="user.php"><i class="icon icon-th-list"></i> <span>User</span></a></li>
			<li> <a href="protype.php"><i class="icon icon-th-list"></i> <span>Protype</span></a></li>
			<li> <a href="add_protype.php"><i class="icon icon-th-list"></i> <span>Add Protype</span></a></li>


		</ul>
	</div>
	<!-- BEGIN CONTENT -->
	<div id="content">
		<div id="content-header">
			<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i
						class="icon-home"></i> Home</a></div>
			<h1>Search Result:</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"><a href="form.php"> <i class="icon-plus"></i>
								</a></span>
							<h5>Products</h5>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th></th>
										<th>Name</th>
										<th>Category</th>
										<th>Producer</th>
										<th>Description</th>
										<th>Price (VND)</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="">
										<td><img src="../public/images/lenovo-phab-2gb-400x460-400x460.png" /></td>
										<td>Máy tính bảng Lenovo Phab 2GB</td>
										<td>Tablet</td>
										<td>SamSung</td>
										<td>Bút S-pen giúp Galaxy Tab A Plus trở thành 1 trợ thủ đắc lực cho người dùng
											văn phòng. Có thể phác thảo nhanh, tốc ký hay đơn giản là những ghi chú.
											Galaxy Tab A có thiết kế đẹp, khung viền kim loại sáng bóng tạo cảm giác
											chắc chắn. Màn hình lớn đến 9.7 inch cho bạn giải trí, xem phim thú vị hơn.
											Hỗ trợ khe Sim giúp Tab A có thể nghe gọi, nhắn tin như 1 chiếc smartphone
										</td>
										<td>4,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-tab-a-70-400x460.png" /></td>
										<td>Máy tính bảng Samsung Galaxy Tab A6 7.0</td>
										<td>Tablet</td>
										<td>SamSung</td>
										<td>Bút S-pen giúp Galaxy Tab A Plus trở thành 1 trợ thủ đắc lực cho người dùng
											văn phòng. Có thể phác thảo nhanh, tốc ký hay đơn giản là những ghi chú.
											Galaxy Tab A có thiết kế đẹp, khung viền kim loại sáng bóng tạo cảm giác
											chắc chắn. Màn hình lớn đến 9.7 inch cho bạn giải trí, xem phim thú vị hơn.
											Hỗ trợ khe Sim giúp Tab A có thể nghe gọi, nhắn tin như 1 chiếc smartphone
										</td>
										<td>4,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img
												src="../public/images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg" />
										</td>
										<td>Galaxy Tab S2 8</td>
										<td>Tablet</td>
										<td>SamSung</td>
										<td>Bút S-pen giúp Galaxy Tab A Plus trở thành 1 trợ thủ đắc lực cho người dùng
											văn phòng. Có thể phác thảo nhanh, tốc ký hay đơn giản là những ghi chú.
											Galaxy Tab A có thiết kế đẹp, khung viền kim loại sáng bóng tạo cảm giác
											chắc chắn. Màn hình lớn đến 9.7 inch cho bạn giải trí, xem phim thú vị hơn.
											Hỗ trợ khe Sim giúp Tab A có thể nghe gọi, nhắn tin như 1 chiếc smartphone
										</td>
										<td>9,990,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img
												src="../public/images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg" />
										</td>
										<td>Galaxy Tab A 9.7</td>
										<td>Tablet</td>
										<td>SamSung</td>
										<td>Bút S-pen giúp Galaxy Tab A Plus trở thành 1 trợ thủ đắc lực cho người dùng
											văn phòng. Có thể phác thảo nhanh, tốc ký hay đơn giản là những ghi chú.
											Galaxy Tab A có thiết kế đẹp, khung viền kim loại sáng bóng tạo cảm giác
											chắc chắn. Màn hình lớn đến 9.7 inch cho bạn giải trí, xem phim thú vị hơn.
											Hỗ trợ khe Sim giúp Tab A có thể nghe gọi, nhắn tin như 1 chiếc smartphone
										</td>
										<td>7,990,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg" />
										</td>
										<td>iPad Pro wifi 32GB</td>
										<td>Tablet</td>
										<td>Apple</td>
										<td>iPad Pro được trang bị màn hình 12.9 inch, lớn nhất từ trước đến nay đối với
											các sản phẩm tablet phổ biến Apple trang bị cho iPad Pro vi xử lý A9X có
											hiệu năng cực kỳ mạnh mẽ và khả năng xử lý đồ họa vượt trội Camera iSign
											8.0MP và camera Facetime 1.2MP đảm bảo chất lượng ảnh chụp cũng như video
											call</td>
										<td>19,999,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg" />
										</td>
										<td>iPad Pro 3G 128GB</td>
										<td>Tablet</td>
										<td>Apple</td>
										<td>iPad Pro được trang bị màn hình 12.9 inch, lớn nhất từ trước đến nay đối với
											các sản phẩm tablet phổ biến Apple trang bị cho iPad Pro vi xử lý A9X có
											hiệu năng cực kỳ mạnh mẽ và khả năng xử lý đồ họa vượt trội Camera iSign
											8.0MP và camera Facetime 1.2MP đảm bảo chất lượng ảnh chụp cũng như video
											call</td>
										<td>26,999,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-s6-edge-plus-400x533.png" /></td>
										<td>Điện thoại Samsung Galaxy S6 32GB</td>
										<td>Cellphone</td>
										<td>SamSung</td>
										<td>Màn hình: Quad HD, 5.7", 1440 x 2560 pixels
											Camera sau: 16 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57
											Chip đồ hoạ: Mali-T760
											RAM: 4GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3000 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, DLNA, Wi-Fi Direct, Wi-Fi hotspot</td>
										<td>14,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-s6-edge-plus-400x533.png" /></td>
										<td>Điện thoại Samsung Galaxy S6 Edge 32GB</td>
										<td>Cellphone</td>
										<td>SamSung</td>
										<td>Màn hình: Quad HD, 5.7", 1440 x 2560 pixels
											Camera sau: 16 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57
											Chip đồ hoạ: Mali-T760
											RAM: 4GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3000 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, DLNA, Wi-Fi Direct, Wi-Fi hotspot</td>
										<td>17,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-s6-edge-plus-400x533.png" /></td>
										<td>Điện thoại Samsung Galaxy Note 5</td>
										<td>Cellphone</td>
										<td>SamSung</td>
										<td>Màn hình: Quad HD, 5.7", 1440 x 2560 pixels
											Camera sau: 16 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57
											Chip đồ hoạ: Mali-T760
											RAM: 4GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3000 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, DLNA, Wi-Fi Direct, Wi-Fi hotspot</td>
										<td>18,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-s6-edge-plus-400x533.png" /></td>
										<td>Điện thoại Samsung Galaxy S6 Edge 64GB</td>
										<td>Cellphone</td>
										<td>SamSung</td>
										<td>Màn hình: Quad HD, 5.7", 1440 x 2560 pixels
											Camera sau: 16 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57
											Chip đồ hoạ: Mali-T760
											RAM: 4GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3000 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, DLNA, Wi-Fi Direct, Wi-Fi hotspot</td>
										<td>18,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/samsung-galaxy-s6-edge-plus-400x533.png" /></td>
										<td>Điện thoại Samsung Galaxy S6 Edge Plus</td>
										<td>Cellphone</td>
										<td>SamSung</td>
										<td>Màn hình: Quad HD, 5.7", 1440 x 2560 pixels
											Camera sau: 16 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57
											Chip đồ hoạ: Mali-T760
											RAM: 4GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3000 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, DLNA, Wi-Fi Direct, Wi-Fi hotspot</td>
										<td>20,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/oppo-r7-plus-detail-400x533.png" /></td>
										<td>Điện thoại OPPO R7 Lite</td>
										<td>Cellphone</td>
										<td>Oppo</td>
										<td>Màn hình: AMOLED 16 triệu màu, 6.0", 1080 x 1920 pixels
											Camera sau: 13 MP, Quay phim FullHD 1080p@30fps
											Camera trước: 8 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz
											Chip đồ hoạ: Adreno 405
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 128 GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 4100 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>6,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/oppo-r7-plus-detail-400x533.png" /></td>
										<td>Điện thoại OPPO Neo7</td>
										<td>Cellphone</td>
										<td>Oppo</td>
										<td>Màn hình: AMOLED 16 triệu màu, 6.0", 1080 x 1920 pixels
											Camera sau: 13 MP, Quay phim FullHD 1080p@30fps
											Camera trước: 8 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz
											Chip đồ hoạ: Adreno 405
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 128 GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 4100 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>4,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/oppo-r7-plus-detail-400x533.png" /></td>
										<td>Điện thoại OPPO F1</td>
										<td>Cellphone</td>
										<td>Oppo</td>
										<td>Màn hình: AMOLED 16 triệu màu, 6.0", 1080 x 1920 pixels
											Camera sau: 13 MP, Quay phim FullHD 1080p@30fps
											Camera trước: 8 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz
											Chip đồ hoạ: Adreno 405
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 128 GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 4100 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>6,400,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/oppo-r7-plus-detail-400x533.png" /></td>
										<td>Điện thoại OPPO R7s</td>
										<td>Cellphone</td>
										<td>Oppo</td>
										<td>Màn hình: AMOLED 16 triệu màu, 6.0", 1080 x 1920 pixels
											Camera sau: 13 MP, Quay phim FullHD 1080p@30fps
											Camera trước: 8 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz
											Chip đồ hoạ: Adreno 405
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 128 GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 4100 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>9,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/oppo-r7-plus-detail-400x533.png" /></td>
										<td>Điện thoại OPPO R7 Plus</td>
										<td>Cellphone</td>
										<td>Oppo</td>
										<td>Màn hình: AMOLED 16 triệu màu, 6.0", 1080 x 1920 pixels
											Camera sau: 13 MP, Quay phim FullHD 1080p@30fps
											Camera trước: 8 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz
											Chip đồ hoạ: Adreno 405
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 128 GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 4100 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>11,500,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 430</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>1,600,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 535</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>2,400,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 550</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>3,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 650</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>3,700,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 650 XL</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>4,600,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 950</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>14,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/microsoft-lumia-950-xl-400x460.png" /></td>
										<td>Điện thoại Microsoft Lumia 950 XL</td>
										<td>Cellphone</td>
										<td>Microsoft</td>
										<td>Màn hình: AMOLED 16 triệu màu, 5.7", 1440 x 2560 pixels
											Camera sau: 20 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Windows 10 (for Mobile)
											CPU: Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 3340 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot
										</td>
										<td>16,000,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-5s-16gb-6-400x460.png" /></td>
										<td>Điện thoại iPhone 5s 128GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>8,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-5s-16gb-6-400x460.png" /></td>
										<td>Điện thoại iPhone 5s Plus 128GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>17,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s 16GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>14,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s 64GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>18,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s 128GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>20,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s Plus 16GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>19,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/sony-xperia-z5-premium-detail-400x460.png" />
										</td>
										<td>Điện thoại Sony Xperia Z5 Compact</td>
										<td>Cellphone</td>
										<td>Sony</td>
										<td>Màn hình: IPS-LCD, 5.5", 2160 x 3840 Pixels
											Camera sau: 23 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 810, 8 nhân, Quad-core 1.5 GHz Cortex-A53 & Quad-core 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 3430 mAh

											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>14,990,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/sony-xperia-z5-premium-detail-400x460.png" />
										</td>
										<td>Điện thoại Sony Xperia Z5 Premium Dual
										</td>
										<td>Cellphone</td>
										<td>Sony</td>
										<td>Màn hình: IPS-LCD, 5.5", 2160 x 3840 Pixels
											Camera sau: 23 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: Android 5.1 (Lollipop)
											CPU: Snapdragon 810, 8 nhân, Quad-core 1.5 GHz Cortex-A53 & Quad-core 2 GHz
											Cortex-A57
											Chip đồ hoạ: Adreno 430
											RAM: 3GB
											Bộ nhớ trong: 32 GB
											Hỗ trợ thẻ tối đa: 200GB
											Số khe SIM: 2 SIM 2 sóng, Nano SIM
											Dung lượng pin: 3430 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, DLNA, Wi-Fi Direct, Wi-Fi
											hotspot</td>
										<td>19,990,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s Plus 64GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>24,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>
									<tr class="">
										<td><img src="../public/images/iphone-6s-plus-128gb-400-1-400x450.png" /></td>
										<td>Điện thoại iPhone 6s Plus 128GB</td>
										<td>Cellphone</td>
										<td>Apple</td>
										<td>Màn hình: Retina HD, 5.5", 1080 x 1920 pixels
											Camera sau: 12 MP, Quay phim 4K 2160p@30fps
											Camera trước: 5 MP
											Hệ điều hành: iOS 9
											CPU: Apple A9, 2 nhân, 1.8 GHz
											Chip đồ hoạ: PowerVR GT7600
											RAM: 2GB
											Bộ nhớ trong: 128GB
											Hỗ trợ thẻ tối đa: Không
											Số khe SIM: 1 Sim, Nano SIM
											Dung lượng pin: 2750 mAh
											Kết nối: Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi hotspot</td>
										<td>27,490,000</td>
										<td>
											<a href="edit.php" class="btn btn-success btn-mini">Edit</a>
											<form action="" method="">
												<input type="submit" class="btn btn-danger btn-mini" value="Delete">
											</form>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<!--Footer-part-->
	<div class="row-fluid">
		<div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
	</div>
	<!--end-Footer-part-->
	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/jquery.ui.custom.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.uniform.js"></script>
	<script src="public/js/select2.min.js"></script>
	<script src="public/js/jquery.dataTables.min.js"></script>
	<script src="public/js/matrix.js"></script>
	<script src="public/js/matrix.tables.js"></script>
</body>

</html>
<?php }else {
	echo "Bạn không đủ quyền truy cập vào trang này<br>";
	echo "<a href='http://localhost:82/LapTrinhWeb1/Nhom4'> Click để về lại trang chủ</a>";
	exit();
} ?>