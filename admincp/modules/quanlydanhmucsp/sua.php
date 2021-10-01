<style>
  .wrapperr
{   
    display: flex;
    min-height: 30vh;
    justify-content:center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
  .table1{
    width : 50%;
    margin-bottom :50px;
    background-color: #92a8d1
  }
  .header_DM p{
    text-align: center;
    font-size : 30px;
    margin-bottom :20px;
  }
  .form-group2 
{
    margin-top: 15px;
    border : 4px solid #55cc;
    display: flex;
    border-radius: 10px;
    background-color: #fff;
	padding: 12px;
	width: 50%;
	margin-left:25%
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
<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="header_DM">
<p>Sửa danh mục sản phẩm</p>
</div>
<div class="wrapperr">
<table class="table1">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
	  <tr class="form-group2">
	  	<td><input type="text" placeholder="Tên danh mục" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" class="form-input"></td>
	  </tr>
	  <tr class="form-group2">
	    <td><input type="text"  placeholder="Thứ tự"  value="<?php echo $dong['thutu'] ?>" name="thutu" class="form-input"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm" class="form-submit2"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
</div>