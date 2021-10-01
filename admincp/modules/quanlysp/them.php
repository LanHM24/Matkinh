<style>
  .wrapperr
{   
    display: flex;
    min-height: 30vh;
    justify-content:center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

td {
    width: 161px;
	text-align : center;
}
.form-input
{
    background: transparent;
    border:0;
    outline:0;
    flex-grow: 1;  
}
  .table1{
    width : 50%;
    margin-bottom :50px;
    background-color: pink;
  }
  .header_DM p{
    text-align: center;
    font-size : 30px;
    margin-bottom :20px;
  }
  .form-group2 
{
	margin-top: 15px;
    border: 2px solid pink;
    display: flex;
    border-radius: 10px;
    background-color: #fff;
    padding: 12px;
    width: 100%;
}
.form-submit2
{
	color:#000;
    border : 1px solid black ;
    padding :12px;
    background-color: white;
    display: block;
    margin: auto;
    border-radius: 10px;
    font-size: 15px;
    margin-top:10px;
    width: 35%;
    margin-left: 35%;
}
</style>

<div class="header_DM">
<p>Thêm sản phẩm</p>
</div>
<div class="wrapperr">
<table class="table1">
 <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td class="form-group2"><input type="text" name="tensanpham"  class="form-input"></td>
	  </tr>
	   <tr >
	  	<td>Mã sản phẩm</td>
	  	<td class="form-group2"><input type="text" name="masp" class="form-input"></td>
	  </tr>
	  <tr >
	  	<td>Giá sản phẩm</td>
	  	<td class="form-group2"><input type="text" name="giasp" class="form-input"></td>
	  </tr>
	  <tr >
	  	<td>Số lượng</td>
	  	<td class="form-group2"><input type="text" name="soluong" class="form-input"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td class="form-group2"><input type="file" name="hinhanh" class="form-input"></td>
	  </tr>
	  <tr >
	  	<td>Tóm tắt</td>
	  	<td class="form-group2"><textarea rows="5" class="form-input"  name="tomtat" style="resize: none"></textarea></td>
	  </tr>
	   <tr >
	  	<td>Nội dung</td>
	  	<td class="form-group2"><textarea rows="5"  class="form-input" name="noidung" style="resize: none"></textarea></td>
	  </tr>
	  <tr >
	    <td>Danh mục sản phẩm</td>
	    <td class="form-group2">
	    	<select name="danhmuc" class="form-input">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	    <td>Tình trạng</td>
	    <td class="form-group2" >
	    	<select name="tinhtrang" class="form-input">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm" class="form-submit2"></td>
	  </tr>
 </form>
</table>
</div>