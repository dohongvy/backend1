<?php
require "../config/database.php";
require "../models/Db.php";
require "../models/user.php";
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
			<li class="dropdown" id="profile-messages"><a title="" href="form.php" data-toggle="dropdown"
					data-target="form.phpprofile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span
						class="text">Welcome Super Admin</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="form.php"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="form.php"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="dropdown" id="menu-messages"><a href="form.php" data-toggle="dropdown"
					data-target="form.phpmenu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span
						class="text">Messages</span> <span class="label label-important">5</span> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="sAdd" title="" href="form.php"><i class="icon-plus"></i> new message</a></li>
					<li class="divider"></li>
					<li><a class="sInbox" title="" href="form.php"><i class="icon-envelope"></i> inbox</a></li>
					<li class="divider"></li>
					<li><a class="sOutbox" title="" href="form.php"><i class="icon-arrow-up"></i> outbox</a></li>
					<li class="divider"></li>
					<li><a class="sTrash" title="" href="form.php"><i class="icon-trash"></i> trash</a></li>
				</ul>
			</li>
			<li class=""><a title="" href="form.php"><i class="icon icon-cog"></i> <span
						class="text">Settings</span></a></li>
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

	<div id="sidebar"> <a href="form.php" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
		<ul>
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
			<h1>Manage Producer</h1>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"><a href="add_user.php"><i
										class="icon-plus"></i></a></span>
							<h5>Products</h5>
						</div>
						<div class="widget-content nopadding">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Username</th>
										<th>password</th>
										<th>Name</th>
										<th>Type</th>
										
									</tr>
								</thead>
								<?php
							$user = new User();
							$getUser = $user->getUser();
							foreach($getUser as $key=>$value){
							?>
								<tbody>
									<tr class="">
										<td><?php echo $value['id'] ?></td>
										<td><?php echo $value['username'] ?></td>
										<td><?php echo $value['password'] ?></td>
										<td><?php echo $value['first_name'] ." ". $value['last_name']?></td>
										<td><?php echo $value['type'] ?></td>

										<td>
											<a href="edit_user.php?id=<?php echo $value['id'] ?>"
												class="btn btn-success btn-mini">Edit</a>
											<a href="delete_user.php?id=<?php echo $value['id'] ?>"
												class="btn btn-danger btn-mini">Delete</a>
										</td>
									</tr>
								</tbody>
								<?php } ?>
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