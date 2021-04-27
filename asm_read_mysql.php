
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Truy xuất dữ liệu database</title>

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
    <style>
    table, td,th,tr{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
        <div class="container">
        <h1 class="text-center">Truy xuất dữ liệu database</h1>
        <?php 
        // kết nối database csdl
            $conn = new mysqli("localhost","root","","donghosmartwatch");
            $result = $conn->query("SELECT * FROM member where email like '%dung88@14%'");
            if($result->num_rows>0)//kiểm tra số dòng
            {
                
                while($row = $result->fetch_assoc())//đọc dữ liệu
                {
                   $email = $row['email'];
                   echo $email;
                }
               
            }
            
        ?>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>



