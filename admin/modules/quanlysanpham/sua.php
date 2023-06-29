<?php
	$sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[id_sanpham]' LIMIT 1";
	$result_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<h3>Sửa sản phẩm</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($result_sua_sp)) {
?>
 <form method="POST" action="modules/quanlysanpham/xuly.php?id_sanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
	<tr>
	   <td>Mã sp</td>
	   <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
   </tr>
	<tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['tensp'] ?>" name="tensp"></td>
	  </tr>
	  <tr>
		  <td>Số lượng tồn</td>
		  <td><input type="text" value="<?php echo $row['soluongton'] ?>" name="soluongton"></td>
	  </tr>
	  <tr>
	  	<td>Giá sp</td>
	  	<td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>
		</tr>
	  	<td>Nội dung</td>
	  	<td><textarea name="noidung" ><?php echo  $row['noidung'] ?></textarea></td>
	  </tr>
	  <tr>
	    <td>Danh mục sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC"; //tang dan , giam dan = ASC
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>