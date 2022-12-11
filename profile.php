<?php
include_once("connect.php");
$conn = db_connect();

session_start();

// Vì chỉ có một người dùng nên không dùng vòng lặp while
$sql = "select * from nguoidung where tennguoidung = " . "'{$_SESSION['current_user']}'";
$result = $conn->query($sql);
$row = $result->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
            <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>Hồ sơ cá nhân</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/profile.css">
        <script src="https://kit.fontawesome.com/80701acbe4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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
            <!-- <ul class="navbar-nav mb-1 ml-auto">

                <li class="nav-item quanly">
                    <a href="#" class="btn btn-secondary rounded-circle">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="cart-amount">0</div>
                    </a>
                    <a class="nav-link text-dark quanly text-uppercase" href="cart.php"
                        style="display:inline-block">Giỏ hàng</a>
                </li>
            </ul> -->
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

    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="./images/avatardefault.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?= $row['tennguoidung'] ?></h4>
                                    <p class="text-secondary mb-1"></p>
                                    <p class="text-muted font-size-sm"></p>
                                    <a href="cart.php"><button class="btn btn-primary">Giỏ hàng</button></a>
                                    <a href="#"><button class="btn btn-outline-primary">Đã mua</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter</h6>
                                <span class="text-secondary">...</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary">...</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">...</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Tên</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $row['hovaten'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $row['email'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Điện thoại</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $row['sodienthoai'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Địa chỉ</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $row['diachi'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" href="editprofile.php">Chỉnh sửa</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2">Đơn hàng của tôi</i></h6>
                                    <a href="#"><i class="fa-solid fa-money-check"></i>
                                        <small>Chờ thanh toán</small></a><br>

                                    <a href="#"><i class="fa-solid fa-dolly"></i>
                                        <small>Chờ vận chuyển</small></a><br>

                                    <a href="#"><i class="fa-solid fa-truck-fast"></i>
                                        <small>Chờ giao hàng</small></a><br>

                                    <a href="#"><i class="fa-solid fa-comment"></i>
                                        <small>Chưa đánh giá</small></a><br>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2">Dịch vụ</i></h6>
                                    <a href="#"><i class="fa-solid fa-money-bill-1"></i>
                                        <small>Tùy chọn thanh toán</small></a><br>

                                    <a href="#"><i class="fa-solid fa-headset"></i>
                                        <small>Chat với STPhone</small></a><br>

                                    <a href="#"><i class="fa-solid fa-hand-holding-dollar"></i>
                                        <small>Bán hàng trên STPhone</small></a><br>

                                    <a href="#"><i class="fa-solid fa-circle-question"></i>
                                        <small>Trợ giúp</small></a><br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">

    </script>
</body>

</html>