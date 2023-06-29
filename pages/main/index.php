<?php
	$sql_product = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY sanpham.id_sanpham DESC LIMIT 8";
	$query_product = mysqli_query($mysqli,$sql_product);
?>            
            
            
<div  style="width: 95%;"class="product">
<h3 style="color: lightyellow; margin-left:10px;">Sản phẩm mới nhất</h3>
        <?php
			while($row = mysqli_fetch_array($query_product)){ 
              //bien giamgia
                 $giagiam = $row['giasp']*10/100;
                //  $giagiam = $row['giasp']*(100+10)/100;
		?>
        <div class="item">
                    <div class="img">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>" >
                            <img src="admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
                        </a>
                    </div>
                    <div class="info">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="title"> <?php echo $row['tensp'] ?></a><br>
                        <span class="price">
                                <strong style="color:red;"><?php echo number_format($row['giasp'],0,',','.').'₫' ?></strong>
                                <?php
                                // giam gia
                                     if($row['giasp']>15000000){
                                ?>
                                        <strike><?php echo number_format($giagiam,0,',','.').'₫' ?></strike>
                                <?php
                                  }
                             ?>               
                        </span>
                        <!--  -->
                       <?php
                       if($row['giasp']>15000000){
                      ?>
                      
                            <p>giảm giá tết 10%</p>
                        <?php
                       }
                       ?>
                         
                        <!--  -->
                    </div>
                </div>
                <?php
					} 
					?>
 
  </div>
                    <!--  -->