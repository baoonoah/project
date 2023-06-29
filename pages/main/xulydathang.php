<?php
  	session_start();
      include('../../admin/database/config.php');
      $create_datetime = date("Y-m-d H:i:s");
	$mahd = rand(0,9999);
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$tenkh = $_GET['hoten'];
			$gioitinh = $_GET['gender'];
			$sdt = $_GET['sdt'];
			$email = $_GET['email'];
			$diachi = $_GET['diachi'];
			$soluong = $_GET['soluong'];
			$tongtien = $_GET['tongtien'];
			$insert_order_details = "INSERT INTO hoadon(id_sanpham,mahd,tenkh,gioitinh,email,sdt,diachi,soluongmua,tongtien,ngaydathang) VALUE('".$id_sanpham."','".$mahd."','".$tenkh."','".$gioitinh."','".$email."','".$sdt."','".$diachi."','".$soluong."','".$tongtien."','".$create_datetime."')";
			mysqli_query($mysqli,$insert_order_details);
		}
            unset($_SESSION['cart']);
            header('Location:../../index.php');

?>	