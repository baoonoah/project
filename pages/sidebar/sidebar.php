<?php
    $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc ASC";
    $result_danhmuc= mysqli_query($mysqli,$sql_danhmuc); 
?>
<div class="sidebar">
            <ul class="list_sidebar">
            <?php 
                  while($row_danhmuc = mysqli_fetch_array($result_danhmuc)){
                  ?>
                      <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                  <?php
                  }
                  ?>
                 </ul>
            </div>
           