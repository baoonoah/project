<?php
	if(isset($_GET['search'])){
		$tukhoa = $_GET['tukhoa'];
	}
	$sql_timkiem = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.tensp LIKE '%".$tukhoa."%'";
	$query_timkiem = mysqli_query($mysqli,$sql_timkiem);
	
?>
				<div  style="width: 95%;"class="product">
                <h3>Từ khoá tìm kiếm : <?php echo $_GET['tukhoa']; ?></h3>
        <?php
			while($row = mysqli_fetch_array($query_timkiem)){ 
              //bien giamgia
                $giagiam = $row['giasp']*10/100;
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
                                        <strike><?php echo number_format($row['giasp']-$giagiam,0,',','.').'₫' ?></strike>
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