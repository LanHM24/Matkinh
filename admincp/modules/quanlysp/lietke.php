<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
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
  .ten_truong_anh{
      text-align: center;
      border-bottom : 2px solid;
      width : 23%;
      padding: 12px;
      border-left : 2px solid;
  }
  .ten_truong{
      text-align: center;
      border-bottom : 2px solid;
      width : 8%;
      padding: 5px;
      border-left : 2px solid;
  }
  .ten_truong_id{
      text-align: center;
      border-bottom : 2px solid;
      width : 5%;
      padding: 5px;
      border-left : 2px solid;
  }
  table{
    width : 70%;
    border : 1px solid;
    margin-bottom :50px;
    background-color: white;
  }
  .header_DM p{
    text-align: center;
    font-size : 30px;
    margin-bottom :20px;
  }
</style>

<div class="header_DM">
<p>Liệt kê danh mục sản phẩm</p>
</div>
<div class="wrapperr">
<table>
  <tr>
  	<th class="ten_truong_id">Id</th>
    <th class="ten_truong">Tên sản phẩm</th>
    <th class="ten_truong_anh">Hình ảnh</th>
    <th class="ten_truong">Giá sp</th>
    <th class="ten_truong">Số lượng</th>
    <th class="ten_truong">Danh mục</th>
    <th class="ten_truong">Mã sp</th>
    <th class="ten_truong">Tóm tắt</th>
    <th class="ten_truong">Trạng thái</th>
  	<th class="ten_truong">Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td class="ten_truong_id"><?php echo $i ?></td>
    <td class="ten_truong"><?php echo $row['tensanpham'] ?></td>
    <td class="ten_truong_anh"><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px" height="100px"></td>
    <td class="ten_truong"><?php echo $row['giasp'] ?></td>
    <td class="ten_truong"><?php echo $row['soluong'] ?></td>
    <td class="ten_truong"><?php echo $row['tendanhmuc'] ?></td>
    <td class="ten_truong"><?php echo $row['masp'] ?></td>
    <td class="ten_truong"><?php echo $row['tomtat'] ?></td>
    <td class="ten_truong"><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td class="ten_truong">
   		<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>