<?php
include_once("connect.php");
$conn = db_connect();

$sqlsanpham = " SELECT * FROM sanpham ";
$sanpham = mysqli_query($conn, $sqlsanpham);

$sqlsanphamgiamgia = " SELECT * FROM sanphamgiamgia ";
$sanphamgiamgia = mysqli_query($conn, $sqlsanphamgiamgia);

$sqlsanphammoi = " SELECT * FROM sanphammoi ";
$sanphammoi = mysqli_query($conn, $sqlsanphammoi);

$fmt = numfmt_create('vi_VN', NumberFormatter::CURRENCY);
session_start();

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>STPhone-Nơi mua bán điện thoại uy tín</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealdienthoai.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>
        /* CSS */
        .button-1 {
            background-color: #f5a623;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 10px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-1:hover,
        .button-1:focus {
            /* background-color: #F082AC; */
            box-shadow: 0px 2px 5px #f5a623;
        }
    </style>
</head>

<body>
    <!-- code cho nut like share facedienthoai  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facedienthoai.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>STPhone</b>.vn</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form action="search.php" class="form-inline ml-auto my-2 my-lg-0 mr-3" method="POST">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" name="tukhoa" class="form-control" aria-label="Small"
                            placeholder="Nhập tên Điện thoại...">
                        <div class="input-group-append">
                            <button type="submit" name="timkiem" class="btn"
                                style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!--giỏ hàng-->
                <ul class="navbar-nav mb-1 ml-auto">

                    <li class="nav-item quanly">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">
                                <?php
                                if (isset($_SESSION['cart_number'])) {
                                    echo $_SESSION['cart_number'];
                                } else {
                                    echo "0";
                                }
                                ?>
                            </div>
                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="cart.php"
                            style="display:inline-block">Giỏ hàng</a>
                    </li>

                </ul>
                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">
                                <?php
                                if (isset($_SESSION['current_user'])) {
                                    echo $_SESSION['current_user'];
                                } else {
                                    echo "Tài khoản";
                                }
                                ?>
                            </a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                            if (isset($_SESSION['current_user'])) {
                                echo "<a class='dropdown-item nutdangky text-center mb-2' href='logout.php'>Đăng xuất</a>";
                                echo "<a class='dropdown-item nutdangky text-center mb-2' href='profile.php'>Profile</a>";
                            } else {
                                echo "<a class='dropdown-item nutdangky text-center mb-2' href='register.php'>Đăng ký</a>";
                                echo "<a class='dropdown-item nutdangnhap text-center' href='login.php'>Đăng nhập</a>";
                            }
                            ?>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>



    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <!-- <i class="fa fa-bars" style="color:black"></i>
                            <span class="text-uppercase font-weight-bold ml-1" style="color:black">Danh mục sản phẩm</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
                    <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a href="#"> Điện thoại Apple</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Apple</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">iPhone 14/ 14 Plus (2022)</a></li>
                                        <li><a href="#">iPhone 14 Pro/ Pro Max (2022)</a></li>
                                        <li><a href="#">iPhone SE 2022.</a></li>
                                        <li><a href="#">iPhone 13 và 13 mini (2021)</a></li>
                                        <li><a href="#">iPhone 13 Pro và iPhone 13 Pro Max (2021)</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">iPhone 12 mini đến iPhone 12 Pro Max (2020)</a></li>
                                        <li><a href="#">iPhone SE 2020</a></li>
                                        <li><a href="#">iPhone 11, 11 Pro và 11 Pro Max (2019)</a></li>
                                        <!-- <li><a href="#">Sách Chứng Khoán - Bất Động Sản - Đầu Tư</a></li>
                                        <li><a href="#">Sách Marketing - Bán Hàng</a></li> -->
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Điện thoại Samsung </a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                            Samsung</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Samsung Galaxy A72</a></li>
                                        <li><a href="#">Samsung Galaxy M51</a></li>
                                        <li><a href="#">Samsung Galaxy Z Flip3 5G</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Samsung Galaxy A51</a></li>
                                        <li><a href="#">Samsung Galaxy M62</a></li>
                                        <li><a href="#"> Samsung Galaxy Note10 Plus</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Xiaomi</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Xiaomi</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Xiaomi Redmi Note 11 </a></li>
                                        <li><a href="#">Xiaomi Redmi Note 11S series </a></li>
                                        <li><a href="#">Xiaomi 12T Pro</a></li>
                                        <li><a href="#">Xiaomi 12 series</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Xiaomi 11T Pro 5G</a></li>
                                        <li><a href="#">Xiaomi 12T </a></li>
                                        <li><a href="#">Xiaomi 11T </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Vivo</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Vivo</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">vivo X70 Pro</a></li>
                                        <li><a href="#">vivo V23e </a></li>
                                        <li><a href="#">vivo V23 5G</a></li>
                                        <li><a href="#">vivo V21 5G</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">vivo V20 2021</a></li>
                                        <li><a href="#">vivo Y15s</a></li>
                                        <li><a href="#">vivo Y33s</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Oppo</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Oppo</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">OPPO Reno8 series</a></li>
                                        <li><a href="#">OPPO A55</a></li>
                                        <li><a href="#">OPPO Find X5 Pro 5G</a></li>
                                        <li><a href="#">OPPO Reno6 series </a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">OPPO Reno7 series</a></li>
                                        <li><a href="#">OPPO A96</a></li>
                                        <li><a href="#">OPPO A77s</a></li>
                                        <li><a href="#">OPPO A95</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Huawei</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Huawei</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Huawei Mate 50 Pro</a></li>
                                        <li><a href="#">Huawei Nova 4</a></li>
                                        <li><a href="#">Huawei P50 Pro</a></li>
                                        <li><a href="#">Huawei Nova 10z</a></li>
                                        <li><a href="#">Huawei Nova Y70 Plus</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Huawei Mate 40E</a></li>
                                        <li><a href="#">Huawei Mate 50E</a></li>
                                        <li><a href="#">Huawei Mate 40 Pro</a></li>
                                        <li><a href="#">Huawei P30 Pro</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Realme</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Realme</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">realme C33</a></li>
                                        <li><a href="#">realme C30S</a></li>
                                        <li><a href="#">realme C35</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">realme C25s</a></li>
                                        <li><a href="#">realme C25</a></li>
                                        <li><a href="#">realme C11</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Lenovo</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Lenovo</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Lenovo Vibe K5 Plus</a></li>
                                        <li><a href="#">Lenovo Vibe X3</a></li>
                                        <li><a href="#">Lenovo Vibe S1</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Lenovo Vibe Shot</a></li>
                                        <li><a href="#">Lenovo Vibe P1</a></li>
                                        <li><a href="#">Lenovo Vibe P1m</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Sony</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Sony</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Sony Xperia XZ</a></li>
                                        <li><a href="#">Sony Xperia Z5 Premium</a></li>
                                        <li><a href="#">Sony Xperia X</a></li>
                                        <li><a href="#">Sony Xperia XA</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Sony Xperia C4 Dual</a></li>
                                        <li><a href="#">Sony Xperia Z2</a></li>
                                        <li><a href="#">Sony Xperia M4 Aqua</a></li>
                                        <li><a href="#">Sony Xperia Z3+</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại Asus</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Asus</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Asus Zenfone 5</a></li>
                                        <li><a href="#">Asus Zenfone 4</a></li>
                                        <li><a href="#">Asus Zenfone 4 Max Pro</a></li>
                                        <li><a href="#">Asus Zenfone Max Pro m1</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Asus Zenfone 3</a></li>
                                        <li><a href="#">Asus Zenfone 2</a></li>
                                        <li><a href="#">Asus Zenfone Go</a></li>
                                        <li><a href="#">Asus Zenfone Selfie</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Điện thoại TECNO</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại TECNO</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Tecno Pop 6 Go</a></li>
                                        <li><a href="#">Tecno Pova 4 Pro</a></li>
                                        <li><a href="#">Tecno Pova 4</a></li>
                                        <li><a href="#">Tecno Spark 8C</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Tecno Pova</a></li>
                                        <li><a href="#">Tecno Phantom X2 5G</a></li>
                                        <li><a href="#">Tecno Pova Neo 2</a></li>
                                        <li><a href="#">Tecno Pova 3</a></li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="https://hoangtusaigon.vn/wp-content/uploads/2021/01/banner-1.jpg"
                                        class="img-fluid" style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img
                                        src="https://www.viettablet.com/images/promo/47/tra-gop-0_-lai-suot-trong-3-thang-mobi-banner-viettablet.jpg"
                                        class="img-fluid" style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img
                                        src="https://www.duchuymobile.com/images/promo/34/s20-plus-pc-banner.jpg"
                                        class="img-fluid" style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi san pham moi  -->
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM MỚI NHẤT</h1>
                        <a href="listdetail.php" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    <?php
                    if ($conn->affected_rows > 0) {
                        while ($row = mysqli_fetch_assoc($sanpham)) {
                            $masanpham = $row['masanpham'];
                            $tensanpham = $row['tensanpham'];
                            $gia = $row['gia'];
                            $mota = '';
                    ?>
                    <div class="card">
                        <a href="" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom">
                            <img class="card-img-top anh" src="images/<?= $row['imgURL']; ?>"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">
                                    <?= $row['tensanpham'] ?>
                                </h3>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">
                                        <?= numfmt_format_currency($fmt, ((int) ($gia)), "VND"); ?>&nbsp;
                                    </div>
                                        <?php // echo numfmt_format_currency($fmt, ((int) ($gia)), "VND"); ?>
                                </div>

                                <?php
                            echo "<input class='button-1' type='submit' name='submit' value='Chọn mua' form='{$masanpham}'> \n";
                            // echo "<input class='btn btn-primary' type='submit' name='submit' value='Chọn mua' form='{$masanpham}'> \n";
                            echo "<form id='{$masanpham}' method='POST' action='cart.php'> \n";
                            echo "<input type='hidden' name='masp' value='{$masanpham}'> \n";
                            echo "<input type='hidden' name='hanhdong' value='them'> \n";
                            echo "</form>";
                            echo "</p> \n\n";
                                ?>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                            echo "</form>";
                        }
                    } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach combo hot  -->
    <section class="_1khoi combohot mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header -->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM ĐANG SALE GIẢM GIÁ</h2>
                        <a href="listdetail.php" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    <?php
                    $sql = " SELECT * FROM sanphamgiamgia ";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($sanphamgiamgia)) { ?>
                    <div class="card">
                        <a href="" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                            <img class="card-img-top anh" src="images/<?= $row['imgURL']; ?>"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">
                                    <?= $row['tensanpham'] ?>
                                </h3>
                                <!-- <small class="tacgia text-muted">Brian Finch</small> -->
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">
                                        <!--111.200 ₫-->
                                        <?= numfmt_format_currency($fmt, ((int) ($row['gia']) * (100 - (int) 
                            ($row['phantramgiam'])) / 100), "VND"); ?>&nbsp;
                                    </div>
                                    <div style="text-decoration: line-through; color: #9e9e9e">
                                        <?= numfmt_format_currency($fmt, ((int) ($row['gia'])), "VND"); ?>&nbsp;
                                    </div>
                                    <!-- <div class="giacu text-muted">139.000 ₫</div> -->
                                    <div class="sale">
                                        <?= $row['phantramgiam']; ?>%
                                    </div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- khoi sach sap phathanh  -->
    <section class="_1khoi sapphathanh mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM SẮP PHÁT HÀNH</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Iphone 14 Series">
                            <img class="card-img-top anh" src="images/iphone14-sap-phat-hanh.png"
                                alt="ngoai-giao-cua-chinh-quyen-sai-gon">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Iphone 14 Series</h3>
                                <small class="tacgia text-muted">Apple</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Oppo Find X5 Pro">
                            <img class="card-img-top anh" src="images/oppofindx5pro-sap-phat-hanh.jpg"
                                alt="duong-may-tren-dat-hoa">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Oppo Find X5 Pro</h3>
                                <small class="tacgia text-muted">Oppo</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Galaxy Z Fold 4">
                            <img class="card-img-top anh" src="images/samsunggalaxyzfold4-sap-phat-hanh.png"
                                alt="muon-kiep-nhan-sinh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Galaxy Z Fold 4</h3>
                                <small class="tacgia text-muted">Samsung</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Sony Xperia 1 IV">
                            <img class="card-img-top anh" src="images/sonyxperia1iv-sap-phat-hanh.jpg"
                                alt="duong-may-trong-coi-mong.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Sony Xperia 1 IV</h3>
                                <small class="tacgia text-muted">Sony</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">BÁO MỚI VỀ CÁC DÒNG SẢN PHẨM</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/iphone14-sap-phat-hanh.png"
                                    alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Điện thoại ra mắt cuối năm 2022</h3>
                                    <small class="thoigian text-muted">03/04/2022</small>
                                    <div><a class="detail" href="https://viettelstore.vn/tin-tuc/dien-thoai-se-ra-mat-cuoi-nam-2022">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cach-chon-smartphone.png"
                                    alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Những lưu ý khi mua SmartPhone</h3>
                                    <small class="thoigian text-muted">31/03/2022</small>
                                    <div><a class="detail" href="https://www.thegioididong.com/tin-tuc/nhung-luu-y-truoc-khi-mua-dien-thoai-moi-2021-1387837">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/nen-mua-iphone-nao.jpg">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Nên mua dòng Iphone nào năm 2022</h3>
                                    <small class="thoigian text-muted">21/03/2022</small>
                                    <div><a class="detail" href="https://www.thegioididong.com/tin-tuc/nen-mua-iphone-nao-tot-nhat-2021-1361370">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/dien-thoai-samsung-nen-mua.jpg"
                                    alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Top 18 điện thoại Samsung nên mua</h3>
                                    <small class="thoigian text-muted">16/03/2022</small>
                                    <div><a class="detail" href="https://didongviet.vn/dchannel/dien-thoai-samsung-moi-nhat/">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dien-thoai-oppo-nen-mua.jpg"
                                    alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Top 11 điện thoại Oppo nên mua</h3>
                                    <small class="thoigian text-muted">16/03/2022</small>
                                    <div><a class="detail" href="https://didongviet.vn/dchannel/dien-thoai-oppo-moi-nhat/">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>