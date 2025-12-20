<?php
include '../includes/db.php';
include '../includes/header.php';

if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];

if(isset($_GET['id'])) $_SESSION['cart'][]=$_GET['id'];

$total=0;
foreach($_SESSION['cart'] as $id){
 $p=$conn->query("SELECT * FROM products WHERE id=$id")->fetch();
 echo "<p>{$p['name']} - {$p['price']} FCFA</p>";
 $total+=$p['price'];
}
echo "<strong>Total : $total FCFA</strong><br>";
echo "<a href='checkout.php' class='btn btn-primary'>Commander</a>";

include '../includes/footer.php';
?>
