<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
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
	margin:30px auto;
    background-image: url(../img/background.jpeg);
    display: flex;
    min-height: 20vh;
    justify-content:center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
<div class="wrapperr">
<form action="" autocomplete="off" method="POST">
		<table border="1"  width="120%" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
			</tr>
			<tr>
				<td><input style="margin:10px auto" type="text" size="50" class="form-input" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td><input style="margin:10px auto"  type="password" size="50" class="form-input" name="password" placeholder="Mật khẩu..."></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" style="margin:10px auto" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>
	</div>