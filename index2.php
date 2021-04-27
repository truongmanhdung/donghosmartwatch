<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Smart Watch</title>
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
  <link rel="stylesheet" href="./css/main.css?v= <?php echo time(); ?>" />
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
      <nav class="navbar navbar-expand-lg navbar-light menu" style="z-index: 1000000000000;">
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
              <li class="nav-item">
                <a class="nav-link nav-link_thongke" href="Blog.php">Blog</a>
              </li>
              <?php
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                include "conn.php";
                $result = $conn->query("SELECT * FROM member where id = $id");
                while ($row = $result->fetch_assoc()) {
                  $name = $row['name'];
                }
                echo '
          <li class="nav-item">
            <div class="nav_user">
              <i class="fas fa-user"></i>
              <div class="user_hover">
              <p>' . $name . '</p>
              <p><a href="doipass.php?id=' . $id . '">Đổi mật khẩu</a></p>
              <p><a href="index.php">Đăng xuất</a></p>
              </div>
            </div>
          </li>
          ';
              }
              ?>

          </div>
      </nav>
      <!-- end navbar -->

      <div class="overlay"></div>
      <video playsinline autoplay muted loop style="opacity: 1; z-index: 100;">
        <source src="https://content.rolex.com/dam/watches/hubs/all-watches/videos/hub-collection-watches-cover.mp4" type="video/mp4" />
      </video>

      <div class="header-content container">
        <div class="row header-content_list">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header-content-item">
            <h1 style="font-size: 24px; z-index: 10000000000000;" class="header-content_header">
              Đến với <span style="font-weight: bold;font-size: 30px">Smart Watch</span> bạn sẽ tìm thấy những mẫu đồng hồ sang trọng và lịch lãm
            </h1>
            <p class="header-content_text" style="z-index: 10000000000000;">
              Thay đổi thế giới nhờ công nghệ số chỉ có tại Smart Watch. <br>
              Chúc mừng bạn đã trở thành thành viên của Smart Watch.<br>
              Ngày hôm nay bạn sẽ nhận được ưu đãi 10% tổng hóa đơn mua hàng, hãy mua hàng ngay nào.
            </p>

          </div>
        </div>
      </div>
      <!-- end header-content -->
    </header>
    <!-- end header-content -->
    <div class="message">
      <div class="tele"></div>
      <div class="telephone"></div>
      <div class="icon-phone">
        <i class="fas fa-phone-alt"></i>
      </div>
      <div class="message-icon">
        <div class="icon-message">
          <i class="fas fa-share"></i>
        </div>
        <div class="message-icon-2">
          <i class="fas fa-pen"></i>
        </div>
      </div>
      <div class="message2">
        <div class="message2-top">
          <div class="message2-header">
            <h2 style="color: white">
              Chào Bạn
            </h2>
            <div style="align-items: center; margin-top: 10px">
              <i class="tat-tb far fa-ellipsis-v"></i>
              <div class="tat-thong-bao">
                <i class="far fa-bell-slash"></i>
                <span>Tắt thông báo</span>
              </div>
            </div>
            <div style="align-items: center; margin-top: 10px">
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="message2-content">
            <div class="message2-content-left">
              <p style="color: white">Chúc bạn 1 ngày tốt lành!</p>
              <p style="color: white">
                <img src="https://twemoji.maxcdn.com/v/12.1.5/72x72/1f44b.png" alt="" />
                Hãy cùng trò chuyện nhé!
              </p>
            </div>
            <div class="message2-content-right">
              <p style="color: white;">Smart Watch</p>
            </div>
          </div>
          <p class="message2-p" style="color: white;">Chúng tôi thường trả lời trong ít phút.</p>
        </div>
        <div class="message2-input">
          <input type="text" class="form-control" placeholder="Nhập nội dung ..." aria-label="Username" aria-describedby="basic-addon1" />
          <div class="message2-icon">
            <i class="far fa-smile-wink"></i><span>POWERED BY</span>
          </div>
        </div>
      </div>
      <!-- end message2 -->
    </div>
    <!-- end message -->
    <!-- end header -->
    <main>
      <section class="product container">
        <div class="row product-list">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="product-content product3">
              <h3 class="product-hd">Đồng hồ thịnh hành nhất hiện nay</h3>
              <p>
                Chiếc Đồng hồ Huawei Watch GT2 Pro 46mm dây da với thiết kế đẳng cấp, sang trọng và công nghệ 4.0
              </p>
              <a type="button" href="hoatdong.php" class="btn btn-product btn_hd btn-outline btn-ellipse e-primary">Tìm hiểu thêm</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="img_product product4 img_hd">
              <img src="./img/img dh/637381162983643737_gt2-pro-day-da-1.webp" title="Đồng hồ thịnh hành nhất" alt="" />
            </div>
          </div>
        </div>
        <div class="row product-list">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product5">
            <div class="img_product img_kt">
              <img src="./img/img dh/637394913767077286_Apple Watch Series 6 GPS 40mm den 1.webp" title="Đồng hồ nam đẳng cấp nhất" alt="" />
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product6">
            <div class="product-content ">
              <h3 class="product-kt">Đồng hồ công nghệ nhất từ trước đến nay</h3>
              <p>
                Chiếc đồng hồ Apple Watch Series 6 GPS 40mm viền nhôm dây cao su sở hữu tất cả các tính năng ưu việt của một chiếc đồng hồ thông minh
              </p>
              <a type="button" href="hoatdong.php" class="btn btn-product btn_kt btn_hd btn-outline btn-ellipse e-primary">Tìm hiểu thêm</a>
            </div>
          </div>
        </div>
      </section>
      <!-- end section product-->

      <h3 style="text-align: center" id="manhinh">Sản Phẩm bán chạy</h3>
      <div class="swiper-container product11">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
           include "conn.php";
          $result = $conn->query("SELECT * FROM sanpham");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="swiper-slide">
                  <img src="' . $row['anh'] . '" alt="" />
                  <div class="slide_content">
                    <div class="slide_content_name">
                      <h5 style="font-size: 16px; margin: 10px 0;">' . $row['tensp'] . '</h5>
                    </div>
                    <div class="slide_buttom">
                      <button type="button" class="btn slide_btn">40 mm</button>
                      <button type="button" class="btn slide_btn">44 mm</button>
                    </div>
                    <div class="slide_price">
                      <p style="text-align: center !important;"><span class="price_sp" style="text-align: center !important;margin: 10px auto;font-size:16px; color: red;">Giá: ' . number_format($row['gia']) . 'đ</span></p>
                    </div>
                    <button type="button" class="btn btn-primary btn-ellipse btn_sp"><a href="sanpham.php?id=' . $row['id'] . '">Mua ngay</a></button>
                  </div>
                </div>';
            }
          }

          ?>
          <form action="" method="post"></form>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
      </div>
      <!-- end swiper -->

      <section class="REVIEW" id="review">
        <h3 style="text-align: center">REVIEW</h3>
        <h6>Những lời review của mọi người</h6>
        <div id="carouselExampleControls" class="carousel slide product10" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/01-5-3.jpg" class="d-block img1" alt="..." />

              <p>
                Hoạt động cho bất kỳ đặc điểm kỹ thuật nào. Tôi là một nhà
                phát triển web và mua các chủ đề lorem khá thường xuyên. Như
                mọi khi, cái cuối cùng rất đẹp và dễ tùy chỉnh theo đặc điểm
                kỹ thuật của khách hàng của tôi.
              </p>
              <img class="img_icon" src="./img/—Pngtree—simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>Mạnh Dũng</h5>
              <h6>Người dùng ứng dụng</h6>
            </div>
            <div class="carousel-item">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/02-2-3.jpg" class="d-block img1" alt="..." />

              <p>
                Hoạt động cho bất kỳ đặc điểm kỹ thuật nào. Tôi là một nhà
                phát triển web và mua các chủ đề lorem khá thường xuyên. Như
                mọi khi, cái cuối cùng rất đẹp và dễ tùy chỉnh theo đặc điểm
                kỹ thuật của khách hàng của tôi.
              </p>
              <img class="img_icon" src="./img/—Pngtree—simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>Mạnh Dũng</h5>
              <h6>Người dùng ứng dụng</h6>
            </div>
            <div class="carousel-item">
              <i class="far fa-quote-left"></i>
              <i class="far fa-quote-right"></i>
              <img src="./img/review/03-2-3.jpg" class="d-block img1" alt="..." />

              <p>
                Hoạt động cho bất kỳ đặc điểm kỹ thuật nào. Tôi là một nhà
                phát triển web và mua các chủ đề lorem khá thường xuyên. Như
                mọi khi, cái cuối cùng rất đẹp và dễ tùy chỉnh theo đặc điểm
                kỹ thuật của khách hàng của tôi.
              </p>
              <img class="img_icon" src="./img/—Pngtree—simple dividing line cartoon hand_3910347.png" alt="" />
              <h5>Mạnh Dũng</h5>
              <h6>Người dùng ứng dụng</h6>
            </div>
          </div>
          <button class="carousel-control-prev carousel-control-prev1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control-next1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- end review -->
      <section class="section_video">
        <div class="wpb_wrapper product2">
          <div class="video wow slideInUp" data-wow-delay="0.2s" style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: slideInUp;
              ">
            <a href="https://www.youtube.com/watch?v=HO3n-3JIIlY&ab_channel=Ho%E1%BA%B5ngReV" class="play-btn video-popup"><img src="./img/review/play-btn.png" alt="" /></a>

            <h1 class="mtb-25 text-white text-uppercase">XEM VIDEO</h1>
            <p class="text-white text-bold">
              Xem video sản phẩm của chúng tôi để biết thêm chi tết
            </p>
          </div>
        </div>
      </section>
      <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
      </div>
      <!-- back-to-top -->
      <section id="tinhnang" class="tinhnang container">
        <h3 class="tinhnang_heading">Chính sách của chúng tôi</h3>
        <h6 class="tinhnang_text">Luôn đặt quyền lợi của khách hàng lên hàng đầu</h6>
        <div class="tinhnang_content">
          <div class="row tinhnang_content_list">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_item tinhnang_item_left product7">
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse">
                  <i class="far fa-heart"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>VẬN CHUYỂN NHANH</h4>
                  <p>
                    Lưu trữ và sử dụng nguồn dữ liệu khổng lồ vì lợi ích chung
                  </p>
                </div>
              </div>
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse">
                  <i class="far fa-heart"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>HOÀN TRẢ HÀNG</h4>
                  <p>
                    Nếu bạn gặp vấn đề về chất lượng hoặc không hài lòng về dịch vụ của chúng tôi, chúng tôi sẵn sàng hoàn lại tiền trong 15 ngày
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_icon_img product8">
              <img src="img/img dh/637381162983643737_gt2-pro-day-da-1.webp" alt="" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 tinhnang_item tinhnang_item_right product9">
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse tinhnang_icon_right">
                  <i class="far fa-star"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>THANH TOÁN NHANH</h4>
                  <p>
                    Để làm cho sản phẩm của bạn hiển thị và dễ dàng tiếp cận
                    nhu cầu của khách hàng.
                  </p>
                </div>
              </div>
              <div class="item_content">
                <div class="tinhnang_icon btn-ellipse tinhnang_icon_right">
                  <i class="far fa-star"></i>
                </div>
                <div class="tinhnang_item_text">
                  <h4>GIÁ CẢ HỢP LÝ</h4>
                  <p>
                    Giá cả đồng hồ công nghệ ở Smart Watch luôn ở mức tầm trung, phù hợp với tất cả mọi người từ sinh viên đến nhân viên văn phòng.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section liên hệ -->
      <section class="container" id="tintuc">
        <h3 style="text-align: center">TẦM NHÌN VÀ NHIỆM VỤ</h3>
        <h6>
          Chúng tôi luôn không ngừng cố gắng để mang đến những gì tốt đẹp nhất dành cho khách hàng.
        </h6>
        <div class="product2">
          <div class="row product2_list">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product12">
              <div class="product2_item">
                <p class="product2_item_list product2_item_list1">
                  <span>NHIỆM VỤ CỦA CHÚNG TÔI</span><span>+</span>
                </p>
                <div class="product2_content">
                  <p>
                    ➤ Kết nối nhu cầu và khả năng cung ứng hàng hóa, dịch vụ
                    với tích hợp nền tảng công nghệ 4.0. ➤ Xác định lại giá
                    trị treu của nguyên tắc nền kinh tế chia sẻ. ➤ Tạo nền
                    tảng kết nối các giá trị đích thực với ưu tiên giá trị
                    cộng đồng.
                  </p>
                </div>
              </div>
              <div class="product2_item">
                <p class="product2_item_list product2_item_list2">
                  <span>TẦM NHÌN CỦA CHÚNG TÔI</span><span>+</span>
                </p>
                <div class="product2_content">
                  <p>
                    ➤ Nằm trong top 10 công ty công nghệ hàng đầu tại thị
                    trường Châu Á với giá trị cốt lõi là chia sẻ hàng hóa và
                    dịch vụ.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 product13">
              <div class="">
                <img src="./img/img dh/637394913767077286_Apple Watch Series 6 GPS 40mm den 1.webp" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- end product2 -->
      </section>
      <section class="section_video2" id="download">
        <div class="wpb_wrapper">
          <div class="video wow slideInUp" data-wow-delay="0.2s" style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: slideInUp;
              ">
            <div class="product14">
              <h3 class="mtb-25 text-white text-uppercase">
                Đăng Nhập hoặc Đăng Kí ngay tài khoản members của Smart Watch
              </h3>
              <h6>Bạn sẽ nhận được rất nhiều ưu đãi khi trở thành thành viên của Smart Watch</h6>
              <div class="btn_header">
                <button type="button" class="btn btn-outline btn-left">
                  <a href="dangki.php"><i class="fas fa-sign-in"></i></i>Đăng kí</a>
                </button>
                <button type="button" class="btn btn-outline btn-right">
                  <a href="dangnhap.php"><i class="fas fa-user-hard-hat"></i> Đăng Nhập</a>
                </button>
              </div>
              <h3 class="mtb-25 text-white text-uppercase" style="margin-top: 40px;">
                ĐĂNG KÝ TIN NHANH
              </h3>
            </div>

            <form action="" method="POST" role="form" class="product15">
              <div class="form-group form-group_test">
                <input type="email" class="input_1" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Địa chỉ email của bạn" />
                <span></span>
                <input type="submit" class="input_2" id="exampleInputEmail1" aria-describedby="emailHelp" required value="Gửi email" />
              </div>
            </form>
          </div>
        </div>
      </section>

      <section class="container blog" id="blog">
        <h3 style="text-align: center">BÀI ĐĂNG TRÊN BLOG</h3>
        <h6>
          Mua đồng hồ công nghệ tại Smart Watch luôn là lựa chọn đúng đắn.
        </h6>
        <div id="carouselExampleIndicators" class="carousel slide product16" data-bs-ride="carousel">
          <div class="carousel-indicators btn_blog">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row blog_list">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/02-6.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="http://aviglobal.unaux.com/managing-office-culture/">Bạn muốn tìm một chiếc đồng hồ sang trọng</a>
                    </h4>
                    <p>
                      Thời điểm không thể tốt hơn cho nền tảng giao dịch tập
                      trung vào quy định Qume, nơi công bố một loạt dịch vụ
                      được cải tiến vào thứ Hai. Ngay cả trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/01-8.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Đồng hồ nam lịch lãm </a>
                    </h4>
                    <p>
                      Thời điểm không thể tốt hơn cho nền tảng giao dịch tập
                      trung vào quy định Qume, nơi công bố một loạt dịch vụ
                      được cải tiến vào thứ Hai. Ngay cả trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/img dh/product/637369907197319165_Apple Watch SE GPS 40mm dai dien.jfif" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Đồng hồ công nghệ mới nhất</a>
                    </h4>
                    <p>
                      Thời điểm không thể tốt hơn cho nền tảng giao dịch tập
                      trung vào quy định Qume, nơi công bố một loạt dịch vụ
                      được cải tiến vào thứ Hai. Ngay cả trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row blog_list">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/03-6.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Luôn cập nhật su thế của thế giới, đón đầu công nghệ về đồng hồ thông minh</a>
                    </h4>
                    <p>
                      Thời điểm không thể tốt hơn cho nền tảng giao dịch tập
                      trung vào quy định Qume, nơi công bố một loạt dịch vụ
                      được cải tiến vào thứ Hai. Ngay cả trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/product/nam/8.png" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Đồng hồ nam sang trọng và lịch lãm</a>
                    </h4>
                    <p>
                      Thời điểm không thể tốt hơn cho nền tảng giao dịch tập
                      trung vào quy định Qume, nơi công bố một loạt dịch vụ
                      được cải tiến vào thứ Hai. Ngay cả trong ...
                    </p>
                    <div class="news-meta">
                      <div class="date">14/02/2017</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 blog_item">
                  <div class="blog_img">
                    <img src="./img/blog/mike-enerio-tmqsL3BmZ80-unsplash-710x458-1.jpg" alt="" />
                  </div>
                  <div class="blog_content">
                    <h4>
                      <a href="blog.php">Người sáng tạo của Yearn. Finance cho biết anh ấy đã
                        thoát khỏi DeFi, nhưng dự án có sức mạnh điểm chuẩn</a>
                    </h4>
                    <p>
                      Yearn. Finance đang quản lý quá trình chuyển đổi lãnh
                      đạo ngay bây giờ và dường như đang làm điều đó một cách
                      hiệu quả.
                    </p>
                    <div class="news-meta">
                      <div class="date">21/12/2020</div>
                      <div class="more_hove">
                        <div class="read-more read-more1">
                          <a href="blog.php">Đọc thêm > </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="wpb_wrapper ">
          <a class="ot-btn btn_hd btn btn-ellipse" href="blog.php" target="_self">Xem tất cả</a>
        </div>
      </section>
      <section class="contact container" id="contact">
        <h3 style="text-align: center">Cộng Tác</h3>
        <h6>Chúng tôi thích cộng tác với người dùng của mình</h6>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 product17">
            <div class="contact_item">
              <div class="contact_item_header">
                <i class="fas fa-address-card"></i>
              </div>
              <div class="contact_item_content">
                <h4>Address</h4>
                <h4>Smart Watch</h4>
                <p>2 Kallang Pudding Road, #02-11, Mactech Building, Singapore (349307)</p>
                <h4>Smart Watch Address</h4>
                <p>No. 60, Lane 132 Cau Dien, Minh Khai Ward, Bac Tu Liem District, Hanoi City, Vietnam
                </p>
                <p>info@gstore.social</p>
              </div>

            </div>
            <div class="contact_item">
              <div class="contact_item_header">
                <i class="fas fa-history"></i>
              </div>
              <div class="contact_item_content">
                <h4>Business hours</h4>
                <p>Mon-Fri : 9 to 18</p>
                <p>Sat: 9 to 13</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 product18">
            <form action="" method="POST" role="form">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control me-2" type="search" required placeholder="Nhập tên" aria-label="Search">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control me-2" type="email" placeholder="Nhập Email" aria-label="" required placeholder="Enter Email" aria-label="Search">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input class="form-control me-2" type="search" required placeholder="Nhập chủ đề" aria-label="Search">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input class="form-control me-2 message_to" type="search" required placeholder="Nhập tin nhắn" aria-label="Search">
                </div>
              </div>
              <button type="submit" class="btn btn-ellipse btn_send btn-primary">GỬI TIN NHẮN</button>
            </form>
          </div>
        </div>
      </section>
      <!-- end section_contact -->

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
  <script src="./js/header.js"></script>
  <script script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/validator.js"></script>
  <!-- link validate js-->
  <script src="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
  <script src="./js/cuontrang.js"></script>
  <script src="./js/query.js"></script>
  <script></script>
</body>

</html>