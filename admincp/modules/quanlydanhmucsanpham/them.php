<p>Thêm danh mục sản phẩm</p>
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

<h2>Quản lý danh mục sản phẩm</h2>

<table>
    <form action="modules/quanlydanhmucsanpham/xuly.php" method="POST">
            <tr>
            <th>Điền danh mục sản phẩm</th>
            <td><input type="type" name="tendanhmuc"></td>

        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="type" name="thutu"></td>

        </tr>
        <tr>
            <td><input name="themdanhmuc" type="submit" value="Thêm danh mục sản phẩm"></td>
        </tr>
    </form>

</table>