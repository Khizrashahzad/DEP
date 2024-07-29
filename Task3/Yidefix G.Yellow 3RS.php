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
		::-webkit-scrollbar{
			width:10px;
		}
		::-webkit-scrollbar-track
		{
			background-color:white;
			border-radius: 7px;
		}
		::-webkit-scrollbar-thumb
		{
			background-color:#00008B;
			border-radius: 7px;
		}
			@keyframes example {
  0%   {left:0px; top:0px;}
  25%  {left:200px; top:0px;}
  50%  {left:200px; top:200px;}
  75%  {left:0px; top:200px;}
  100% {left:0px; top:0px;}
}
p
{
	text-align:justify; 
}
.slider1
{
	width:500px;
	height:500px;
	border-radius: 10px;
	overflow: hidden;
	margin-left:410px; 
	
}
.slide1
{
	width:500%; 
	height: 500px;
	display: flex;

}
.slide1 input
{
	display: none;
}
.st1{
	width:20%; 
	transition: 2s;


}
.st1 img
{
	width: 500px;
	height: 500px;
}

		
	</style>
	<title>Chemical store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
      <meta name="viewport" content="width=devi
      ce-width, initial-scale=1.0">
      <link rel="icon" href="12.jpg">

    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>
<body style="background-color: white;">
	<header class="header">
	
		<a href="#" class="logo" style="font-family:algerian;font-size: 30px;color:#00008B;text-shadow: -1px 0 black, 0 -1px black;position:relative;animation-name:example;animation-duration: 6s;text-decoration:none; ">Universal Chemicals<br><p style="font-size: 13px;">Deals in dyes and chemicals</p></a>
    
<nav class="navbar">
	<a href="index2.php" style="text-decoration:none; ">Home</a>
    <a href="productss.php" style="text-decoration:none; ">Products</a>
<?php if(isset($_SESSION['auth']))
      {?>
      	      	<a href="#" class="dropdown1" style="text-decoration:none; "><?=$_SESSION['auth_user']['name']?></a>

      	<a href="Logout.php" class="dropdown2" style="text-decoration:none; ">Logout</a>
      			
      	
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

		<div class="slider1">
			<div class="slide1">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
							<               
                <div class="st1 first">
                	<img src="images/yellow.jpeg">
                </div>
                <div class="st1">
                	<img src="images/IMG-20231111-WA0013.jpg">
                </div>
              
                <div class="nav-auto">
                	<div class="a-b1"></div>
                	<div class="a-b2"></div>
                
                </div>
             </div>
                <div class="nav-m"> 
                	<label for="radio1" class="m-btn"></label>
                	<label for="radio2" class="m-btn"></label>
                	
                </div>
        </div>
		
		
	
	<script type="text/javascript">
		var counter= 1;
		setInterval(function(){
			document.getElementById('radio' + counter).checked=true;
			counter++;
			if(counter>2){
				counter=1;
			}
		},5000);
	</script>

<h1 style="margin-left:270px;font-family: Poppins;color: #00008B;font-size: 30px;"><br>Yidefix G.Yellow 3RS: </h1>
<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color"><br>

Yellow dye refers to a coloring substance used to add a yellow color to various materials, such as textiles</p>
<h1 style="margin-left: 270px;font-family: Poppins;font-size: 30px;color: #00008B;"><br>Benefits:</h1>
<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color"><br> 
Yellow dye offers a range of benefits across various industries. In textiles and fashion, it adds vibrancy and visual appeal to fabrics, contributing to diverse design possibilities. In the food industry, yellow dye enhances the appearance of products, making them more enticing to consumers and aiding in product differentiation. Furthermore, yellow dye's versatility allows its application in plastics, cosmetics, and artistic endeavors, providing a broad spectrum of creative options. Its synthetic counterparts often ensure color consistency, maintaining the desired hue over time. While these benefits contribute to the aesthetics and marketability of products, it's important to adhere to safety regulations, particularly in the food industry, to ensure the dyes used are safe for consumption and adhere to relevant standards.</p>		


<h1 style="margin-left: 270px;font-family: Poppins;color:#00008B;font-size: 30px;"><br>Scope of Yidefix G.Yellow 3RS:<br></h1>
	<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;font-color: light-color;text-align: justify;"><br>
The scope of yellow dye is extensive, spanning multiple industries and applications. In textiles, it adds vibrancy to fabrics and clothing, providing designers with a versatile color option. The food industry utilizes yellow dye to enhance the visual appeal of various products, from candies to beverages, contributing to product differentiation and consumer preference. Yellow dye is prevalent in cosmetics and personal care products, adding color to items such as lipsticks and shampoos. Its application extends to plastics and packaging, where it helps create visually attractive and distinct products. Artists and crafters use yellow dye as a creative tool, and in laboratories, it serves for biological staining. The industrial sector also employs yellow dyes for processes requiring color coding or identification. As industries evolve, there is an increasing focus on sustainable and eco-friendly dyeing practices, reflecting a growing awareness of environmental considerations in dye production and application.





</p>


<br>
<br>


<footer style="margin-bottom: -1200px;">
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
			<h3>Office<div class="underline"><span></span></div></h3>
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
		</div>		<div class="col">
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
<script src="js/script.js"></script>


</body>
</html>