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
    border : 4px solid pink;
    display: flex;
    border-radius: 10px;
    background-color: #fff;
	padding: 12px;
	width: 50%;
	margin-left:25%
}
.form-input
{
    background: transparent;
    border:0;
    outline:0;
    flex-grow: 1;  
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
<p>Thêm danh mục sản phẩm</p>
</div>
<div class="wrapperr">
<table class="table1">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
	  <tr class="form-group2">
	  	<td><input type="text" placeholder="Tên danh mục" name="tendanhmuc" class="form-input"></td>
	  </tr>
	  <tr class="form-group2">
	    <td><input type="text" placeholder="Thứ tự" name="thutu" class="form-input"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục" class="form-submit2"></td>
	  </tr>
 </form>
</table>
</div>