<?php

session_start();
$conn=mysqli_connect('127.0.0.1','root','','shop_db') or die('connection failed');
function getProduct()
{    global $conn;

	$query="SELECT * FROM `products`";
	return $query_run=mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		row
		{
			margin-top: 50px;  
            margin-left:300px;
            margin-right:300px;

		}
	div.gallery {
  
  box-shadow: 5px 5px 10px #555;
    padding: 5px;
   border-radius: 20px;
  align-items: center;
    float: left;
  width: 400px;

height: 500px;
margin-top: 50px;  
  margin-left:150px;


}

div.gallery:hover {
  border: 2px solid #00008B;

}

div.gallery img {
 height: 300px;
    width: 100%;
     


}

div.desc {
  padding: 25px;
  text-align: center;
}
div.price {
  font-size: 20px;
  
}
footer
{
	width: 100%;

	position: relative;
	bottom:0;
	background:linear-gradient(to right,#00093c,#2d0b00);
	color: #fff;
	padding: 100px 0 30px;
	border-top-left-radius: 125px;
	font-size: 13px;
	line-height: 10px;
}
.row1
{
	width: 85%;
	margin:auto;
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	justify-content: space-between;
}
.col
{
	flex-basis: 25%;
	padding: 10px;
}
.col:nth-child(2), .col:nth-child(3)
{
	flex-basis: 15%;
}
.col h3
{
	width:fit-content;
    margin-bottom: 40px;
    position: relative;
}
.email-id
{
	width: fit-content;
	border-bottom:1px solid #ccc;
	margin: 20px 0;

}
ul li
{
	list-style: none;
	margin-bottom: 12px;
}
ul li a
{
	text-decoration: none;
	color: #fff;
}
.social-icons .fas
{
	font-size: 16px;
	color: #ccc;
}
.social-icons .fa
{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	color: #000;
	background: #fff;
	margin-right: 15px;
	cursor: pointer;

}
hr{
width:90%;
border:0;
border-bottom: 1px  solid #ccc;
margin: 20px auto;
}
.copyright
{
	text-align: center;
}
.underline
{
	width: 100%;
	height: 5px;
	background: #767676;
	border-radius: 3px;
	position: absolute;
	top:25px;
	left: 0;
	overflow: hidden;
}
.underline span
{
	width: 15px;
	height: 100%;
	background: #fff;
	border-radius: 3px;
	position: absolute;
	top: 0;
	left: 10px;
	animation: moving 2s linear infinite;

}
@keyframes moving
{
	0%{
		left: -20px;
	}
	100%
	{
		left: 100%;
	}
}
@media(max-width: 700px)
{
	footer{
		bottom: unset;
	}
	.col
	{
		flex-basis: 100%;
	}
	.col:nth-child(2),.col:nth-child(3)
	{
		flex-basis: 100%;
	}
}
@keyframes example {
  0%   {left:0px; top:0px;}
    25%  {left:200px; top:0px;}
  50%  {left:200px; top:200px;}
  75%  {left:0px; top:200px;}

    100% {left:0px; top:0px;}
}

	</style>
		<title>Chemical store</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<body style="background-color: white;">
		<header class="header">
		<a href="#" class="logo" style="font-family:algerian;font-size: 30px;color:#00008B;  text-shadow: -1px 0 black, 0 -1px black;position:relative;animation-name:example;animation-duration: 6s;text-decoration:none; ">Universal Chemicals<br><p style="font-size: 13px;">Deals in dyes and chemicals</p></a>

<nav class="navbar">
	<a href="#Home" style="text-decoration: none;">Home</a>
    <a href="producthome.php" style="text-decoration: none;">Products</a>
    <a href="loginn.php" style="text-decoration: none;">Login</a>
    	<a href="Register.php" style="text-decoration: none;">Sign up</a>
    	</nav>
    	<div class="icons">
<div class="fa fa-bars" id="menu-btn"></div>
</div>

		
	
	

</header>


	    <h1 style="margin-top: 100px;text-align: center;font-size:35px;font-weight:bold;color:#00008B;font-family: serif;position:relative;animation-duration: 6s;">Our Products</h1>
<div class="container my-5" style="margin-left:400px;">
	<form method="post">
		<input type="text" placeholder="Search Products" name="search" style="width:400px;">
	<button style="background-color:#00008B;border-color:#00008B " class="btn btn-dark" name="submit"> <i class="fa fa-search me-2"></i>Search</button>
	</form>
	<?php
	if (isset($_POST['search']))
	{
		$search=$_POST['search'];
	    $sql="SELECT * FROM 'products' WHERE id='$search'";
	}
	?>

</div>
	
	
	<div class="row">
	<?php
		$products=getProduct();

	if(mysqli_num_rows($products)>0)
	{
		foreach($products as $item)
		{
			?>
			<div class="gallery">
				<a href="<?=$item['name'];?>.php">
		
							<img width="200px" src="images/<?=$item['image'];?>" alt="Product Image">
						</a>
						<div class="desc"><h4 class="text-center" ><?=$item['name'];?></h4></div>
					<div class="price"><h4 class="text-center" ><?=$item['price'];?></h4></div>
					      <p>Quantity<span>*</span></p>
					 <div>
					 <div>
                     <div class="input-group mb-3" style="width:150px;">
                     <button class="input-group-text decrement-btn">-</button>
                     <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                     <button class="input-group-text increment-btn">+</button>
                     </div>
                     </div>
                     </div>
                     <div>
                     <button style="background-color:#00008B;border-color:#00008B " class="btn btn-primary px-4 addTocartBtn" value="<?= $item['id'];?>" ><i class="fa fa-shopping-cart me-2"></i> Add to Cart</button>
					</div>
                    </div>
			<?php
		}
	}
	else
	{
		echo "No data available";
	}
	?>
   </div>
   <br>
   <br>
   <footer style="width: 100%;

	position: relative;
	bottom:0;
	background:linear-gradient(to right,#00093c,#2d0b00);
	color: #fff;
	padding: 100px 0 30px;
	border-top-left-radius: 125px;
	font-size: 13px;
	line-height: 10px;">
	<div class="row1" style="width: 85%;
	margin:auto;
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	justify-content: space-between;
">
		<div class="col">
			<h1 style="font-family: cursive;">Universal</h1>
			<br>
			<br>
			<p>Deals in all kinds of Dyes and<br><br> Chemicals</p>
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
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>
            </ul>
		</div>
		<div class="col">
			<h3>Follow<div class="underline"><span></span></div></h3>
			<div class="social-icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-instagram"></i>
				
				<i class="fa fa-snapchat"></i>
			
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