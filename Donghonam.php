<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      href="http://gstorevn.com/wp-content/uploads/2021/02/Untitled-12.png"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Đồng Hồ Nam</title>
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- gg font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <!-- link swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css"
    />
    <!-- link css -->
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/how-it-works.css">
    <link rel="stylesheet" href="./css/dongho.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
        <header id="trangchu">
            <!-- navbar -->
            <div id="header"></div>
            <div class="product_header" style="margin: 40px auto;">
              <h3 style="color: white;">Đồng hồ nam</h3>
              <h6>Đẳng cấp phái mạnh, sang trọng và lịch lãm</h6>
            </div>
              
            <!-- end navbar -->
            <!-- end header-content -->
        </header>
          <!-- end header-content -->
        
        <!-- end header-content -->
      <!-- end header-content -->
      <!-- end header -->
      <main>
        <div class="back-to-top">
          <i class="fas fa-angle-up"></i>
        </div>
        <!-- back-to-top -->
        <div class="container">
            <div class="row product">
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 product_left">
                <div class="category_sanpham">
                  <div class="category_item">
                    <h5>Thương hiệu</h5>
                    <div class="cate_p">
                      <p>
                        <div class="product_input_cate">
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="check1"
                              value="option1"
                              name="1"
                            />
                            <label class="form-check-label" for="check1">Orient</label>
                          </div>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9 product_right">
                <div class="product_right_header">
                  <p>Có tất cả (<?php 
                  include "conn.php";
                  $result = $conn->query("SELECT * FROM sanpham WHERE loaidongho like '%Đồng hồ nam%'");
                  if($result->num_rows >0){
                    $dem = 0;
                    while($row = $result->fetch_assoc()){
                      $dem++;
                    };
                    echo $dem;
                  }
                  ?>): <button type="button" class=" product_right_btn" style="color: black">Loại:  <a href="dongho.php" style="color:red;"><?php 
                  include "conn.php";
                  $result = $conn->query("SELECT * FROM sanpham WHERE loaidongho like '%Đồng hồ nam%'");
                  if($result->num_rows >0){
                    $row = $result->fetch_assoc();
                    echo $row['loaidongho'];
                  }
                  ?><i class="far fa-times-circle"></i></a></button><button type="button" style="margin-left: 10px;" class="">Xóa bộ lọc</button></p>
                </div>
                <div class="row">
                  <?php 
                    include "conn.php";
                    $result = $conn->query("SELECT * FROM sanpham WHERE loaidongho like '%Đồng hồ nam%'");
                    if($result->num_rows >0){
                      while($row = $result->fetch_assoc()){
                        echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product_item">
                        <div class="product_list">
                          <a href="sanpham.php?id='.$row['id'].'" class="product_link">
                          <div class="product_img">
                            <img src="'.$row['anh'].'" alt="">
                          </div>
                          <div class="product_name">
                            <h5>'.$row['tensp'].'</h5>
                          </div>
                          <div class="">
                            <p>Giá: <strong>'. number_format($row['gia']) .'₫</strong></p>
                          </div>
                        </a>
                        <div class="home-product-item__fovourite">
                        <i class="fas fa-check"></i>
                        <span>yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent">10</span
                          ><span id="phantram">%</span>
                          <span class="home-product-item__sale-off-label">Giảm</span>
                        </div>
                        </div>
                        
                      </div>';
                      }
                    }
                  ?>
                  
                </div>
              </div>
            </div>
            
        </div>
        
      </main>
      <!-- end main -->
      <footer>
        <h3>FOLLOW CHÚNG TÔI</h3>
        <h6>Hãy kết nối với chúng tôi</h6>
        <div class="social-icons">
          <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>                                                    
          <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>                                                    
          <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>                                                    
          <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>                                                    
          <a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a>                                                    
        </div>
        <p>© 2017 ThemeModern. All right reserved.</p>
      </footer>
      <!-- end footer -->
    </div>
    <!-- end container -->
    <!-- jQuery -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <!-- link swiper -->
    <script src="./js//header.js?v=<?php echo time(); ?>"></script>
    <script script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/validator.js"></script>
    <!-- link validate js-->
    <script src="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="./js/codinhmenu.js"></script>
    <script src="./js/query.js"></script>
    <script src="./js/sanpham2.js"></script>
    <script></script>
  </body>
</html>
