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
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Giỏ hàng</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
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
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>StoreBook</b>.vn</a>

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
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="register.php">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="login.php">Đăng nhập</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Quản lý đơn hàng</h1>
    <form method="POST">
        <p><label for="tinhtrang">Trạng thái</label>
            <select name="tinhtrang" id="tinhtrang">
                <option value='0' <?php if ($_SESSION["tinhtrang"] == 0) {                  echo " selected ";
                } ?>
                    >Tất cả</option>
                <?php
                $sqltinhtrang = "select * from tbltinhtrang";
                $result = $conn->query($sqltinhtrang);
                while ($row = $result->fetch_array()) {
                    if ($row["matt"] == (int) $_SESSION["tinhtrang"]) {
                        echo "<option selected value='{$row['matt']}'>{$row['tentt']}</option>";
                    } else {
                        echo "<option value='{$row['matt']}'>{$row['tentt']}</option>";
                    }
                }
                ?>
            </select>
        </p>
        <p><label for="sodienthoai">Số điện thoại</label>
            <input type="text" name="sodienthoai" value="<?= $_SESSION['sodienthoai'] ?>">
        </p>
        <p>
            <input type="submit" name="loc" value="Lọc">
        </p>
    </form>
    <?php
    $where = " true ";
    if ($_SESSION["sodienthoai"] != "") {
        $where = $where . "and tbldonhang.sodienthoai = '{$_SESSION['sodienthoai']}' ";
    }
    if ((int) $_SESSION["tinhtrang"] != 0) {
        $where = $where . "and tinhtrang = {$_SESSION['tinhtrang']}";
    }
    $sql = "select * from tbldonhang, tblkhachhang, tbltinhtrang ";
    $sql = $sql . " where tbldonhang.sodienthoai = tblkhachhang.sodienthoai ";
    $sql = $sql . " and tbldonhang.tinhtrang = tbltinhtrang.matt";
    $sql = $sql . " and {$where} ";
    $result = $conn->query($sql);
    if ($conn->affected_rows > 0) {
        echo "<p style='font-weight:bold;'>Các đơn hàng</p>";
        echo "<table border='1' cellspacing = '0' cellpadding = '3'>";
        echo "<tr>";
        echo "<th>Tên khách hàng</th>";
        echo "<th>Số điện thoại</th>";
        echo "<th>Địa chỉ giao</th>";
        echo "<th>Tình trạng</th>";
        echo "<th>Hành động</th>";
        echo "<tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>{$row['tenkh']}</td>";
            echo "<td>{$row['sodienthoai']}</td>";
            echo "<td>{$row['diachigiao']}</td>";
            echo "<td>{$row['tentt']}</td>";
            echo "<td>";
            echo "<form action='donhang.php' method='POST'>";
            echo "<input type='hidden' name='madh' value='{$row['madh']}'>";
            echo "<input type='submit' name='xem' value='Xem chi tiết'>";
            echo "</form>";
            echo "</td>";
            echo "<tr>";
        }
        echo "</table>";
    } else {
        echo "Không tìm thấy đơn hàng nào";
    }
    ?>
</body>

</html>
<?php
$conn->close();
?>
