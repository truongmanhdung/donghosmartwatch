<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Đổi mật khẩu</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- main -->
    <div class="center-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Đổi mật khẩu</h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <form action="" method="post">
                    <div class="pom-agile">
                        <input style = "margin-bottom: 10px;
                        outline: none;
                        font-size: .9em;
                        padding: 1em 3em 1em 1em;
                        border: none;
                        margin-bottom: 0.3em;
                        background: rgba(255, 255, 255, 0.85);
                        width: 82%;
                        color: #000;
                        border-radius: 30px;
                        font-weight: 400;
                        font-family: 'Open Sans', sans-serif;
                        letter-spacing: 1px;" placeholder="Nhập mật khẩu cũ" name="pass" class="pass" type="text" required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input placeholder="password mới" name="newpass" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input placeholder="nhập lại password" name="newpassword" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    </div>
                    <div class="sub-w3l">
                        <h6 style="margin-right: 10px;"><a href="#">Forgot Password?</a></h6>
                        <div class="right-w3l">
                            <input type="submit" name="submit" value="Đăng nhập">
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        include "conn.php";
                        $result = $conn->query("SELECT * FROM member where id = $id");
                        while ($row = $result->fetch_assoc()){
                            $passcheck = $row['password'];
                        }
                        if(isset($_POST['submit'])){
                            $passcu = $_POST['pass'];
                            $passmoi = $_POST['newpass'];
                            $nhaplaipass = $_POST['newpassword'];
                            if($passcu == $passcheck){
                                if($passmoi == $nhaplaipass){
                                    $sql = "UPDATE `member` SET `password`= '$passmoi' WHERE `id`= '$id'";
                                    $query = $conn->query($sql);
                                    echo '
                                    <script>
                                        alert("Đổi pass thành công");
                                    </script>
                                    ';
                                    if ($query) {
                                        header('Location:index2.php?id='.$id.'');
                                    }
                                }
                                else{
                                    echo '
                                    <script>
                                        alert("Nhập lại pass không đúng");
                                    </script>
                                    ';
                                }
                            }else{
                                echo '
                                    <script>
                                        alert("Mật khẩu cũ bạn nhập sai, vui lòng nhập lại");
                                    </script>
                                ';
                            }
                        }
                    }
				?>
            </div>
        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">
            <p>&copy; 2017 Online Login Form. All rights reserved | Design by <a
                    href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <!--//footer-->
    </div>
</body>

</html>