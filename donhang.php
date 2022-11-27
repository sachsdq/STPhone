<?php
include_once("connect.php");
$conn = db_connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STPhone-Nơi mua bán điện thoại uy tín</title>
</head>

<body>
    <button onclick="window.location.href='cart.php'">Quản lý đơn hàng</button>
    <h1>Đơn hàng</h1>
    <?php
    if (isset($_POST["luu"])) {
        $tinhtrang = $_POST["tinhtrang"];
        $madh = $_POST["madh"];
        $sql = "update tbldonhang set tinhtrang = {$tinhtrang} where madh = {$madh}";
        $result = $conn->query($sql);
    }
    if (isset($_POST["madh"])) {
        $madh = $_POST["madh"];
        $sql = "select * from tbldonhang, tblkhachhang ";
        $sql = $sql . " where tbldonhang.sodienthoai = tblkhachhang.sodienthoai ";
        $sql = $sql . " and madh = {$madh}";
        $result = $conn->query($sql);
        $row = $result->fetch_array();
        echo "<p>Tên khách hàng: {$row['tenkh']}</p>";
        echo "<p>Số điện thoại: {$row['sodienthoai']}</p>";
        echo "<p>Địa chỉ giao hàng: {$row['diachigiao']}</p>";
        $tinhtrang = $row['tinhtrang'];
        echo "<p style='font-weight:bold;'>Chi tiết đơn hàng</p>";
        $sql = "select * from tblchitietdonhang where madh = {$madh}";
        $result = $conn->query($sql);
        echo "<table border='1' cellspacing='0'>";
        echo "<tr><th>Tên hàng</th><th>Đơn giá</th><th>Số lượng</th><th>Thành
tiền</th></tr>";
        $tongtien = 0;
        while ($row = $result->fetch_array()) {
            $thanhtien = $row['gia'] * $row['soluong'];
            $tongtien = $tongtien + $thanhtien;
            $gia = number_format($row['gia']);
            $soluong = number_format($row['soluong']);
            $thanhtien = number_format($thanhtien);
            echo "<tr>";
            echo "<td>{$row['tenhang']}</td>";
            echo "<td align='right'>{$gia}</td>";
            echo "<td align='right'>{$soluong}</td>";
            echo "<td align='right'>{$thanhtien}</td>";
            echo "</tr>";
        }
        $tongtien = number_format($tongtien);
        echo "<tr><td colspan='3'>Tổng tiền</td><td>{$tongtien}</td></tr>";
        echo "</table>";
        echo "<p>";
        echo "<form method='POST'>";
        echo "<label for='tinhtrang'>Tình trạng</label>";
        echo "<select id='tinhtrang' name='tinhtrang'>";
        $sql = "select * from tbltinhtrang";
        $result = $conn->query($sql);
        while ($row = $result->fetch_array()) {
            if ($row['matt'] == $tinhtrang) {
                echo "<option selected value='{$row['matt']}'>{$row['tentt']}</option>";
            } else {
                echo "<option value='{$row['matt']}'>{$row['tentt']}</option>";
            }
        }
        echo "</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<input type='hidden' name='madh' value='{$madh}'>";
        echo "<input type='submit' name='luu' value='Lưu'>";
        echo "</form>";
        echo "</p>";
    }
    ?>
    <button onclick="window.location.href='cart.php'">Quản lý đơn hàng</button>
</body>

</html>
<?php
$conn->close();
?>