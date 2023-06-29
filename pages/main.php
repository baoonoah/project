 <!-- main -->
 <?php
    if(isset($_GET['quanly'])){
        $temp = $_GET['quanly'];
    }
    else {
        $temp='';
    }
 ?>
 <div class="main">
    
        <!--  sidebar-->
        <?php include("sidebar/sidebar.php") ?>
             <!-- child -->
            <div class="child">
            <?php
           
                if($temp == 'giohang')
                {
                    include("main/cart.php");
                }
                else if($temp == 'tintuc')
                {
                    include("main/news.php");
                }
                else if($temp == 'danhmucsanpham')
                {
                    include("main/danhmuc.php");
                }
                else if($temp == 'sanpham')
                {
                    include("main/ctsanpham.php");
                }
                else if($temp == 'timkiem')
                {
                    include("main/search.php");
                }
                else if($temp == 'camon')
                {
                    include("main/camon.php");
                }
                // else if($temp == 'dangkydathang')
                // {
                //     include("main/dangkydathang.php");
                // }
                // else if($temp == 'dangnhap')
                // {
                //     include("main/login.php");
                // }
                else {
                    include("main/index.php");
                }        
        ?>  
            </div>
                    <!--  -->
    
        </div>