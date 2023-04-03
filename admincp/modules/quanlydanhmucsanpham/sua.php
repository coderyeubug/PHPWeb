<?php
    $sql_sua_danhmucsanpham = "select * from tbl_danhmuc where id_danhmuc='$_GET[iddanhmuc]' limit 1";
    $query_sua_danhmucsanpham = mysqli_query($mysqli, $sql_sua_danhmucsanpham)
?>

<p>Sửa danh mục sản phẩm</p>
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
    <form action="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" method="POST">
      <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucsanpham)) {
      ?>
            <tr>
            <th>Sửa danh mục sản phẩm</th>
            <td><input value="<?php echo $dong['tendanhmuc']?>" type="type" name="tendanhmuc"></td>

        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input value="<?php echo $dong['thutu']?>" type="type" name="thutu"></td>

        </tr>
        <tr>
            <td><input name="suadanhmuc" type="submit" value="Sửa danh mục sản phẩm"></td>
        </tr>
    </form>
          <?php
        }
          ?>
</table>