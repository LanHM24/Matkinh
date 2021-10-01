<style>
    .chitiet_sanpham {
        display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #eee1e1;
    padding: 56px;
    height: 660px;
    }
    .themgiohang {
        display: block;
    }
    .sanpham_header h3 {
        color: black;
        font-weight: 400;
        font-family: fangsong;
    }
    .sanpham_item {
        margin: 16px 0;
    font-family: fangsong;
    font-size: 25px;
    }
    .separate {
        width: 25%;
        border-bottom: 1px solid #777777;
    }
    .hinhanh_sanpham img{
        width : 550px;
    }
    h3{
        font-family: fangsong;
    font-size: 39px;
    margin: 50px 0
}
</style>

<div class="grid wide bgr">
    <?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
        ?>
        <div class="row">
            <div class=" col l-6 m-6 c-12 hinhanh_sanpham " >
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
            </div>
            <form class="col l-6 m-6 c-12" method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                <div class="chitiet_sanpham">
                    <h3 class="sanpham_header">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
                    <div class="separate"></div>
                    <p class="sanpham_item">Mã sản phẩm : <?php echo $row_chitiet['masp'] ?></p>
                    <div class="separate"></div>
                    <p class="sanpham_item">Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
                    <div class="separate"></div>
                    <p class="sanpham_item">Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></p>
                    <div class="separate"></div>
                    <p class="sanpham_item">Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                    <div class="separate"></div>
                    <input class="themgiohang sanpham_item" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                </div>
            </form>

        </div>
        <?php
    }
    ?>
</div>

