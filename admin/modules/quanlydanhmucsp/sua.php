<?php
	$sql_sua = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[id_danhmuc]' LIMIT 1";
	$result_sua = mysqli_query($mysqli,$sql_sua);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="100%">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $_GET['id_danhmuc'] ?>">
 	<?php
 	while($row = mysqli_fetch_array($result_sua )) {
 	?>
	  <tr>
	  	<td>Tên danh mục</td>
	  	<td><input  style="width:300px;" type="text" value="<?php echo $row['tendanhmuc'] ?>" name="tendanhmuc"></td>
	  </tr>
	  <tr>
	    <td>Thứ tự</td>
	    <td><input  style="width:300px;" type="text" value="<?php echo $row['thutu'] ?>" name="thutu"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input  style="width:100px;" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
	  </tr>
	  <?php
	  } 
	  ?>
 </form>