<html>
  <head></head>
<body>
<div class="menu_nav">
        <nav style="padding: 0;" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a style="color: aliceblue;" class="navbar-brand" href="index.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a style="color: aliceblue;" class="nav-link active" aria-current="page" href="index.php?quanly=tintuc">Tin tức</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a style="color: aliceblue;" class="nav-link active" href="index.php?quanly=doanhmucsanpham&id=1">Doanh mục sản phẩm</a>
                  </li> -->
                  <li class="nav-item">
                    <a style="color: aliceblue;" class="nav-link active" href="index.php?quanly=giohang">Giỏ hàng</a>
                  </li>
                  
                </ul>
                <form class="d-flex" action="index.php?quanly=timkiem" method="GET" role="search">
                  <input id="search" class="form-control me-2" type="search" name="tukhoa" placeholder="Search" aria-label="Search">
                  <button style="color: white;border:white solid 1px;"class="btn btn-outline-success"name="search"  type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>     
        </div>   
        <script>
          function searchsp(){
            let valueSearch = document.getElementById("search").value
          }
        </script>
        
      </body>
      </html>