<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="http://gstorevn.com/wp-content/uploads/2021/02/Untitled-12.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title class="tt_hd">Giỏ hàng</title>
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
  <link rel="stylesheet" href="css/giohang.css?v = <?php echo time(); ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container-fluid">
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
      <?php
     include "conn.php";
      if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
      }
      if (isset($_GET['action'])) {

        function update_cart($add = false)
        {
          foreach ($_POST['quantity'] as $id => $quantity) {
            if ($quantity == 0) {
              unset($_SESSION['cart'][$id]);
            } else {
              if ($add == true) {
                $_SESSION['cart'][$id] += $quantity;
              } else {
                $_SESSION['cart'][$id] = $quantity;
              }
            }
          }
        }

        switch ($_GET['action']) {
          case "add":
            update_cart(true);
            header("Location: giohang.php");
            break;
          case "delete":
            if (isset($_GET['id'])) {
              unset($_SESSION['cart'][$_GET['id']]);
            }
            header("Location: giohang.php");
            break;
          case "submit":
            if (isset($_POST['update_click'])) {
              update_cart();

              header("Location: giohang.php");
            } else if (isset($_POST['submit_click'])) {
              if (empty($_POST['fullname'])) {
                echo '
                      <script>
                        alert("Bạn phải nhập họ tên");
                      </script>
                    ';
              } else if (empty($_POST['email'])) {
                echo '
                <script>
                  alert("Bạn phải nhập email");
                </script>
              ';
              } else if (empty($_POST['phone'])) {
                echo '
                <script>
                  alert("Bạn phải nhập số điện thoại");
                </script>
              ';
              } else if (empty($_POST['address'])) {
                echo '
                <script>
                  alert("Bạn phải nhập địa chỉ");
                </script>
              ';
              } else if (empty($_POST['quantity'])) {
                echo '
                      <script>
                        alert("Giỏ hàng rỗng");
                      </script>
                    ';
              } else {
                $pro = "SELECT * FROM sanpham Where id in (" . implode(",", array_keys($_SESSION['cart'])) . ")";
                $products = $conn->query($pro);
                $total = 0;
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $ghichu = $_POST['ghichu'];
                $order_product = array();
                while ($row = $products->fetch_assoc()) {
                  $order_product[] = $row;
                  $thanhtien = $row['gia'] * $_SESSION['cart'][$row['id']];
                  $total += $thanhtien;
                }
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $today = date("Y-m-d");
                $sql = "INSERT INTO `order` (`id`, `name`, `email`, `phone`, `diachi`, `ghichu`, `tonggia`, `thoigiannhap`, `thoigianxuat`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$ghichu', '$total', '$today', '$today');";
                $results = $conn->query($sql);
                
                $insert_string = "";
                $order_id = $conn->insert_id;
                $num = 0;
                foreach ($order_product as $key => $product) {
                  $insert_string .= "(NULL,$order_id, " . $product['id'] . ", " . $_POST['quantity'][$product['id']] . ", " . $product['gia'] . ",'$today','$today')";
                  if ($key != count($order_product) - 1) {
                    $insert_string .= ",";
                  }
                }
                $order_detail = "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `soluong`, `gia`, `thoigiannhap`, `thoigianxuat`) VALUES $insert_string";
                $con = $conn->query($order_detail);
                if ($con) {
                  echo '
                  <script>
                    alert("Đặt hàng thành công, tiếp tục mua hàng");
                  </script> 
                ';
                ?><script><?php echo("location.href = 'index.php';");?></script><?php
                unset($_SESSION['cart']);
                }
              }
            }
            break;
        }
      }
      if (!empty($_SESSION['cart'])) {
        $pro = "SELECT * FROM sanpham Where id in (" . implode(",", array_keys($_SESSION['cart'])) . ")";
        $products = $conn->query($pro);
      }
      ?>
      <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
      </div>
      <div class="giohang-content">
        <div class="giohang-content-heading" style="text-align:center;">
          <h5>
            TRANG CHỦ >
            <span style="color: blue; font-weight: bold">GIỎ HÀNG</span>
          </h5>
        </div>
        <div class="giohang-content-body row">
          <div class="container gio-hang-content-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="container-heading-form">
              <h5>CHI TIẾT GIỎ HÀNG</h5>
            </div>
            <form action="giohang.php?action=submit" method="post">
              <table class="gh_table">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th colspan="2" style="color: red;">Tên Sản Phẩm</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Loại đồng hồ</th>
                    <th style="color: red;">Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th style="color: red;">Thành Tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $num = 1;
                  $total = 0;
                  if (!empty($products)) {
                    while ($row = $products->fetch_assoc()) {
                      $thanhtien = $row['gia'] * $_SESSION['cart'][$row['id']];
                      echo ' <tr>
                            <td>' . $num . '</td>
                            <td colspan="2">' . $row['tensp'] . '</td>
                            <td><img src="' . $row['anh'] . '" alt=""></td>
                            <td>' . $row['loaidongho'] . '</td>
                            <td>' . number_format($row['gia']) . 'đ</td>
                            <td>
                              <input class="form-control" value="' . $_SESSION['cart'][$row['id']] . '" type="number" name="quantity[' . $row['id'] . ']" id="">
                            </td>
                            <td>' . number_format($thanhtien) . 'đ</td>
                            <td><a href="giohang.php?action=delete&id=' . $row['id'] . '">Xóa</a></td>
                            </tr>';
                      $num++;
                      $total += $thanhtien;
                    }
                    echo '<tr>
                          <td colspan="7" style="font-weight: bold;">Tổng tiền</td>
                          
                          <td style="color: red; font-weight: bold;" colspan="1">' . number_format($total) . 'đ</td>
                          <td></td>
                          </tr>';
                  } else {
                    echo '
                      <script>
                        alert("chưa có sản phẩm nào trong giỏ hàng");
                      </script>
                    ';
                  }

                  ?>
                </tbody>
              </table>
              <button type="submit" name="update_click" class="btn btn-outline-primary btn-primary">Cập nhật<table></table></button>
              <a href="dongho.php" class="btn btn-outline-primary btn-primary">Tiếp tục mua hàng</a>
              <div class="container gio-hang-content-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-form">
                  <div class="container-heading-form">
                    <h5>THÔNG TIN LIÊN HỆ</h5>
                  </div>
                  <div class="dangki-form">
                    <p class="dangki-form-p">
                      Lưu ý: Các ô có dấu <span style="color: red">(*)</span> cần
                      điền đầy đủ thông tin
                    </p>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Họ và Tên</label>
                    <input type="name" class="form-control" name="fullname" id="exampleInputName1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputPhone1" aria-describedby="phoneHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputAddress1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputAddress1" aria-describedby="addresslHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Ghi chú</label>
                    <textarea type="text" class="form-control" name="ghichu" id="exampleInputText1"></textarea>
                  </div>
                  <button type="submit" name="submit_click" class="btn btn-primary">Đặt hàng</button>

                </div>
            </form>
          </div>

          <!-- end gio-hang-content-left -->

          <!-- end gio-hang-content-right -->
        </div>
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
  <script src="./js//header.js"></script>
  <script script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/validator.js"></script>
  <!-- link validate js-->
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="./bootstrap-5.0.0-beta1-dist/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
  <script src="./js/query.js"></script>
  <script src="./js/blog.js"></script>
  <script src="./js/validator.js"></script>
  <script src="./js/hoatdong.js"></script>
  <script>
    $(document).ready(function() {
      $("input.input-qty").each(function() {
        var $this = $(this),
          qty = $this.parent().find(".is-form"),
          min = Number($this.attr("min")),
          max = Number($this.attr("max"));
        if (min == 0) {
          var d = 0;
        } else d = min;
        $(qty).on("click", function() {
          if ($(this).hasClass("minus")) {
            if (d > min) d += -1;
          } else if ($(this).hasClass("plus")) {
            var x = Number($this.val()) + 1;
            if (x <= max) d += 1;
          }
          $this.attr("value", d).val(d)
          var a = $('input.input-qty').val();
        });
      });
      var form = new Validator(".register-form");
      var form = new Validator(".register-form2");
      form.onSubmit = function GetData(formData) {
        var a = new Array(formData);
        console.log(a);
      };
    });
  </script>
</body>

</html>