<?php ob_start(); ?>
<?php   
    $servername = "localhost";
    $username = "root";
    $Password = "";
    $database = "vidu";
    $conn = new mysqli($servername, $username, $Password,$database);
    // session_start();
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

    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" /> -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
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
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>STPhone</b>.vn</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small" placeholder="Nhập sách cần tìm kiếm...">
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
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>

                        </a>
                        <a class="nav-link text-dark quanly text-uppercase" href="register.php" style="display:inline-block">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<body>
       <div class="container">
            <div class="row">                  
            <!-- <div class="login-p"> -->
                <form action="login.php" method="get">
                    <div class="login-margin">
                        <div class="css-php">
                            <?php
                                if (isset($_GET['DangNhap'])) {
                                    $user = $_GET['Name'];                         
                                    $password = $_GET['password'];
                                    
                                
                                    $sql = "SELECT * FROM `user` WHERE user = '$user'" ;
                                    $query = mysqli_query($conn,$sql);
                                    $data = mysqli_fetch_assoc($query);
                                    $checkName = mysqli_num_rows($query);
                                    $Passwordmd5 = md5($password);
                                
                                    if ($checkName > 0 ) {                                     
                                        if ($Passwordmd5 !=  $data['password']) {
                                            echo "<p style= 'color:red; text-align:center;'>  mật khẩu không tồn tại </p>";
                                        } else {
                                            
                                            header('location: logout.php');
                                        }
                                    } 
                                    else if ($user == "Nhom19" && $password == "123") {
                                        header('location: Trangchu.php');
                                    }
                                    else {
                                        echo "<p style= 'color:red; text-align:center;'>  tên không tồn tại </p>";
                                    }
                                }

                            ?>
                        </div>
                        <div class="TK sub-login">
                            <td  class="login-sub"><span>Tài Khoản</span></td>
                            <td class="login-sub input-sub"><input type="text" name="Name" required="required"  ></td>
                        </div>

                        <div class="MK sub-login" >
                            <td class="login-sub"><span>Mật Khẩu</span></td>
                            <td class="login-sub input-sub"><input type="password" name="password" required="required"  ></td>
                        </div>

                        
                        <div class="submit sub-login">
                            <input type="submit" class="submit-login" value="Đăng Nhập" name="DangNhap">                              
                        </div>

                    </div>    
                </form>    
            <!-- </div> -->
                
            </div>
       </div>
              
</div>
    
</body>
</html>