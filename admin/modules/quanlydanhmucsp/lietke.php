<?php
    $sql_lietke = "SELECT * FROM danhmuc ORDER BY thutu DESC";// ORDER BY thutu ASC,DESC
    $result = mysqli_query($mysqli,$sql_lietke); 
?>

<table border="1" style="width:100%;">
  <tr>
    <th>Id</th>
    <th>Tên danh mục</th>
    <th>Chức năng</th>
</tr>
<?php
$i='';
while($row = mysqli_fetch_array($result)){
    $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><a href="include.php?action=quanlydanhmucsanpham&chucnang=sua&id_danhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>|
    <a href="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a></td>
  </tr>
    <?php
    }
    ?>
</table>