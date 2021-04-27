<!DOCTYPE html>
<html lang="">
<?php 
session_start();
?>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="http://gstorevn.com/wp-content/uploads/2021/02/Untitled-12.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title class="tt_hd">Sản phẩm</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- gg font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <!-- link swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" />
  <!-- link css -->
  <link rel="stylesheet" href="./css/base.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/singleblog.css">
  <link rel="stylesheet" href="./css/how-it-works.css">
  <link rel="stylesheet" href="css/sanpham.css?v= <?php echo time(); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container-fluid">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light menu">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img style="width: 60px;" src="./img/logosm-removebg-preview.png" alt="" class="logo1" />
        </a>
        <button class="navbar-toggler color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white !important"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-link_tt" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link_tinhnang" href="donghothongminh.php">Đồng hồ thông minh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link_manhinh" href="Donghonam.php">Đồng hồ nam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link_vct" href="donghorolex.php">Đồng hồ rolex</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="nav-link_tintuc" href="donghocasio.php">Đồng hồ casio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link_thongke" href="donghohublot.php">Đồng hồ hublot</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
      </div>
      <div class="sanpham">
        <div class="sanpham-container">
          <!-- end sanpham-header-->

          <?php
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include "conn.php";
            $result = $conn->query("SELECT * FROM sanpham WHERE id = $id");
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $tensp = $row['tensp'];
                $loaidongho = $row['loaidongho'];
                $price = number_format($row['gia']);
                $img = $row['anh'];
              }
            }
          }
          ?>
          <?php
          echo '
             <div class="sp-body-heading">
              <h5>' . $tensp . '</h5>
            </div>
            <div class="sanpham-body container">
             <div class="sp-body-content row">
             <div class="sp-body-content-img col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <a
                 class="link-fancybox"
                 href="' . $img . '"
                 data-fancybox="gallery"
                 ><img
                   src="' . $img . '"
                   alt=""
                   class = "img_sp"
                   data-caption="Caption #1" class="img1"
               /></a>
               <div class="sp-body-content-img-test">
                 <a data-fancybox="gallery" href="./img/donghorolex/1.webp"
                   ><img
                     src="./img/donghorolex/1.webp"
                     alt=""
                     data-caption="Caption #2"
                 /></a>
                 <a data-fancybox="gallery" href="./img/donghorolex/3.webp"
                   ><img
                     src="./img/donghorolex/3.webp"
                     alt=""
                     data-caption="Caption #3"
                 /></a>
                 <a data-fancybox="gallery" href="./img/donghorolex/4.webp"
                   ><img
                     src="./img/donghorolex/4.webp"
                     alt=""
                     data-caption="Caption #4"
                 /></a>
               </div>
             </div>
             <div class="sp-body-content-right col-xs-12 col-sm-12 col-md-8 col-lg-8">
               <div class="sp_content">
                 <h5>' . $tensp . '</h5>
               <div class="sp-body-content-right-price d-flex">
                 <div class="sp-price-old">
                   <p>Giá niêm yết</p>
                   <span class="gia">' . $price . '</span> <sup>đ</sup>
                 </div>
                 <div class="sp-price-img">
                   <p>SALE</p>
                   <span class="sale">0 </span><span>%</span>
                 </div>
                 <div class="sp-price-new">
                   <p>Giá khuyến mãi</p>
                   <span class="sp-price-new1">' . $price . '</span> <sup>đ</sup>
                 </div>
               </div>
               <div class="sp-content-chitiet">
                 <div class="sp-content-chitiet-item">
                   <p>Đường kính mắt</p>
                   <p>28mm</p>
                 </div>
                 <div class="sp-content-chitiet-item">
                   <p>Độ chịu nước</p>
                   <p>3ATM</p>
                 </div>
                 <div class="sp-content-chitiet-item">
                   <p>Chất liệu mặt</p>
                   <p>Sapphire</p>
                 </div>
                 <div class="sp-content-chitiet-item">
                   <p>Năng lượng sử dụng</p>
                   <p>Điện tử</p>
                 </div>
               </div>
               <div class="sp-content-lh">
                 <p>Gọi đặt mua: <a href="tel:0365727226">0365727226</a> (8:30 - 23h:00)</p>
               </div>
               <form action="giohang.php?action=add" method="post">
                  <div class="form-groud d-flex">
                    <span style="display: block; width: 100px;" class="label label-success">Số lượng</span>
                    <input style="width: 100px;" value="1" class="form-control" type="number" name="quantity['.$id.']" size="2" id="">
                  </div>
                  <div class="d-flex">
                    <button style="width: 200px; margin-right: 20px;" type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                    <a style="width: 100px;" class="form-control" href = "javascript:history.go(-1)">Trở về</a>
                  </div>
               </form> 
               </div>
             </div>
             <!-- end sp-body-content-right -->
           </div>
           </div>
           <div class="sanpham-product row container">
           <div class="sp-product-left col-xs-12 col-sm-12 col-md-12 col-lg-7">
             <h5>Có thể bạn sẽ thích</h5>
             <div class="item-sp row">
               <div class="sp-product-left-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
                 <img
                   src="./img/donghorolex/1.webp"
                   alt=""
                 />
                 <h5>Đồng hồ Atlantic Swiss AT-29036.45.21L - Nữ</h5>
                 <p>8.390.000 đ</p>
               </div>
               <div class="sp-product-left-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
                 <img
                   src="./img/donghorolex/7.webp"
                   alt=""
                 />
                 <h5>Đồng hồ Atlantic Swiss AT-29036.45.21L - Nữ</h5>
                 <p>8.390.000 đ</p>
               </div>
               <div class="sp-product-left-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
                 <img
                   src="./img/donghorolex/8.webp"
                   alt=""
                 />
                 <h5>Đồng hồ Atlantic Swiss AT-29036.45.21L - Nữ</h5>
                 <p>8.390.000 đ</p>
               </div>
             </div>
           </div>
           <div class="sp-product-right col-xs-12 col-sm-12 col-md-12 col-lg-5">
             <h5>Thông số kĩ thuật</h5>
             <p><span>Đường kính mặt</span><span>33mm</span></p>
             <p><span>Chống nước</span><span>3ATM</span></p>
             <p><span>Chất liệu mặt</span><span>Sapphire</span></p>
             <p><span>Năng lượng sử dụng</span><span>Điện tử</span></p>
             <p><span>Size dây</span><span>X, XL</span></p>
             <p><span>Chất liệu dây</span><span>Dây da</span></p>
             <p><span>Chất liệu vỏ</span><span>Thép không gỉ mạ PVD</span></p>
             <p><span>Kiểu dáng</span><span>Nữ</span></p>
             <p><span>Xuất xứ</span><span>Thụy Sỹ</span></p>
             <p>
               <span>Chế độ bảo hành</span><span>Bảo hành quốc tế 02 năm</span>
             </p>
           </div>
         </div>
           ';

          ?>
          <!-- end sp-body-content -->

          <!-- end sanpham-body -->

        </div>
        <!-- end sp-container -->
      </div>
      <!-- back-to-top -->
      <!-- end content_work -->
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
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
  <script src="./js/query.js"></script>
  <script src="./js/get_text.js"></script>
  <script src="./js/blog.js"></script>
  <script src="./js/hoatdong.js"></script>

</body>

</html>