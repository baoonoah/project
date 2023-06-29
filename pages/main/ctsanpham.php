<html>
<head>
<title></title>
<style>
.product-right{
    box-shadow: 0px 1px 50px 0px;  background: #f2f2f2; width: 900px; height: auto;  padding: 20px 50px 20px 50px; margin-left: 20%; margin-top:50px;  
}
.specs-special ul li{ font-weight:1; padding-bottom: 10px; width: 380px; border-bottom: 1px solid rgb(213, 205, 205)
}
.product-specs{
    display: flex;
}
.product-spect-img button{width: 350px; height: 55px; font-size: 0.9em; color: aliceblue; padding: 11px 0px 7px; margin: 10px 0 0 0; background: #6cb715; background: linear-gradient(to bottom,#6cb715 0%,#4c8e00 100%); border-radius: 6px ;  cursor: pointer;  border: none;
}
.product-spect-img img{margin-left: 50px;}

</style>
</head>
<body>
<?php
	$sql_chitiet = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
        // bien giamgia
        $giagiam=$row_chitiet['giasp']*10/100;
    ?>         
           
    <div class="product-right">
        <div class="product-specs">
        <div class="product-spect-img">
            <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh']?>"/>
                <!-- <a data-padding="0px" data-width="600px" class="ajax-modal product-specs-button" href="/Ajax/fullspecs/67"><span class="icon-config"></span> <strong>Cấu hình chi tiết</strong></a> -->
               
               <form action="pages/main/xulyaddcart.php?id_sanpham=<?php echo $row_chitiet['id_sanpham']?>"  method="POST">
               <h3> <?php echo $row_chitiet['tensp']?></h3>
               <!-- gia ban -->
               <strong style="font-size: 20px;margin-left: 10px;">Giá:</strong>
               <strong style="font-size: 20px;margin-left: 10px;color:red;"><?php echo number_format($row_chitiet['giasp']-$giagiam,0,',','.').'₫' ?></strong>
               <?php 
                if($row_chitiet['giasp']>15000000){
                   ?>   
                     <strike><?php echo number_format($row_chitiet['giasp'],0,',','.').'₫' ?></strike>
                        <?php
                          }
                         ?>          
                 <!-- hang ton -->
                    <ul>
                         <li>Sản phẩm còn lại: <?php echo $row_chitiet['soluongton']?></li>
                  </ul>

               <!-- button -->
               <button type="submit" name="themgiohang"><strong>THÊM VÀO GIỎ HÀNG</strong>
                    <br> <span>(Vui lòng kiểm tra sản phẩm ở giỏ hàng) </span>
                </button>
            </div>
        </form>

        <div class="specs-special">
        <h3>Thông số kỹ thuật </h3>
                <ul>
                    <li>
                        <strong>Công nghệ màn hình: </strong>
                        <!-- <span>IPS LCD</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Độ ph&#226;n giải:</strong>
                        <!-- <span>828 x 1792 Pixels</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>M&#224;n h&#236;nh rộng:</strong>
                        <!-- <span>6.1&quot;</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Độ ph&#226;n giải:</strong>
                        <!-- <span>2 camera 12 MP, 12 MP</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Hệ điều h&#224;nh:</strong>
                        <!-- <span>iOS 15</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Chip xử l&#253; (CPU):</strong>
                        <!-- <span>Apple A13 Bionic 6 nh&#226;n</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Bộ nhớ trong (ROM):</strong>
                        <!-- <span>128 GB</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>RAM:</strong>
                        <!-- <span>4 GB</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Mạng di động:</strong>
                        <!-- <span>Hỗ trợ 4G</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Số khe sim:</strong>
                        <!-- <span>1 Nano SIM &amp; 1 eSIM</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Dung lượng pin:</strong>
                        <!-- <span>3110 mAh</span> -->
                    </li>
                </ul>
                
        </div>
        
    </div>
    
    
    
</div>
</div>
</div>
<?php
    }
    ?>
</body>
</html>