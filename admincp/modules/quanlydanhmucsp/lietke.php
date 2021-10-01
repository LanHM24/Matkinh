<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<style>
  .wrapperr
{   
    display: flex;
    min-height: 30vh;
    justify-content:center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
  .ten_truong{
      text-align: center;
      border-bottom : 2px solid;
      width : 45%;
      padding: 12px;
      border-left : 2px solid;
  }
  .ten_truong_id{
      text-align: center;
      border-bottom : 2px solid;
      width : 10%;
      padding: 12px;
      border-left : 2px solid;
  }
  table{
    width : 50%;
    border : 1px solid;
    margin-bottom :50px;
    background-color: pink;
  }
  .header_DM p{
    text-align: center;
    font-size : 30px;
    margin-bottom :20px;
  }
</style>

<div class="header_DM">
  <p>Danh Mục Sản Phẩm</p>
</div>
<div class="wrapperr">
<table >
  <tr>
  	<th class="ten_truong_id">ID</th>
    <th class="ten_truong" >Tên danh mục</th>
  	<th class="ten_truong" >Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  	$i++;
  ?>
  <tr>
  	<td class="ten_truong_id"><?php echo $i ?></td>
    <td class="ten_truong"><?php echo $row['tendanhmuc'] ?></td>
   	<td class="ten_truong">
   		<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>