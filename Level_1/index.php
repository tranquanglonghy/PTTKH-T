<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div id="main">
		<div id="head">
		</div>
		<div id="head-link">
			<a class = "phimcn"  href="index.php?logout='1'">Đăng xuất</a>
			<a class = "phimcn">Đổi Mật Khẩu</a>
		</div>
		<div id="content">
		<div class="tab">
				<button class="tablinks" onclick="load_ajax()">Sinh Viên</button>
				<button class="tablinks" >Đăng Ký Thi</button>
				<button class="tablinks" >In Lịch Thi</button>
				
			</div>
			<div id = "contents" class="tabcontent active">		
				<h1> Hello World </h1>		
			</div>
			<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        	<script language="javascript">
				function load_ajax(){
					$.ajax({
						url : "user_info.php",
						type : "post",
						dataType:"text",
						data : {
							
						},
						success : function (result){
							$('#contents').html(result);
						}
					});
				}
        	</script>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>