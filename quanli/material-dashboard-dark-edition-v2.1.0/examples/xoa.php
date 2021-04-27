<?php 
if(isset($_GET['id'])){
    $id =$_GET['id'];
    include "conn.php";
    $result = $conn->query("DELETE  FROM sanpham WHERE id = $id");
    echo 'header';
    header('Location: tables.php');
}
?>