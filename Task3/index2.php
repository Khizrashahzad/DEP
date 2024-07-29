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
	@keyframes uv{
  0%   {bottom: :0px;}
     25%  { bottom:0px;}
  50%  { bottom:200px;}
  75%  {bottom:200px;}

    100% { bottom:0px;}
}				
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 20px;
  color:white;
  text-shadow: -1px 0 black, 0 -1px black;
  animation: uv;
  animation-duration: 5s;
  animation-iteration-count: infinite;
}
@media (max-width: 768px)
{
	#menu-btn
	{
		display: inline-block;
	}
	.header a
	{
		font-size: 15px;
	}
 .header .navbar
 {
 	position: absolute;
 	top:110%;
 	right: -110%;
 	width: 30rem;
 	box-shadow: var(--box-shadow);
 	border-radius: .5rem;
 	background: #fff;
 }
 .header .navbar a
 {
  	font-size: 2rem;margin: 2rem 2.5rem;
  	display: block;
  }
  
	.btn
	{
	
		font-size: 0.2rem;
	}
	.centered
	{
		font-size: 11px;
		margin-left: 200px;
	}
	footer
	{
		bottom: unset;
	}
  
}
@media (max-width:600px)
{
	.centered
	{
		font-size: 5px;
		margin-left: 210px;
	}
    
	footer
	{
		width: 200%;
	}
	h1
	{
		margin-left: 100px;
	}
}
.about-content
{
	display:grid;
	grid-template-columns:repeat(2,1fr);
	gap:1.5rem;

}

.about-data span
{
	font-size:1rem;
	font-weight: 500;
	text-transform:uppercase;
	color: black;  
}
.portfolio-content
{
	display:grid;
	grid-template-columns:repeat(3,1fr);
	gap:2rem;
	margin-left:270px;
	  margin-right:250px; 
}
.portfolio-box
{
	position:relative;
	width:100%;
	height:320px;
	border-radius:1rem;
	overflow:hidden;
	  box-shadow: 5px 5px 10px #555;
     
}
.portfolio-img
{
	width:100%;
	height:100%;
	object-position: center;   
}
.portfolio-overlay
{
	position:absolute;
	top:-100%;
	left: 0;
	width:100%;
	height: 100%;
	display: flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	background: hs1(234,45%,16%,0.7);

}
.portfolio-overlay h2
{
  font-size:2rem;
  font-weight: 800;
  margin-bottom: 5px;
  color:white;
  background-color:#00008B; 
  font-family: calibri;
  border:1px solid black;


}
.portfolio-box:hover .portfolio-overlay
{
	top:0;
	transition:0.3s all ease;

}
.portfolio-content2
{
	display:grid;
	grid-template-columns:repeat(2,1fr);
	gap:2rem;
	
	margin-left:270px;
	  margin-right:250px; 

	
}
.portfolio-content3
{
	display:grid;
	grid-template-columns:repeat(1,1fr);
	gap:2rem;
	margin-left:270px;
	  margin-right:250px; 
}
.portfolio-img3
{
	width:40%;
	height:40%;
	object-position: center; 
	 
  
}

	



	</style>
	<title>Chemical store</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="12.jpg">

      <meta name="viewport" content="width=devi
      ce-width, initial-scale=1.0"><!--responsive-->
      <link rel="icon" href="12.jpg">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    		<script src="js/script.js"></script>
<
</head>
<body style="background-color:white;">
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
	let navbar=document.querySelector('.navbar');//returns the first element that matches with a css selector
document.querySelector('#menu-btn').onclick=()=>{
  navbar.classList.toggle('active');
  

}
window.onscroll=()=>{
		
			navbar.classList.remove('active');


}
</script>

		<div class="slider" style="margin-top:100px; ">
			<div class="slide">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">
               
                <div class="st first">
                	<img src="1697216232941.jpg">
                </div>
                <div class="st">
                	<img src="1697216201411.jpg">
                	  <div class="centered">Deals in quality dyes and chemicals.</div>
                </div>
                <div class="st">
                	<img src="1702139318429.jpg">
                </div>
                <div class="st">
                	<img src="1702138446224.jpg">
                </div>
                <div class="nav-auto">
                	<div class="a-b1"></div>
                	<div class="a-b2"></div>
                	<div class="a-b3"></div>
                <div class="a-b4"></div>
                </div>
             </div>
                <div class="nav-m"> 
                	<label for="radio1" class="m-btn"></label>
                	<label for="radio2" class="m-btn"></label>
                	<label for="radio3" class="m-btn"></label>
                    <label for="radio4" class="m-btn"></label>
                </div>
        </div>
		
		
	
	<script type="text/javascript">
		var counter= 1;
		setInterval(function(){
			document.getElementById('radio' + counter).checked=true;
			counter++;
			if(counter>4){
				counter=1;
			}
		},5000);
	</script>

<section class="about container" id="about" style="margin-top:30px;  ">
	<div class="about-content">
		<div class="about-data">
			<span>About Us</span>
			<h2 style="color:#00008B;">Universal Trading Company,<br> deals in quality Dyes and<br> Chemicals</h2> 
		</div>
		<div class="about-text">
			<p style="text-align: justify;margin-right:290px; ">Universal Dyes and company is a business of dyes<!--<br>--> which is operative since 1968.Our office is 
situated<!--<br>--> at Sitara Market where we trade our dyes with<!--<br>--> customers like traders, distributors and 
the industry.<!--<br>--> Our forefathers start this business now currently<!--<br>--> we are running this business. Our 
running product in<!--<br>--> Dyes is Direct Dyes which we import from India and<!--<br>--> other countries like 
China, Germany and Korea etc</p>
			


		</div>
	</div>
</section>
<section class="services container" id="services">
	<h1 class="heading" style="text-align:center;font-size:30px;color:#00008B;">Our Features</h1><br><br><br>
	<div class="services-content">
		<div class="services-box">
			<i class="fa fa-bus"></i>
			<h2>High Quality</h2>
			<p>"Experience excellence with our high-quality products,<br>where precision meets perfection to elevate your expectations<br> and deliver a truly superior performance."</p>
		</div>
		<div class="services-box">
			<i class="fa fa-bank"></i>
			<h2>Resonable Price</h2>
			<p>"Discover the perfect blend of quality and affordability with our products,<br> where reasonable prices meet exceptional value, making your satisfaction our top priority."</p>
		</div>
		<div class="services-box">
			<i class="fa fa-handshake"></i>
			<h2>Fastest response</h2>
			<p>"Experience the speed of excellence with our products — where fastest response is not just a feature, but a commitment to delivering swift and efficient solutions."</p>
		</div>
		
	</div>

	
</section>
<section class="portfolio container" id="portfolio">
		<h1 class="heading" style="text-align:center;font-size:30px;color:#00008B;">Founders</h1><br><br><br>

	<div class="portfolio-content">
		<div class="portfolio-box">
			<img src="WhatsApp Image 2024-01-01 at 6.09.56 PM.jpeg" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2 style="font-size:15px;color:white;font-family:calibri; ">Mian Muhammad Younas</h2>

			</div>
		</div>
		<div class="portfolio-box">
			<img src="IMG-20231220-WA0046.jpg" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2 style="font-size:15px;color:white;font-family:calibri; ">MR Imran Younas</h2>
			</div>
		</div>
		<div class="portfolio-box">
			<img src="IMG-20231227-WA0012.jpg" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2 style="font-size:15px;color:white;font-family:calibri; ">Muhammad Ahmad Imran</h2>
			</div>
		</div>
	</div>
</section>
<section class="portfolio container" id="portfolio">
		<h1 class="heading" style="text-align:center;font-size:30px;color:#00008B; ">Deals in</h1><br><br><br>

	<div class="portfolio-content">
		<div class="portfolio-box">
			<img src="images/reactive1.webp" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2>Reactive Dyes</h2>
			</div>
		</div>
		<div class="portfolio-box">
			<img src="1703086096158.jpg" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2>Disperse Dyes</h2>
			</div>
		</div>
		<div class="portfolio-box">
			<img src="images/direct.webp" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2>Direct Dyes</h2>
			</div>
		</div>
	</div>
</section>
<section class="portfolio container" id="portfolio">
		<h1 class="heading" style="text-align:center;font-size:30px;color:#00008B;">Member Of</h1><br><br><br>

	<div class="portfolio-content2">
		<div class="portfolio-box">
			<img src="images/pcdma.png" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2 style="color:white ">PCDMA</h2>
			</div>
		</div>
		<div class="portfolio-box">
			<img src="images/fdcma.jpg" class="portfolio-img">
			<div class="portfolio-overlay">
				<h2 style="color:white">FDCMA</h2>
			</div>
		</div>
		
	</div>
</section>

<br>
<br>


<footer style="margin-bottom: -2300px;">
	<div class="row1">
		<div class="col">
			<h1 style="font-family: cursive;">Universal</h1>
			<br>
			<br>
			<p>Deals in all kinds of Dyes and Chemicals</p>
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
<script src="js/script.js"></script>


</body>
</html>