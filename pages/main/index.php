<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,3";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="./css/gird.css">
<link rel="stylesheet" href="./css/stylefarello.css">
<div class="row">
            <div class="col l-7 m-9 c-12">
                <div class="page-introduction">
                    <h2 class="title-page">MẮT KÍNH FARELLO</h2>
                    <div class="introduction">
                        Trải nghiệm dòng sản phẩm mới đa chất liệu 
                        siêu nhẹ & thân thiện với môi trường.
                        Kết cấu tròng kính linh hoạt cùng những thiết kế mới nhất 
                        tạo nên sự khác biệt trong xu hướng và cảm hứng thời trang 
                    </div>
                    <a href="">Xem Chi Tiết</a>
                </div>
            </div>
            <div class="col l-5 m-3 c-0">
                <img src="./img_khach/header.jpg" class="img-introduction" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col l-3 m-6 c-12">
                <div class="about">
                    <i class='bx bx-shopping-bag' ></i>
                    <div class="option">
                        <div class="option-title">Miễn Phí Giao Hàng</div>
                        <p> Miễn phí ship với đơn hàng <br> >239k</p>
                    </div>
                </div>
            </div>
            <div class="col l-3 m-6 c-12">
                <div class="about">
                    <i class='bx bx-credit-card'></i>
                    <div class="option">
                        <div class="option-title">Thank toán COD</div>
                        <p> Thanh toán khi nhận hàng <br> (COD)</p>
                    </div>
                </div>
            </div>
            <div class="col l-3 m-6 c-12">
                <div class="about">
                    <i class='bx bx-diamond'></i>
                    <div class="option">
                        <div class="option-title">Khách hàng VIP</div>
                        <p> Ưu đãi dành cho khách hàng <br> VIP</p>
                    </div>
                </div>
            </div>
            <div class="col l-3 m-6 c-12">
                <div class="about">
                    <i class='bx bx-donate-heart'></i>
                    <div class="option">
                        <div class="option-title">Hỗ Trợ Bảo Hành</div>
                        <p> Đổi, sửa đồ tại tất cả store</p>
                    </div>
                </div>
            </div>
        </div>
<div class="grid wide">

<div class="row">
            <div class="col l-12 m-12 c-12">
                <div class='selling-products'> Top Sản Phẩm Bán Chạy Trong Tuần </div>
            </div>
        </div>
    <div class="row">
        <?php
        while($row = mysqli_fetch_array($query_pro)){
        ?>
        <div class="col l-4 m-6 c-12">
            <a class="index_item" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="name-item"><?php echo $row['tensanpham'] ?></p>
                <p class="price-item-after"> Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                <p class="buybuy"><?php echo $row['tendanhmuc'] ?></p>
            </a>
        </div>
            <?php
            }
            ?>
    </div>
    <?php
    $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count/3);
    ?>
    <div class="main_pagination">
        <p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>

        <ul class="pagination">

            <?php

            for($i=1;$i<=$trang;$i++){
                ?>
                <li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php
            }
            ?>

        </ul>
    </div>




</div>
<div class="col l-12 m-12 c-12 banner">
            <img src="./img_khach/sale.jpg" class="banner" alt="">
</div>
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class='new-products'> Sản Phẩm Mới </div>
            </div>
        </div>
        
            <div class="row">
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(1).jpg" class="item item1 " alt="">
                        <div class="name-item">Forest - Grey Cloud</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(5).jpg" class="item item1 " alt="">
                        <div class="name-item">Sonata - Light Brown </div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(6).jpg" class="item item1" alt="">
                        <img src="./img_khach/(6)(2).jpg" class="item item2" alt="">
                        <div class="name-item">Adagio - Grey</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA</button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(2).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Sonata - Light Brown</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(10).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Sonata - Dark Brown</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(7).jpg" class="item item1" alt="">
                        <img src="./img_khach/(6)(2).jpg" class="item item2" alt="">
                        <div class="name-item">Flower - Mari Gold</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA</button>
                    </div>
                </div>

        <!--BANNER-->
        <div class="col l-12 m-12 c-12 logoo">
            <img src="./img_khach/logo.jpg" class="logoo" alt="">
        </div>
        <!--PHỔ BIẾN-->
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <div class='popular-products'> Phổ Biến </div>
            </div>
        </div>
        <!--hàng1-->
        <div class="row">
        <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(9).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Adagio - Grey</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                    <img src="./img_khach/(1).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Sonata - Light Brown</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(10).jpg" class="item item1" alt="">
                        <img src="./img_khach/(6)(2).jpg" class="item item2" alt="">
                        <div class="name-item">Sonata - Dark Brown</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA</button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(8).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Ocean - Coral</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(5).jpg" class="item item1 " alt="">
                        <img src="./img_khach/(5) (2).jpg" class="item item2 " alt="">
                        <div class="name-item">Flower - Mari Gold</div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA </button>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="index_item">
                        <img src="./img_khach/(6).jpg" class="item item1" alt="">
                        <img src="./img_khach/(6)(2).jpg" class="item item2" alt="">
                        <div class="name-item">orest - Grey Cloud </div>
                        <span class="price-item-after">194,000</span>
                        <span class="price-item-before">399,000</span>
                        <br>
                        <button class="buy">CHỌN MUA</button>
                    </div>
                </div>