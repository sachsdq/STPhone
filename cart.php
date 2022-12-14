<?php
session_start();
if (!isset($_SESSION["tinhtrang"])) {
    $_SESSION["tinhtrang"] = 0;
}
if (!isset($_SESSION["sodienthoai"])) {
    $_SESSION["sodienthoai"] = "";
}
if (isset($_POST["loc"])) {
    $_SESSION["tinhtrang"] = $_POST["tinhtrang"];
    $_SESSION["sodienthoai"] = $_POST["sodienthoai"];
}
include_once("connect.php");
$conn = db_connect();

// Kiểm tra
if (isset($_SESSION["giohang"])) {
    $giohang = $_SESSION["giohang"];
} else {
    // $_SESSION["giohang"] = $giohang;
}

if (isset($_POST["hanhdong"])) {
    $hanhdong = $_POST["hanhdong"];
    if ($hanhdong == "them") {
        // Thêm vào giỏ hàng
        $masp = $_POST["masp"];
        if (isset($giohang[$masp])) {
            $giohang[$masp] = (int) $giohang[$masp] + 1;
        } else {
            $giohang[$masp] = 1;
        }
        $_SESSION["giohang"] = $giohang;
    } elseif ($hanhdong == "capnhat") {
        // capnhat
        $dssl = $_POST["dssl"];
        foreach ($giohang as $k => $v) {
            $giohang[$k] = (int) $dssl[$k];
            if ($giohang[$k] == 0) {
                unset($giohang[$k]);
            }
        }
        $_SESSION["giohang"] = $giohang;
    } elseif ($hanhdong == 'xoa') {
        $giohang = array();
        $_SESSION["giohang"] = $giohang;
    }
}

$_SESSION['cart_number'] = 0;
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

        .button-order {
            background-color: #f5a623;
        }

        .button-delete {
            background-color: red;
        }

        .button-home {
            background-color: green;
        }

        .button-home:hover,
        .button-home:focus {
            /* background-color: #F082AC; */
            box-shadow: 0px 2px 5px green;
        }

        .button-order:hover,
        .button-order:focus {
            /* background-color: #F082AC; */
            box-shadow: 0px 2px 5px #f5a623;
        }

        .button-delete:hover,
        .button-delete:focus {
            /* background-color: #F082AC; */
            box-shadow: 0px 2px 5px red;
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



    <h1>Quản lý giỏ hàng</h1>
    <?php
    if (!isset($giohang)) {
        echo "Chưa có hàng trong giỏ";
    } else {
        if (count($giohang) == 0) {
            echo "Chưa có hàng trong giỏ";
        } else {
            echo "<p style='font-weight:bold;'>Các đơn hàng</p>";
            echo "<table id='cart' class='table table-hover table-condensed' style='text-align: center; width: 80%; margin: 0px 10%; font-size: 16px'>";
            echo "<tr>";
            echo "<th>Mã sản phẩm</th>";
            echo "<th>Tên sản phẩm</th>";
            echo "<th>Giá sản phẩm</th>";
            echo "<th>Số lượng</th>";
            echo "<th>Thành tiền</th>";
            echo "<th>Hành động</th>";
            echo "<tr>";

            // Danh sách mã
            $dsma = implode(",", array_keys($giohang));
            $sql = "select * from sanpham where masanpham in ($dsma)";
            $result = $conn->query($sql);
            $tongtien = 0;
            while ($row = $result->fetch_array()) {
                $ma = $row["masanpham"];
                echo "<tr>";
                echo "<td>{$row['masanpham']}</td>";
                echo "<td>{$row['tensanpham']}</td>";
                $gia = number_format($row['gia']);
                echo "<td align='right'>{$gia}</td>";
                echo "<td align='right'>";
                echo "<input type='number' name='dssl[{$ma}]' value='{$giohang[$ma]}' min='0' le='width:50px; text-align: right;'>";
                echo "</td>";
                $thanhtien = $giohang[$ma] * $row["gia"];
                $tongtien = $tongtien + $thanhtien;
                $thanhtien = number_format($thanhtien);
                echo "<td align='right'>{$thanhtien}</td>";
                echo "<td><input type='submit' name='submit' class='button-1 button-order' style='margin: 5px; min-width: 100px;' value='Đặt sản phẩm'><br><input type='submit' name='submit' class='button-1 button-delete' style='margin: 5px; min-width: 100px;' value='Xóa sản phẩm'></td>";
                echo "</tr>";
                $_SESSION['cart_number'] += 1;
            }
            $strtongtien = number_format($tongtien);
            echo "<tr><td colspan='3'>Tổng tiền</td><td colspan='2' align='right'>{$strtongtien}</td></tr>";
            echo "<tr>";
            echo "<td colspan='4' align='right'>";
            echo "<input type='hidden' name='hanhdong' value='capnhat'>";
            echo "<input type='submit' name='submit' value='Cập nhật'>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</form>";
        }
    }
    ?>
    <p>
    <form method="POST" style="display: inline;">
        <input type="hidden" name="hanhdong" value="xoa">
        <input type="submit" name="submit" value="Xóa giỏ hàng" class='button-1 button-delete'
            style='margin: 5px; min-width: 100px;'>
    </form>
    <button onclick="window.location.href='#'" class='button-1 button-order' style='margin: 5px; min-width: 100px;'>
        Đặt hàng
    </button>
    <button onclick="window.location.href='index.php'" class='button-1 button-home'
        style='margin: 5px; min-width: 100px;'>Trang sản phẩm</button>
</body>

</html>

<?php $conn->close(); ?>