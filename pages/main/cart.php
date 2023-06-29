<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style>
  .details input[type=text]{
    width:300px;
    margin-top: 10px;
    border: 0.5px black solid;
  }
  .details p{
    
    margin:0;
  }
</style>
</head>
<!--  -->
<form method="get" action="pages/main/xulydathang.php">
<div style="box-shadow: 0px 1px 50px 0px; background: #f2f2f2;margin:50px 0 0 5%;"class="table">
<table border="1" style="width:100%;text-align: center;" >
  <tr>
    <th style="width:50px;">STT</th>
    <th>Tên sản phẩm</th>
    <th style="width:150px;">Hình ảnh</th>
    <th>Số lượng</th>
    <th style="width:170px;">Giá sản phẩm</th>
    <th>Giảm giá</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	$soluong = 0;
  	foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['giasp']>15000000){
        $giamgia = $cart_item['giasp']*10/100;
        }
        else{
            $giamgia='0';
        }
  		$thanhtien = ($cart_item['soluong']*$cart_item['giasp'])-($giamgia*$cart_item['soluong']);
  		$tongtien+=$thanhtien;
      $sumsl = $cart_item['soluong'];
      $soluong+=$sumsl;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['tensp']; ?></td>
    <td><img src="admin/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="100px"></td>
    <td>
      <!-- them giam so luong -->
    	<a style="color:#aeb2b7;margin-right:5px;" href="pages/main/xulyaddcart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a style="color:#aeb2b7;margin-left:5px;" href="pages/main/xulyaddcart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
    <td><?php echo number_format($giamgia,0,',','.').'₫'; ?>/1 sản phẩm</td>
    <td style="color:red;"><strong><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></strong></td>
    <td><a href="pages/main/xulyaddcart.php?xoa=<?php echo $cart_item['id'] ?>">X</a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td style="text-align:left;" colspan="8">
      <!--  -->
      <div class="formmain">
         <!-- image -->
    
        <!-- form -->
        <div style="margin-left:50px;" class="details">
              <!--  -->
    	<p style="float:right;" ><a href="pages/main/xulyaddcart.php?xoatatca=1">Xoá tất cả</a></p>
      <div style="clear: both;"></div>

                <input type="hidden" name="soluong" value="<?php echo $soluong ?>">
                <input type="hidden" name="tongtien" value="<?php echo $tongtien ?>">
                <p>1.Thông tin người mua:</p>
                <input type="radio" name="gender" value="Nam" required>Anh
                <input type="radio" name="gender" value="Nữ" required>Chị <br>
                <input type="text" name="hoten" placeholder="Họ và tên của bạn (bắt buộc)" required> <br>
                <input type="text" name="sdt" placeholder="Số điện thoại của bạn (bắt buộc)" required> <br>
                <input type="text" name="email" placeholder="Email (bắt buộc)">
                <p>2.Địa chỉ nhận hàng:</p>
                <input type="text" name="diachi" placeholder="Vui lòng nhập địa chỉ!" required>
                <div class="thanhtoan">
                  <p>Tống số lượng:<strong><?php echo $soluong?></strong> </p>
                  <p style="float: left;">Tổng tiền: <strong><?php echo number_format($tongtien,0,',','.').'vnđ' ?></strong></p><br/>
                </div> 
                <a ><button style="width: 250px; height: 50px; font-size: 0.9em; color: aliceblue; padding: 11px 0 10px 0 ;margin: 10px 0 20px 0 ; background: #6cb715; background: linear-gradient(to bottom,#6cb715 0%,#4c8e00 100%); border-radius: 6px ;  cursor: pointer;  border: none;" type="submit" name=""><strong>Đăng kí đặt hàng</strong>

</button></a>

        </form>
    </div>
</div>  
    </td>

   
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
  </table>
  </div>