<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<style>
	img {
    vertical-align: middle;
    width: 71%;
}
</style>
<div class="grid wide">
<h3 style="text-align:center; margin:30px auto">Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
		<div class="row">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					 
					 <div class="col l-4 m-6 c-12">
						
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
								<a  href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
									<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
									<p class="price_product">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
								</a>
						
					</div>
					<?php
					} 
					?>
				
			</div>
		
</div>