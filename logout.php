<?php
    $servername = "localhost";
    $username = "root";
    $HPassword = "";
    $database = "vidu";
    $conn = new mysqli($servername, $username, $HPassword,$database);

    $sql = " SELECT * FROM book ";
    $query = mysqli_query($conn,$sql);  
?> 
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>STPhone-Nơi mua bán điện thoại uy tín</title>
    <meta name="description" content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <script src="https://kit.fontawesome.com/80701acbe4.js" crossorigin="anonymous"></script>
    <style>
        img[alt="www.000webhost.com"] {
            display: none;
        }
    </style>
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="logout.php" style="color: #CF111A;"><b>STPhone</b>.vn</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

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

                <!--giỏ hàng-->
                <ul class="navbar-nav mb-1 ml-auto">
                    
                    <li class="nav-item quanly">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="index.php" style="display:inline-block">Giỏ hàng</a>
                    </li>
                </ul>
                <!-- ô đăng xuất trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    
                    <li class="nav-item quanly">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="index.php" style="display:inline-block">Logout</a>
                    </li>
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
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Apple</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Samsung</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Xiaomi</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Vivo</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Huawei</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Realme</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Lenovo</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Sony</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại Asus</a></li>
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
                                    <li class="liheader"><a href="#" class="header text-uppercase">Điện thoại TECNO</a></li>
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
                                <a href="#"><img src="https://hoangtusaigon.vn/wp-content/uploads/2021/01/banner-1.jpg" class="img-fluid" style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="https://www.viettablet.com/images/promo/47/tra-gop-0_-lai-suot-trong-3-thang-mobi-banner-viettablet.jpg" class="img-fluid" style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="https://www.duchuymobile.com/images/promo/34/s20-plus-pc-banner.jpg" class="img-fluid" style="height: 386px;" alt="Third slide"></a>
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

    <!-- khoi sach moi  -->
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SẢN PHẨM MỚI NHẤT</h1>
                        <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    <?php
                        while ($row = mysqli_fetch_assoc($query)) {?>
                            <div class="card">
                                <a href="Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                    <img class="card-img-top anh" src="images/<?= $row['imgURL']; ?>" alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten"><?= $row['tensach']?></h3>
                                        <!-- <small class="tacgia text-muted">Brian Finch</small> -->
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi"><!--111.200 ₫--><?= $row['gia'] ?>&nbsp;₫</div>
                                            <!-- <div class="giacu text-muted">139.000 ₫</div> -->
                                            <!-- <div class="sale">-20%</div> -->
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
                            <!-- <div class="card">
                                <a href="Ma-bun-luu-manh-va-nhung-cau-chuyen-khac-cua-nguyen-tri.html" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                                Trí">
                                    <img class="card-img-top anh" src="images/<?php echo $row['imgURL']; ?>" alt="ma-bun-luu-manh">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten"><?= $row['tensp']?></h3>
                                        <small class="tacgia text-muted">Nguyễn Trí</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi"><?= $row['gia'] ?>&nbsp;₫</div>
                                            <div class="giacu text-muted">85.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng">
                                    <img class="card-img-top anh" src="images/bank-4.0.jpg" alt="bank-4.0">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng
                                        </h3>
                                        <small class="tacgia text-muted">Brett King</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện
                                Tình Thân (Bộ 8 Cuốn)">
                                    <img class="card-img-top anh" src="images/bo-sach-500-cau-chuyen-dao-duc.jpg" alt="bo-sach-500-cau-chuyen-dao-duc">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện Tình Thân (Bộ 8 Cuốn)</h3>
                                        <small class="tacgia text-muted">Nguyễn Hạnh - Trần Thị Thanh Nguyên</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh">
                                    <img class="card-img-top anh" src="images/ung-thu-hoang-de-cua-bach-benh.jpg" alt="ung-thu-hoang-de-cua-bach-benh">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh</h3>
                                        <small class="tacgia text-muted">Siddhartha Mukherjee</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu">
                                    <img class="card-img-top anh" src="images/troi-dem-huyen-dieu.jpg" alt="troi-dem-huyen-dieu">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</h3>
                                        <small class="tacgia text-muted">Disney Learning</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5 Cuốn)">
                                    <img class="card-img-top anh" src="images/bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te.jpg" alt="bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5 Cuốn)
                                        </h3>
                                        <small class="tacgia text-muted">Nhiều Tác Giả</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                                <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Lịch Sử Thế Giới">
                                    <img class="card-img-top anh" src="images/lich-su-the-gioi.jpg" alt="lich-su-the-gioi">
                                    <div class="card-body noidungsp mt-3">
                                        <h3 class="card-title ten">Lịch Sử Thế Giới</h3>
                                        <small class="tacgia text-muted">Nam Phong tùng thư - Phạm Quỳnh chủ nhiệm</small>
                                        <div class="gia d-flex align-items-baseline">
                                            <div class="giamoi">111.200 ₫</div>
                                            <div class="giacu text-muted">139.000 ₫</div>
                                            <div class="sale">-20%</div>
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
                            </div> -->
                        <?php } ?>
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
                        <h2 class="header text-uppercase" style="font-weight: 400;">COMBO SÁCH HOT - GIẢM ĐẾN 25%</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">
                            <img class="card-img-top anh" src="images/combo-chuyen-nghe-chuyen-doi.jpg" alt="combo-chuyen-nghe-chuyen-doi">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn</h3>
                                <small class="tacgia text-muted">Nguyễn Hữu Long</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt">
                            <img class="card-img-top anh" src="images/combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg" alt="combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt</h3>
                                <small class="tacgia text-muted">Thích Nhất Hạnh</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                            Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong">
                            <img class="card-img-top anh" src="images/combo-hanh-phuc-sang-tao.jpg" alt="combo-hanh-phuc-sang-tao">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong
                                </h3>
                                <small class="tacgia text-muted">Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?">
                            <img class="card-img-top anh" src="images/combo-giao-duc-va-y-nghia-cuoc-song.jpg" alt="combo-giao-duc-va-y-nghia-cuoc-song">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?</h3>
                                <small class="tacgia text-muted"> J.Krishnamurti</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Dinh Dưỡng Xanh - Thần dược xanh">
                            <img class="card-img-top anh" src="images/combo-dinh-duong-than-duoc-xanh.jpg" alt="combo-dinh-duong-than-duoc-xanh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Dinh Dưỡng Xanh - Thần dược xanh</h3>
                                <small class="tacgia text-muted">Ryu Seung-SunVictoria Boutenko</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ">
                            <img class="card-img-top anh" src="images/combo-an-xanh-song-lanh.jpg" alt="combo-an-xanh-song-lanh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ</h3>
                                <small class="tacgia text-muted">Norman W. Walker</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21">
                            <img class="card-img-top anh" src="images/combo-luoc-su-loai-nguoi.jpg" alt="combo-luoc-su-loai-nguoi">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21</h3>
                                <small class="tacgia text-muted">Yuval Noah Harari</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)">
                            <img class="card-img-top anh" src="images/combo-phong-cach-song.jpg" alt="combo-phong-cach-song">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)</h3>
                                <small class="tacgia text-muted">Marie Tourell Soderberg, Joanna Nylund, Yukari
                                    Mitsuhashi, Margareta Magnusson, Linnea Dunne</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
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

    <!-- khoi sach sap phathanh  -->
    <section class="_1khoi sapphathanh mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH SẮP PHÁT HÀNH / ĐẶT TRƯỚC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Ngoại Giao Của Chính Quyền Sài Gòn">
                            <img class="card-img-top anh" src="images/ngoai-giao-cua-chinh-quyen-sai-gon.jpg" alt="ngoai-giao-cua-chinh-quyen-sai-gon">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Ngoại Giao Của Chính Quyền Sài Gòn</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trên Đất Hoa">
                            <img class="card-img-top anh" src="images/duong-may-tren-dat-hoa.jpg" alt="duong-may-tren-dat-hoa">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Đường Mây Trên Đất Hoa</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Muôn Kiếp Nhân Sinh">
                            <img class="card-img-top anh" src="images/muon-kiep-nhan-sinh.jpg" alt="muon-kiep-nhan-sinh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Muôn Kiếp Nhân Sinh</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
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
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trong Cõi Mộng">
                            <img class="card-img-top anh" src="images/duong-may-trong-coi-mong.jpg" alt="duong-may-trong-coi-mong.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Đường Mây Trong Cõi Mộng</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
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
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH HAY NÊN ĐỌC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg" alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                    <small class="thoigian text-muted">03/04/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg" alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                    <small class="thoigian text-muted">31/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                    <small class="thoigian text-muted">21/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg" alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom" title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg" alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
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
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#" style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>