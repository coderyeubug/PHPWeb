<p>Thêm sản phẩm</p>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Thêm sản phẩm</h2>

<table>
    <form action="modules/quanlydanhmucsanpham/xuly.php" method="POST">
            <tr>
              <th>Tên sản phẩm</th>
              <td><input type="type" name="tensanpham"></td>
            </tr>
            <tr>
              <th>Mã sản phẩm</th>
              <td><input type="type" name="masp"></td>
            </tr>
            <tr>
              <th>Hình ảnh</th>
              <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
              <th>Giá</th>
              <td><input type="file" name="giasp"></td>
            </tr>
            <tr>
              <th>Số lượng</th>
              <td><input type="file" name="soluong"></td>
            </tr>
            <tr>
              <th>Nội dung</th>
              <td><textarea name="noidung" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
              <th>Tóm tắt</th>
              <td><textarea name="noidung" id="" cols="30" rows="10"></textarea></td>
            </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
              <select name="tinhtrang" id="">
                <option value="">Kích hoạt</option>
                <option value="">Ẩn</option>
              </select>
            </td>

        </tr>
        <tr>
            <td><input name="themdanhmuc" type="submit" value="Thêm danh mục sản phẩm"></td>
        </tr>
    </form>

</table>