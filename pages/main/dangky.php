<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>

<style type="text/css">
	table.dangky tr td{
	    padding: 5px;
	}
	.form-input
{
    background: transparent;
	background-color:white;
    border:0;
    outline:0;
    flex-grow: 1;  
	
}
	.wrapperr
{   
    background-image: url(../img/background.jpeg);
    display: flex;
    min-height: 20vh;
    justify-content:center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
<h3 style="text-align:center;font-family: fangsong;margin-bottom:30px;">Đăng ký khách hàng</h3>
<div class="wrapperr">
<form action="" method="POST">
<table class="dangky" border="1" width="120%" style="border-collapse: collapse;background-color:pink">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="50" class="form-input"name="hovaten"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" class="form-input" name="email"></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="50" class="form-input" name="dienthoai"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" size="50" class="form-input" name="diachi"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" size="50" class="form-input" name="matkhau"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="dangky" value="Đăng ký"><a href="index.php?quanly=dangnhap">Đăng Nhập</a></td>
		
	</tr>
</table>

</form>
</div>