<?php

    include('../../config/config.php');

    if(isset($_POST['themdanhmuc'])) {
        // Theem
        $tenloaisanpham = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $sql_them = "insert into tbl_danhmuc(tendanhmuc, thutu) values('".$tenloaisanpham."','".$thutu."')";
        
        // Them file o file config
        mysqli_query($mysqli, $sql_them);

        // Quay ve trang
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    } elseif(isset($_POST['suadanhmuc'])) {
        // Sua
        $tenloaisanpham = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $sql_update = "update tbl_danhmuc set tendanhmuc='".$tenloaisanpham."', thutu='".$thutu."' where id_danhmuc='$_GET[iddanhmuc]'";
        
        // Them file o file config
        mysqli_query($mysqli, $sql_update);

        // Quay ve trang
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    } else {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "delete from tbl_danhmuc where id_danhmuc='".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>