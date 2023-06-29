<?php
  	$sql_lietke_hoadon = "SELECT * FROM hoadon,sanpham WHERE hoadon.id_sanpham= sanpham.id_sanpham ORDER BY id_hoadon DESC";
    $result_lietke_hoadon = mysqli_query($mysqli,$sql_lietke_hoadon);
?>
<h3>Liệt kê hóa đơn</h3>
<table border="1" style="text-align:center;width:100%;">
  <tr>
  <td>STT</td>
  <td>Id hóa đơn</td>
    <td>Id sản phẩm</td>
    <td>tên sản phẩm</td>
    <td>Mã hóa đơn</td>
    <td>Tên khách hàng</td>
    <td>Giới tính</td>
    <td>Email</td>
    <td>SDT</td>
    <td>Địa chỉ</td>
    <td>Số lượng mua</td>
    <td>Tổng tiền</td>
    <td>Ngày đặt hàng</td>
    <td>Chức năng</td>
 
</tr>
<?php
$i='';
while($row = mysqli_fetch_array( $result_lietke_hoadon)){
    $i++;
?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $row ['id_hoadon'] ?></td>
    <td><?php echo $row ['id_sanpham'] ?></td>
    <td><?php echo $row ['tensp'] ?></td>
    <td><?php echo $row ['mahd'] ?></td>
    <td><?php echo $row ['tenkh'] ?></td>
    <td><?php echo $row ['gioitinh'] ?></td>
    <td><?php echo $row ['email'] ?></td>
    <td><?php echo $row ['sdt'] ?></td>
    <td><?php echo $row ['diachi'] ?></td>
    <td><?php echo $row ['soluongmua'] ?></td>
    <td><?php echo number_format($row['tongtien'],0,',','.').'₫' ?></td>
    <td><?php echo $row ['ngaydathang'] ?></td>
    <td><a href="modules/hoadon/xuly.php?id_hoadon=<?php echo $row['id_hoadon']?>">Xóa</a></td>
  </tr>
    <?php
    }
    ?>
</table>