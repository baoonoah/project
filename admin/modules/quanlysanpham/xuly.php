<?php
include('../../database/config.php');

$tensp = $_POST['tensp'];
$masp = $_POST['masp'];
$soluongton = $_POST['soluongton'];
$giasp = $_POST['giasp'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$danhmuc = $_POST['danhmuc'];

if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO sanpham(masp,tensp,soluongton,giasp,hinhanh,noidung,id_danhmuc) VALUES ('".$masp."','".$tensp."','".$soluongton."','".$giasp."','".$hinhanh."','".$noidung."','".$danhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../include.php?action=quanlysanpham&chucnang=them');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE sanpham SET masp='".$masp."',tensp='".$tensp."',soluongton='".$soluongton."',giasp='".$giasp."',hinhanh='".$hinhanh."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[id_sanpham]'";
		//xoa hinh anh
		$sql = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
		$result = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($result)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
        $sql_update = "UPDATE sanpham SET masp='".$masp."',tensp='".$tensp."',soluongton='".$soluongton."',giasp='".$giasp."',noidung='".$noidung."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[id_sanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../include.php?action=quanlysanpham&chucnang=them');
}
//delete
else{
	$id=$_GET['id_sanpham'];
	$sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$result = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($result)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../include.php?action=quanlysanpham&chucnang=them');
}

?>