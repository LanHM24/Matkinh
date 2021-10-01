<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = ($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Đăng nhập Admincp</title>
</head>
<body>
<div class="wrapperr">
	<form action="" autocomplete="off" method="POST" id="form-login">
		<h1 class="form-heading">Đăng Nhập</h1>
		<div class="form-group">
			<input class="form-input" placeholder="username" type="text" name="username">
		</div>
		<div class="form-group">
			<input class="form-input" placeholder="password" type="password" name="password">
		</div>
		<input type="submit" class="form-submit" name="dangnhap" value="Đăng nhập">
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
