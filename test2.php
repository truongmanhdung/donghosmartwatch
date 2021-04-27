<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <form method="post" action="" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputname1" class="form-label">Name</label>
        <input type="fullname" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPrice1" class="form-label">price</label>
        <input type="number" name="price" class="form-control" id="exampleInputPrice1">
      </div>
      <div class="mb-3">
        <label for="exampleInputQuantity1" class="form-label">Số lượng</label>
        <input type="number" name="quantity" class="form-control" id="exampleInputQuantity1" aria-describedby="QuantityHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputimgage1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputimgage1">
      </div>
      <div class="mb-3">
        <label for="exampleInputdescription1" class="form-label">description</label>
        <input type="text" name="text" class="form-control" id="exampleInputdescription1" aria-describedby="descriptionHelp">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo '
                <script>
                    alert("bạn phải nhập name");
                </script>';
            }else if(empty($_POST['price'])){
                echo '
                <script>
                    alert("bạn phải nhập price");
                </script>';
            }else if(empty($_POST['quantity'])){
                echo '
                <script>
                    alert("bạn phải nhập quantity");
                </script>';
            }else if(empty($_FILES['image']['name'])){
                echo '
                <script>
                    alert("bạn phải nhập image");
                </script>';
            }else if(empty($_POST['text'])){
                echo '
                <script>
                    alert("bạn phải nhập description");
                </script>';
            }else{
              include "conn.php";
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $image = $_FILES['image']['name'];
                $description = $_POST['text'];
                var_dump($image);
               
                $query = "INSERT INTO `products`(`product_id`, `product_name`, `price`, `quantity`, `image`, `description`, `cate_id`) VALUES (null,'$name',$price,$quantity,'$image','$description',null)";
                $result = $conn->query($query);
                var_dump($result);
                if($result){
                    echo '
                    <script>
                        alert("Đã thêm thành công");
                    </script>';
                }
            }
        }
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
