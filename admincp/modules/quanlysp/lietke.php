<?php
    $sql_lietke_danhmucsanpham = "select * from tbl_danhmuc order by thutu desc";
    $query_lietke_danhmucsanpham = mysqli_query($mysqli, $sql_lietke_danhmucsanpham)
?>


<p>Liệt kê danh mục sản phẩm</p>
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
<table>
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <!-- Vòng lặp để khi thêm vào thì thêm danh sách -->
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsanpham)) {
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <!-- Error -->
        <td>
            <a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> |
             <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>