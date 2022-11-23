<?php
require("connect.php");
$conn = db_connect();
$sql = "SELECT * FROM `sanpham`";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phầm</title>
</head>

<body>
    <h1>Quản lí danh sách sản phẩm</h1>
    <button>
        <a style="margin: 0;" href="addproduct.php">Thêm sản phẩm</a>
    </button>
    <table id="producList">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hãng</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td>
                <?= $row["masanpham"] ?>
            </td>
            <td>
                <?= $row["tensanpham"] ?>
            </td>
            <td>
                <?= $row["hangsanpham"] ?>
            </td>
            <td>
                <?= $row["gia"] ?> &nbsp; VNĐ
            </td>
            <td><img style="width:200px; height: 200px;" src="./images/<?= $row["imgURL"] ?>" alt=""></td>
            <td>
                <?= $row["mota"] ?>
            </td>
            <td><a href="editproduct.php?id=<?= $row["masanpham"] ?>">Sửa</a>
                <a onclick="return xoasanpham()" href="deleteproduct.php?id=<?= $row["masanpham"] ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <style>
        #producList {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #producList td,
        #producList th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #producList tr:nth-child {
            background-color: #f2f2f2;
        }

        #producList tr:hower {
            background-color: #ddd;
        }

        #producList th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        button {
            background-color: #2F54EB;
            padding: 8px 16px;
        }

        button a {
            color: white;
        }

        a {
            text-decoration: none;
        }
    </style>

    <script>
        function xoasanpham() {
            var conf = confirm(`Bạn có chắc chắn muốn xóa sản phẩm này không ?`);
            return conf;
        }
    </script>
</body>

</html>