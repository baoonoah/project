<?php
  	$sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h3>Liệt kê danh mục sản phẩm</h3>
<table border="1" style="width:100%;">
  <tr>
  <td>Id sản phẩm</td>
    <td>Mã sản phẩm</td>
    <td>Tên sản phẩm</td>
    <td>Gía sản phẩm</td>
    <td>Số lượng tồn</td>
    <td>Tên danh mục</td>
    <td>Ảnh</td>
    <td>Chức năng</td>
 
</tr>
<?php
$i='';
while($row = mysqli_fetch_array( $result_lietke_sp)){
    $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tensp'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluongton'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><a href="include.php?action=quanlysanpham&chucnang=sua&id_sanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>|
    <a href="modules/quanlysanpham/xuly.php?id_sanpham=<?php echo $row['id_sanpham']?>">Xóa</a></td>
  </tr>
    <?php
    }
    ?>
</table>