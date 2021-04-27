<?php 
if(isset($_GET['id'])){
    $id =$_GET['id'];
    include "conn.php";
    $result = $conn->query("DELETE  FROM cartlist WHERE id = $id");
    echo 'header';
    header('Location: index.php');
}
?>