<?php
include('../../database/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../include.php?action=quanlydanhmucsanpham&chucnang=them');
}else if(isset($_POST['suadanhmuc'])){
    //sua
	$sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[id_danhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../include.php?action=quanlydanhmucsanpham&chucnang=them');

}else  {
    $id = $_GET['id_danhmuc'];
    $sql_xoa = "DELETE FROM danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../include.php?action=quanlydanhmucsanpham&chucnang=them');
}
?>