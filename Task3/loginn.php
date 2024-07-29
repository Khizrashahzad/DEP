<?php
session_start();
include 'config.php';
if(isset($_POST['submit']))
{
	
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,($_POST['password']));

  	$select=mysqli_query($conn,"SELECT * FROM `user_form` WHERE email='$email' AND password='$pass'") or die('query failed');
        if(mysqli_num_rows($select)>0)
        {
	     
	      $_SESSION['auth']=true;
	      $userdata=mysqli_fetch_array($select);
          $userid=$userdata['id'];
          $username=$userdata['name'];
          $useremail=$userdata['email'];
          $_SESSION['auth_user']=[
          	'user_id' =>$userid,
          	'name' =>$username,
          	'email' =>$useremail
          ];	
          header('location:productss.php');
	     
	    }
	    else
        {
        
         $message[]='Incorrect password';
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	<style>
	@keyframes example {
  0%   {left:0px; top:0px;}
    25%  {left:200px; top:0px;}
  50%  {left:200px; top:200px;}
  75%  {left:0px; top:200px;}

    100% {left:0px; top:0px;}
}



footer
{
	width: 100%;
    position:absolute;
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
		width: 120%;
	}
	.col
	{
		flex-basis: 100%;
	}
	.col:nth-child(2),.col:nth-child(3)
	{
		flex-basis: 100%;
	}
	.btn
	{
		font-size:0.6rem; 
	}
}
@media(max-width: 600px)
{
	footer{
		bottom: unset;
		width: 130%;
	}
	.col
	{
		flex-basis: 100%;
	}
	.col:nth-child(2),.col:nth-child(3)
	{
		flex-basis: 100%;
	}
	.btn
	{
		font-size:0.6rem; 
	}
}
@media (max-width: 768px)
{
	footer{
		bottom: unset;
		width: 120%;
	}
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
  
}
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
		

		


	</style>

		<title>Universal Trading Company</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        	<link rel="stylesheet" type="text/css" href="css/style.css">
        	<link rel="icon" href="12.jpg">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
        



	
</head>
<body style="background-color: white;background-image:url(

1702138433731.jpg);background-size: cover;">
	<header class="header">
	
		<a href="#" class="logo" style="font-family:algerian;font-size: 30px;color:#00008B;text-shadow: -1px 0 black, 0 -1px black;position:relative;animation-name:moving;animation-duration: 6s;text-decoration:none; ">Universal Chemicals<br><p style="font-size: 13px;">Deals in dyes and chemicals</p></a>
    
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
		<script src="js/script.js"></script>

<?php
if(isset($message))
{
     foreach($message as $message)
{
	echo '<div class="message" onClick="this.remove();" style="padding:100px;font-size:2rem;color:white">'.$message.'</div>';
}
}
?>

<div class="form-container"  style="
	display: flex;align-items: center;
	justify-content: center;margin-left: 150px;
	padding: 100px"><form action="" method="post" style="
	width: 500px;
	border-radius: 5px;
	border: var(--border);
	padding: 02px;
	text-align: center;
	background-color: var(--white);"><h1 style="margin-top: 20px;text-align: center;font-size:35px;font-weight:bold;color:white;font-family: serif;padding-bottom: 80px;font-size: 50px;margin-right: 200px;">Login Now</h1>

						<input type="email" name="email" required placeholder="Enter Email" class="box" style="width: 90%;
	border-radius: 5px;
	border:var(--border);
	padding: 12px 14px;
	font-size: 18px;
	margin: 10px 0;
" autofocus>
		<input type="password" name="password" required placeholder="Enter password" class="box" style="width: 90%;
	border-radius: 5px;
	border:var(--border);
	padding: 12px 14px;
	font-size: 18px;
	margin: 10px 0;
">
		<input type="submit" name="submit" class="btn" value="Login Now" style="margin-left:330px;border-color:#00008B;color:white; ">

	</form>
	<br><br><br>
</div>


   


	<footer style="margin-bottom: -710px;">
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

</body>

</html>