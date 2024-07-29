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
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		::-webkit-scrollbar{
			width:10px;
		}
		::-webkit-scrollbar-track
		{
			background-color:white;
			border-radius: 9px;
		}
		::-webkit-scrollbar-thumb
		{
			background-color:#191970;
			border-radius: 9px;
		}
		::-webkit-scrollbar-thumb:hover
		{
			background-color:#301934;
			border-radius: 9px;
		}
		@keyframes example {
  0%   {left:0px; top:0px;}
    25%  {left:200px; top:0px;}
  50%  {left:200px; top:200px;}
  75%  {left:0px; top:200px;}

    100% {left:0px; top:0px;}
}
	</style>
	
           <title>Universal Trading Company</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				    <link rel="stylesheet" type="text/css" href="css/style.css">
				    <link rel="icon" href="12.jpg">


			 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


          




</head>
<body>
	<header class="header">
	
		<a href="#" class="logo" style="font-family:algerian;font-size: 30px;color:#00008B;text-shadow: -1px 0 black, 0 -1px black;position:relative;animation-name:example;animation-duration: 6s;text-decoration:none; ">Universal Chemicals<br><p style="font-size: 13px;">Deals in dyes and chemicals</p></a>
    
<nav class="navbar">
	<a href="index2.php" style="text-decoration:none; ">Home</a>
    <a href="productss.php" style="text-decoration:none; ">Products</a>
<?php if(isset($_SESSION['auth']))
      {?>
      	      	<a href="#" style="text-decoration: none;"><?=$_SESSION['auth_user']['name']?></a>

      	<a href="Logout.php" style="text-decoration: none;">Logout</a>
      			
      	
       <?php
      }else
      {?> 

        <a href="Register.php" style="text-decoration: none;">Register</a>
    	<a href="loginn.php" style="text-decoration: none;">Login</a>
    	<?php
       }?>

    	</nav>
    	<div class="icons">
    		
	   
	<a href="cartt.php" style="width: 40px;
	height: 40px;
	border-radius: 50%;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	color: #000;
	background: #fff;
	margin-right: 15px;
	cursor: pointer;"><i class="fa fa-shopping-cart" ></i></a>
<div class="fa fa-bars" id="menu-btn" style="width: 40px;
	height: 40px;
	border-radius: 50%;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	color: #000;
	background: #fff;
	margin-right: 15px;
	cursor: pointer;"></div>
</div>

		
	
	

</header>

<script type="text/javascript">
	let navbar=document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick=()=>{
  navbar.classList.toggle('active');
  

}
window.onscroll=()=>{
		
			navbar.classList.remove('active');


}
</script>
<h1 style="margin-top: 100px;text-align:center;font-size:35px;font-weight:bold;color:#00008B;font-family: serif;position:relative;animation-duration: 6s;">Checkout</h1><!--margintop 200-->
		<div class="py-5">
			<div class="container">
				<div class="card">
					<div class="card-body shadow">
						<form action="placeorder.php" method="POST">

					
					      <div class="row">
						<div class="col-md-7">
							<h5>Basic Details</h5>
							<hr>
							<div class="row">
								<div class="col-md-6 mb-3">
									<label class="fw-bold">Name</label>
									<input type="text" name="name" required placeholder="Enter your full name" class="form-control">
						       </div>
						       <div class="col-md-6 mb-3">
						       		<label class="fw-bold">Email</label>
									<input type="text" name="email" required placeholder="Enter email" class="form-control">
								</div>
								<div class="col-md-6 mb-3">
						       		<label class="fw-bold">Phone</label>
									<input type="tel" name="phone" required placeholder="Enter your number 0000-0000000" class="form-control" pattern="[0-9]{4}-[0-9]{7}">
								</div>
								<div class="col-md-6 mb-3">
						       		<label class="fw-bold">Pin code</label>
									<input type="text" name="pincode" required placeholder="Enter your pincode" class="form-control">
								</div>
								<div class="col-md-12 mb-3">
						       		<label class="fw-bold">Address</label>
									<textarea name="address" required class="form-control" rows="5"></textarea>
								</div>
							</div>
                        </div>
                        <div class="col-md-5">
                        	<h5>Order Details</h5>
                        	<hr>
							
                       
                           <?php $items=getCart();
                           $totalPrice=0;
					

						 foreach($items as $citem)
						 {?>
							<div class="mb-1 border">
                              <div class="row align-items-center">
								<div class="col-md-3">
								  <img src="images/<?=$citem['image']?>" alt="image" width="80px">
								</div>
								<div class="col-md-5">
									<label><?= $citem['name'] ?></label>
								</div>
								<div class="col-md-3">
									<label>Rs. <?= $citem['price'] ?></label>
								</div>

								 <div class="col-md-2">
									<label>x<?= $citem['prod_qty'] ?></label>
								 </div>
								
								
								
                            </div>
                        </div>
                            


       
                            <?php
                            $totalPrice += $citem['price']*$citem['prod_qty'];
                             
						
						 }
						 ?>
						 <hr>
						 <h5>Total price : <span class="float-end fw-bold"><?=$totalPrice?></span></h5>
					     <div class="">
					     	<input type="hidden" name="payment_mode" value="COD">
					     	<button type="submit" style="background-color:#00008B;border-color:#00008B;  " name="placeOrderBtn" class="btn btn-primary w-100">Confirm and Place Order</button>

					     </div>
						</div>
					      </div>
				        </form>

				</div>
			</div>
			</div>
		</div>
		 <footer style="margin-bottom: -1300px;">
	<div class="row1">
		<div class="col">
			<h1 style="font-family: cursive;">Universal</h1>
			<br>
			<br>
			<p>Member of:</p>
			<p>FCDMA</p>
			<p>PCDMA</p>
		</div>
		<div class="col">
			<h3 style="width:fit-content;
    margin-bottom: 40px;
    position: relative;">Office<div class="underline"><span></span></div></h3>
			<p>Shop#8 Sitara market</p>
			<br>
			<p>Maqbool road</p>
			<br>
			<p>Faisalabad.</p>

			<p class="email-id">ahmad@gmail.com</p>
			<h4>0322-8662020</h4>
		</div>
		<div class="col">
			<h3>Links<div class="underline"><span></span></div></h3>
			<ul>
			<li><a href="index2.php">Home</a></li>
		   <li><a href="productss.php">Products</a></li>
            <?php if(!isset($_SESSION['auth']))
            {?>
			<li><a href="loginn.php">Login</a></li>
			<li><a href="Register.php">Register</a></li>


        <?php } ?>
			<li><a href="cartt.php">Cart</a></li>
			<li><a href="my-orders.php">My Orders</a></li>
            </ul>
		</div>
				<div class="col">
			<h3>Follow<div class="underline"><span></span></div></h3>
			<div class="social-icons">
				<a href=" https://www.facebook.com/ahmad.fatima.16?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
				<a href="https://instagram.com/imran_vohra_2020?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram"></i></a>
				
				<a href="https://wa.me/03028662020"><i class="fa fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
	<hr>
	<p class="copyright"> 2023 - All Rights Reserved</p>
</footer>

<script src="js/jquery-3.7.1.min.js"></script>	
<script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
		

</body>
</html>