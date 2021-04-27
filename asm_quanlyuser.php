<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản lý user</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
        <h1 class="text-center">Quản lý user</h1>
        
        <form action="" method="POST">
        
            <div class="form-group">
                <label for="">User Name</label>
                <input type="name" class="form-control" name="txtUser" id="" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password"  class="form-control" name="txtPass" id="" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="txtEmail" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label for="">Is Admin</label>
                <input type="text" class="form-control" id="" name="txtAdmin" placeholder="User Name" required>
            </div>
        
            <button type="submit" class="btn btn-primary" name="action" value="Thêm user">Thêm user</button>
        </form>
        <!-- php -->
        <?php
            if(isset($_POST['action'])){
                
                $user = $_POST["txtUser"];
                $pass = $_POST["txtPass"];
                $email = $_POST["txtEmail"];
                $isAdmin = $_POST["txtAdmin"];

                // kết nối với cơ sở dữ liệu
                $conn = new mysqli('localhost','root','','asm');
                if($conn->connect_error){
                    die('có lỗi kết nối'.$conn->connect_error);
                }else{
                    $sql = "INSERT INTO user VALUES ('".$today."','".$_POST["name"]."','".$_POST["email"]."',".$_POST["pass"].")";
                    $conn->query($sql);
                }
                $conn->close();
            
            }
           
            
        ?></div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
