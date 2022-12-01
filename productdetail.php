<?php
include_once("connect.php");
$conn = db_connect();

$sql = " SELECT * FROM sanpham ";
$query = mysqli_query($conn, $sql);

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

    <link rel="stylesheet" href="css/sach-moi-tuyen-chon.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
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
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small" placeholder="Nhập tên Điện thoại...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <!--giỏ hàng-->
                <ul class="navbar-nav mb-1 ml-auto">

                    <li class="nav-item quanly">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="cart.php"
                            style="display:inline-block">Giỏ hàng</a>
                    </li>
                </ul>
                <!-- ô đăng xuất trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">

                    <li class="nav-item quanly">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="index.php"
                            style="display:inline-block">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signup" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">Đăng ký</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với STPhone về</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                                vụ & Chính sách bảo mật</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-signin" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                            <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                                khẩu</a>
                        </div>

                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">Đăng nhập</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fab fa-google mr-2"></i> Đăng nhập bằng Google</button>
                        <button class="btn btn-lg btn-facedienthoai btn-block text-uppercase" type="submit"><i
                                class="fab fa-facedienthoai-f mr-2"></i> Đăng nhập bằng Facedienthoai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục điện thoại</span>
                        </div>
                        <!-- CATEGORIES -->
                        <div class="categorycontent">
                            <ul>
                                <li> <a href="#"> Điện thoại Apple</a><i class="fa fa-chevron-right float-right"></i>
                                    <ul>
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Apple</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Xiaomi</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Vivo</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Oppo</a>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Huawei</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Realme</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Lenovo</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Sony</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                Asus</a></li>
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
                                        <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại
                                                TECNO</a></li>
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
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>1900 1999</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <!-- <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="listdetail.php">Sản phẩm mới</a></li>
            </ol>
        </div>
    </section> -->

    <!-- ảnh banner -->
    <!-- <section class="banner">
        <div class="container">
            <a href="sach-moi-tuyen-chon.html"><img
                    src="https://hoangtusaigon.vn/wp-content/uploads/2021/01/banner-1.jpg" alt="sach-moi-full-banner"
                    class="img-fluid"></a>
        </div>
    </section> -->

    <!-- các sản phẩm  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="items">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <!-- 1 sản phẩm  -->
                            <?php
                            while ($row = mysqli_fetch_assoc($query)) { ?>
                            <div class="card">
                                <div class="motsanpham"
                                    style="text-decoration: none; color: black;" data-toggle="tooltip"
                                    data-placement="bottom" title="">
                                    <img class="card-img-top anh" src="images/<?= $row['imgURL']; ?>"
                                        alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                    <div class="card-body noidungsp mt-3">
                                        <h6 class="card-title ten"><?= $row['tensanpham'] ?></h6>
                                        <!-- <small class="tacgia text-muted">Brian Finch</small> -->
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi"><?= $row['gia'] ?>&nbsp;₫</div>
                                            <div style="text-decoration: line-through; color: #9e9e9e">? đ</div>
                                            <div class="sale">-20%</div>
                                        </div>
                                        <div class="danhgia">
                                            <ul class="d-flex" style="list-style: none;">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <span class="text-muted">0 nhận xét</span>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- mo ta san pham -->
                                    <div>
                                        <b>Mô tả</b> <br>
                                        <b>Tên máy :</b> <?= $row['tensanpham'] ?><br>
                                        <b>Hãng : </b> <?= $row['hangsanpham'] ?><br>
                                        <b>Đặc điểm : </b> <?= $row['mota'] ?>
                                    </div>
                            </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- pagination bar  -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <!-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li> -->
                                    <!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&rsaquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>


    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-dienthoais.png" alt="icon-dienthoais">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">HƠN 10 HÃNG ĐIỆN THOẠI</h6>
                            <p class="detail">Cập nhật bởi STPhone</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Từ 150.000đ ở TP.HCM</p>
                            <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                            <p class="detail">Tặng ốp lưng</p>
                            <p class="detail">Bao da miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                            <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về STPhone</h6>
                        <a href="#">Giới thiệu về STPhone</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facedienthoai.com/Dealdienthoai-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="images/atm-payment.jpg" alt="atm-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                        <img src="images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>


</body>

</html>