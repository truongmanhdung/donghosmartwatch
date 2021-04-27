<?php
//khoi tao phien lam viec
session_start();
//kiem tra xem gio hang co ton tai khong?
if(!isset($_SESSION['cart']))//neu khong ton tai
    $_SESSION['cart']=array(); //tao 1 mang
	$id=$_GET['id']; //lay id bang cach su dung phuong thuc GET
	$name=$_GET['name'];//lay name bang cach su dung phuong thuc get
if(isset($_SESSION['cart'][$id]))//kiem tra xem san pham da ton tai trong gio hang chua
{ 
	$_SESSION['cart'][$id]['qty'] =$_SESSION['cart'][$id]['qty'] +1;//neu ton tai san pham trong gio hang thi cong so luong them 1
}
else{ //neu khong ton tai san pham vua chon trong gio hang
    $_SESSION['cart'][$id]=$id; //gan Id cho san pham trong gio hang
	$_SESSION['cart'][$id]['qty']=1;//va gan so luong bang 1
}     
echo "<pre>"; 
print_r($_SESSION['cart']); 
echo "</pre>";
foreach ($_SESSION['cart'] as $key=>$value){//foreach cac san pham trong gio hang
    $item[]=$key;//khai bao mang item va gan bang key
}
    echo "<a href='index.php'><h3>Mua hang tiep</h3></a><br/>";//hien thi lien ket mua tiep
    echo "<a href='delcart.php?id=0'><h3>Xoa gio hang</h3></a><br/>";
?>
