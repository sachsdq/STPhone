Tắt comment extension=intl trong fine php.ini để chạy hàm numfmt_create('vi_VN', NumberFormatter::CURRENCY)

Ghi chú khi làm:
Ý tưởng là:
- Lưu các thông tin của sản phẩm vào session của người dùng, sau đó truy xuất vào đó để lấy các thông tin của sản phẩm như tên, giá, hình ảnh, vv... Cũng như là đếm số lượng sản phẩm để cập nhật lên biểu tượng giỏ hàng ở góc trên bên phải.