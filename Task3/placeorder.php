<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','','shop_db') or die('connection failed');



if(isset($_SESSION['auth']))
{
  if(isset($_POST['placeOrderBtn']))
  {
       $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $payment_mode=mysqli_real_escape_string($conn,$_POST['payment_mode']);
        $payment_id=mysqli_real_escape_string($conn,$_POST['payment_id']);


         if($name =="" ||  $email=="" || $phone=="" || $pincode=="" || $address=="")
         {
             $_SESSION['message']="All fields are mandatory";
             header('location:checkout.php');
             exit(0);
         }
         $userId=$_SESSION['auth_user']['user_id'];
	     $query="SELECT c.id as cid,c.prod_id,c.prod_qty,p.id as pid,p.name,p.image,p.price FROM carts c,products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC";
	     $query_run=mysqli_query($conn,$query);
          
            $totalPrice=0;
			foreach($query_run as $citem)
			{
               $totalPrice += $citem['price']*$citem['prod_qty'];
             }
            
         $tracking_no="universal".rand(1111,9999).substr($phone,2);
        
        $insert_query="INSERT INTO `orders`(tracking_no,user_id,name,email,phone,address,pincode,total_price,payment_mode,payment_id) VALUES('$tracking_no','$userId','$name','$email','$phone','$address','$pincode','$totalPrice','$payment_mode','$payment_id')";
        $insert_query_run=mysqli_query($conn,$insert_query);
            if($insert_query_run)
            {
            	$order_id=mysqli_insert_id($conn);
            	foreach($query_run as $citem)
			    {
			    	$prod_id=$citem['prod_id'];
			    	$prod_qty=$citem['prod_qty'];
			        $price=$citem['price'];

                   $insert_items_query="INSERT INTO `order_items`(order_id,prod_id,qty,price) VALUES('$order_id','$prod_id',
                   '$prod_qty','$price')";
                    $insert_items_query_run=mysqli_query($conn,$insert_items_query);

                }
                $deleteCartQuery="Delete FROM `carts` WHERE user_id='$userId'";
                $deleteCartQuery_run=mysqli_query($conn,$deleteCartQuery);
                $_SESSION['message']="Order placed successfully";


               header('location:my-orders.php');
                die();
            }
 



  }      
}
else
{
	header('location:loginn.php');
}
?>