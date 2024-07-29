<?php
session_start();

$conn=mysqli_connect('127.0.0.1','root','','shop_db') or die('connection failed');
function getCart()
{    global $conn;
    $userId=$_SESSION['auth_user']['user_id'];
	$query="SELECT c.id as cid,c.prod_id,c.prod_qty,p.id as pid,p.name,p.image,p.price FROM carts c,products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC";
	return $query_run=mysqli_query($conn,$query);
}
?>