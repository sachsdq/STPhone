<?php
session_start();
unset($_SESSION['current_user']);
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>STPhone-Nơi mua bán điện thoại uy tín</title>
        <meta name="description"
            content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
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
        <script src="https://kit.fontawesome.com/80701acbe4.js" crossorigin="anonymous"></script>
        <style>
            img[alt="www.000webhost.com"] {
                display: none;
            }
        </style>
</head>

<body>
    <!-- code cho nut like share facedienthoai  -->
    <div id="fb-root">

    </div>
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
                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">
                                <?php
                            // Đoạn này kiểm tra người dùng đã đăng nhập hay chưa
                            if (isset($_SESSION['current_user'])) {
                                // Nếu người dùng đã đăng nhập thì echo ra người dùng hiện tại
                                echo $_SESSION['current_user'];
                            } else {
                                // Nếu người dùng chưa đăng nhập thì hiển thị ra chữ đăng nhập
                                echo "Tài khoản";
                            }
                            ?>
                            </a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                        // Đoạn này kiểm tra người dùng đã đăng nhập hay chưa
                        if (isset($_SESSION['current_user'])) {
                            // Nếu người dùng đã đăng nhập thì hiển thị nút đăng xuất và hiển thị profile
                            echo "<a class='dropdown-item nutdangky text-center mb-2' href='logout.php'>Đăng xuất</a>";
                            echo "<a class='dropdown-item nutdangky text-center mb-2' href='profile.php'>Profile</a>";
                        } else {
                            // Nếu người dùng đã đăng nhập thì hiển thị nút đăng ký và đăng nhập
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

    <?php
    echo "Đã đăng xuất thành công";
    ?>
</body>

</html>