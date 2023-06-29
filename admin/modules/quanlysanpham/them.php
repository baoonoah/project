<h3>Thêm sản phẩm</h3>
<table border="0" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
   <tr>
    <td>Mã sp</td>
    <td><input type="text" name="masp"></td>
  </tr>
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" name="tensp"></td>
	  </tr>
    <tr>
      <td>Số lượng tồn</td>
      <td><input type="text" name="soluongton"></td>
    </tr>
	  <tr>
	  	<td>Giá sp</td>
	  	<td><input type="text" name="giasp"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>
	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea name="noidung"></textarea></td>
	  </tr>
	  <tr>
	    <td>Danh mục sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
	  </tr>
 </form>
</table>