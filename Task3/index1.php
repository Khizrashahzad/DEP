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
	
		bottom: unset;
		width: 120%;
	}	
	h1
	{
		margin-left: 100px;
	}
}
	</style>
	<title>Chemical store</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
      
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    		<script src="js/script.js"></script>

</head>
<body style="background-color: white;">
<header class="header">
	
		<a href="#" class="logo" style="font-family:algerian;font-size: 30px;color:#00008B;text-shadow: -1px 0 black, 0 -1px black;position:relative;animation-name:example;animation-duration: 6s;text-decoration:none; ">Universal Chemicals<br><p style="font-size: 13px;">Deals in dyes and chemicals</p></a>
    
<nav class="navbar">
	<a href="index1.php" style="text-decoration: none;">Home</a>
    <a href="productss.php" style="text-decoration: none;">Products</a>
    <a href="Register.php" style="text-decoration: none;">Register</a>
    	<a href="my-orders.php" style="text-decoration: none;">My Orders</a>
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
	<a href="loginn.php" style="width: 40px;
	height: 40px;
	border-radius: 50%;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	color: #000;
	background: #fff;
	margin-right: 15px;
	cursor: pointer;"><i class="fa fa-user-o" ></i></a>
	
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

		<div class="slider">
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
                	<img src="1697216069047.jpg">
                </div>
                <div class="st">
                	<img src="h.jpg">
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

<h1 style="margin-left:270px;font-family: Poppins;color: #00008B;font-size: 30px;"><br>Universal Trading Company:</h1>
<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color;"><br>Universal Trading Company is a business that deals in <b>Chemicals and Dyes</b> started in 1980s.It aims to serve in the field of Chemicals and Dying industry.By the grace of <b>Allah Almighty</b> the business is doing its best and it is flourishing day by day. </p>
<h1 style="margin-left: 270px;font-family: Poppins;font-size: 30px;color: #00008B;"><br>Chemicals and Dyes:</h1>
<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color"><br> Dyes are the chemical substances that impart their colour to an article and are soluble in water. Dyes can be natural or synthetic.<br><b> Natural dyes:</b><br> When the dye is obtained from the plants, it is called as a natural dye.<br><b> Examples:</b><br> Dyes obtained from beetroot, flowers etc.</p>		<image src="syn.webp" border="10px" width="400px" style="margin-left: 500px;margin-right: 100px;"></image>

<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color">A <b>chemical</b> is any substance that has a defined composition. In other words, a chemical is always made up of the same <b>"stuff."</b> Some chemicals occur in nature, such as water. Other chemicals are manufactured, such as chlorine (used for bleaching fabrics or in swimming pools).</p>
<h1 style="margin-left: 270px;font-family: Poppins;color:#00008B;font-size: 30px;"><br>Scope of Chemicals and Dyes:</h1>
<h5 style="margin-left: 270px;font-family: Poppins;font-size: 20px;"><br>Textile Industry:<br></h3>
	<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;font-color: light-color">In the textile industry, mills extensively utilize our acid, disperse, reactive, and basic dyes. Additionally, our optical brightening agents and chemicals support the industry. With a focus on high quality colorants, we manufacture all types of textile dyes carefully engineered and developed.
</p>
<image src="dye.jpg" border="10px" width="800px" style="margin-left: 270px;margin-right: 200px;"></image>

<h5 style="margin-left: 270px;font-family: Poppins;font-size: 20px;color: #00008B;"><br>Others:<br></h3>
	<p style="margin-left: 270px;margin-right:200px;font-family: Calibri;font-size: 20px;color: light-color">Chemicals are used in many different consumer goods, and are also used in many different sectors. This includes agriculture manufacturing, construction, and service industries. Major industrial customers include rubber and plastic products, textiles, apparel, petroleum refining, pulp and paper, and primary metals.

</p>
<br>
<br>


<footer style="margin-bottom: -1900px;">
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
			<li><a href="index1.php">Home</a></li>
			<li><a href="productss.php">Products</a></li>
			<li><a href="loginn.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="cartt.php">Cart</a></li>
            </ul>
		</div>
		<div class="col">
			<h3>Follow<div class="underline"><span></span></div></h3>
			<div class="social-icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-instagram"></i>
				
				<i class="fa fa-snapchat"></i>
				<i class="fa fa-whatsapp"></i>
			</div>
		</div>
	</div>
	<hr>
	<p class="copyright"> 2023 - All Rights Reserved</p>
</footer>
<script src="js/script.js"></script>


</body>
</html>