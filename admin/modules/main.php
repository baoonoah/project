
<div class="clear"></div>
<div class="main">
<?php
                 if(isset($_GET['action']) && isset($_GET['chucnang'])){
                    $temp = $_GET['action'];
                    $chucnang =  $_GET['chucnang'];
                }
                else{
					$temp = '';
					$chucnang = '';
				}
				//danhmucsp
                if($temp=='quanlydanhmucsanpham' && $chucnang=='them'){
					include("modules/quanlydanhmucsp/them.php");
					include("modules/quanlydanhmucsp/lietke.php");

				}elseif ($temp=='quanlydanhmucsanpham' && $chucnang=='sua') {
					include("modules/quanlydanhmucsp/sua.php");
					//sanpham
				}elseif ($temp=='quanlysanpham' && $chucnang=='them') {
					include("modules/quanlysanpham/them.php");
					include("modules/quanlysanpham/lietke.php");

				}elseif($temp=='quanlysanpham' && $chucnang=='sua'){
					include("modules/quanlysanpham/sua.php");
                }

				// hoadon
				elseif ($temp=='hoadon') {
					include("modules/hoadon/lietke.php");

				}
				else{
					include("modules/welcome.php");
				}
        ?>  
</div>