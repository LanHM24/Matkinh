<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<div class="dangxuat">
<p><i class='bx bx-log-out' ></i> <a href="index.php?dangxuat=1">Đăng Xuất 
</a></p>
</div>

<style>
	.dangxuat a{
		color: black;
		font-size: 20px;
		text-decoration: none;
		align-items :center
		
	}
	.dangxuat i{
		color: black;
		font-size: 26px;
		text-decoration: none
		
	}
	.dangxuat{
    padding: 6px;
    background-color: #fff;
	 display: block;
    margin-bottom: 20px;
    border-radius: 10px;
    font-size: 15px;
    width: 150px;
	}

</style>