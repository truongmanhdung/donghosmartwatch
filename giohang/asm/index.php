<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1.ket noi voi CSDL
        $conn = new mysqli('localhost','root','','donghosmartwatch');
        //2.Truy van du lieu
        $sql = "SELECT * FROM products";
       
        $results = $db->query($sql);//thuc thi truy van
        //3.Doc du lieu va hien thi len trang web
        if($results!=null)
        {
            while($row=$results->fetch())//doc theo dong
            {
                echo $row['serial']; echo "---";
                echo $row['name']; echo "---";
                echo $row['description'];
                //tao 1 lien ket mua hang
                echo "<p><a href='addcard.php?id=$row[serial]&name=$row[name]'>Mua hang</a></p>";
            }
        }
    ?>
</body>
</html>