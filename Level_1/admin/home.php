<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
        <div id="head">
        </div>
        <div id="head-link">
			<a class = "cnlink">Thoát<a>
			<a class = "cnlink">Đổi Mật Khẩu<a>	
        </div>
		<div id="content">
			<div class="tab">
				<button class="tablinks" onclick="load_ajax()">Quản Trị viên</button>
				<button class="tablinks" >Thêm Quản Trị Viên</button>
				<button class="tablinks" >Thêm Sinh Viên</button>
				<button class="tablinks" >Sửa Lịch Thi</button>
				<button class="tablinks" >Bắt Đầu Dăng Ký</button>
				
			</div>
			<div id = "contents" class="tabcontent active">		
				<h1> Hello World </h1>		
			</div>
			<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        	<script language="javascript">
				function load_ajax(){
					$.ajax({
						url : "Admin_info.php",
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