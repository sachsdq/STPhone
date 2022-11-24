<?php
include_once("connect.php");
$conn = db_connect();

// if ($conn->connect_error) {
//     echo "Connection failed: " . $conn->connect_error;
//     exit();
//   }
//   echo "Connected successfully";
// Create connection



$err = [];
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $RPassword = $_POST['RPassword'];


    if (empty($name)) {
        $err['Name'] = "Bạn chưa nhập tên";
    }
    if (empty($password)) {
        $err['password'] = "Bạn chưa nhập mật khẩu";
    }
    if (($password != $RPassword)) {
        $err['RPassword'] = "mật khẩu lần 2 chưa đúng";
    }
    // var_dump($err);

    // die();
    if (empty($err)) {


        $pass = md5($password);

        $sql = "INSERT INTO `nguoidung` (`id`, `tennguoidung`, `password`, `email`) 
            VALUES (NULL, '$name', '$pass', '$email') ";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header('location: login.php');
        }
    }



}
?>


<!DOCTYPE html>
<html lang="vi">

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

    <link rel="stylesheet" href="./style.css">
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
        img[alt="www.000webhost.com"] {
            display: none;
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
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nhập sách cần tìm kiếm...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <!-- <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="register.php" data-toggle="modal" data-target="#formdangky">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal" data-target="#formdangnhap">Đăng nhập</a>
                        </div>
                    </div> -->
                    <li class="nav-item quanly">
                        <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>

                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="login.php"
                            style="display:inline-block">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>
        <div class="container">
            <div class="row">
                <form action="register.php" method="post" role="form">
                    <table>
                        <tr>
                            <td>
                                <h2 class="text h2-text">Đăng Kí Tài Khoản</h2>
                            </td>
                        </tr>

                        <tr>
                            <div class="form-group">
                                <td><label class="text" for="">Tài Khoản</label></td>
                                <td><input type="text" class="form-control" name="Name"></td>
                                <td>
                                    <div class="has-error">
                                        <span>
                                            <?php echo (isset($err['Name'])) ? $err['Name'] : '' ?>
                                        </span>
                                    </div>
                                </td>
                            </div>


                        </tr>


                        <tr>
                            <div class="form-group">
                                <td><label class="text" for="">Email</label></td>
                                <td><input type="email" class="form-control" name="Email"></td>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-group">
                                <td><label class="text" for="">Mật Khẩu</label></td>
                                <td><input type="password" class="form-control" name="password"></td>
                                <td>
                                    <div class="has-error">
                                        <span>
                                            <?php echo (isset($err['password'])) ? $err['password'] : '' ?>
                                        </span>
                                    </div>
                                </td>
                            </div>
                        </tr>

                        <tr>
                            <div class="form-group">
                                <td><label class="text" for="">Nhập lại mật khẩu</label></td>
                                <td><input type="password" class="form-control" name="RPassword"></td>
                                <td>
                                    <div class="has-error">
                                        <span>
                                            <?php echo (isset($err['RPassword'])) ? $err['RPassword'] : '' ?>
                                        </span>
                                    </div>
                                </td>
                            </div>

                        </tr>

                        <tr>
                            <td><button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></td>
                        </tr>

                    </table>
                </form>

            </div>
        </div>

        </div>

    </body>

</html>