
<?php
include("../../database/config.php");
	$id=$_GET['id_hoadon'];
	$sql = "SELECT * FROM hoadon WHERE id_hoadon = '$id' LIMIT 1";
	$result = mysqli_query($mysqli,$sql);
	$sql_xoa = "DELETE FROM hoadon WHERE id_hoadon='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../include.php?action=hoadon&chucnang=them');
?>