<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Đăng Nhập</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Tên Đăng Nhập</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Mật Khẩu</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Đăng Nhập</button>
		</div>
		<p>
			 <a href="register.php" style = "text-decoration: none">Đăng Ký Tài Khoản </a>
	</form>


</body>
</html>