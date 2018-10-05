<?php
include ('./users.php');
$obj_users = new users();
//xóa
$id = '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$obj_users->deleteUser($id);
}
//tìm kiếm
$keyword = '';
if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
}
$users = $obj_users->getUsers($keyword);

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="public/css/styles.css" rel="stylesheet" type="text/css">

<script src="public/js/jquery-2.1.4.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>

</head>
<body>
	<header>
		<div class="type-12">
			<div class="container">
				<div align="center" class="type"><a href="#"><h1>Out team</h1></a></div>
				<form>
					<input type="text" name="keyword" placeholder="Nhập từ khóa">
					<input type="submit" name="Tìm kiếm" value="Tìm kiếm">
				</form>
				<div class="row">
					<?php foreach ($users as $user): ?>
			
					<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<a href='cau5.php?id=<?php echo $user['id'] ?>'>Xóa</a>
						<a href='capnhat.php?id=<?php echo $user['id'] ?>'>Cập Nhật</a>
						<div class="hover">
							<div class="images">
								<img src="public/images/1.jpg" alt="imgAlt">
							</div>
						</div>
						<div class="tieude">
							<a href="#"><h3><?php echo $user['username'] ?></h3></a>
						</div>
					</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	</body>
	</html>