<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Đăng kí</title>
<!-- Meta tag Keywords -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193116547-1');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- main -->

	<div class="header-w3l">
		<h1>Đăng kí</h1>
	</div>
	
	<div class="main-content-agile">
		<div class="sub-main-w3" >	
			<form action="" method="post">
			    <div class="pom-agile" style = "margin-bottom: 10px;">
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
                    letter-spacing: 1px;" placeholder="Name" name="name" class="user" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input placeholder="E-mail" name="email" class="user" type="email" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="pass" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<div class="right-w3l">
						<input type="submit" name="submit_dk" value="Đăng kí">
					</div>
				</div>
			</form>
            <?php
        
				if (isset($_POST['submit_dk'])) {
                include "class.phpmailer.php";
                include "class.smtp.php";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['pass'];
				include "conn.php";
					$result = $conn->query("SELECT * FROM member where email = '" . $_POST["email"] . "'");
					if ($result->num_rows > 0) //kiểm tra số dòng
					{
					    echo "	<SCRIPT>alert('Email này đã được đăng kí')</SCRIPT>";
					}
					else{
					    $sql = "INSERT INTO member VALUES ('$name','$email','$password','')";
              $b = $conn->query($sql);
					    if($b){
                  echo "	<SCRIPT>alert('Đăng kí thành công')</SCRIPT>";
					        ?><script><?php echo("location.href = 'index2.php';");?></script><?php
					        }
					    }
					}
			?>
		</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>&copy; 2017 Online Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
	<!--//footer-->
</div>
</body>
</html>