<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
    <nav class="navbar navbar-default header">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">FARELLO</a>
            </div>
            <ul class="nav navbar-nav">
				<li><a href="index.php">Trang chủ</a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li class="hidden"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
				
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right"><?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>
                <li>
                    <p>
                    <form action="index.php?quanly=timkiem" method="POST">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                    </p>
                </li>
                <li>
                    <span class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()" style="margin-left: 8px;background-color: #0f1d11 !important;">&#9776;</span>
                </li>
            </ul>
        </div>
    </nav>

</div>