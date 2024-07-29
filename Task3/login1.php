<?php
include 'config.php';
session_start();
if(isset($_POST['submit']))
{
	
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,($_POST['password']));
    $login_query="SELECT * FROM `user_form` WHERE email='$email' AND password='$pass'";
  	$login_query_run=mysqli_query($conn,$login_query);
        if(mysqli_num_rows($login_query_run)>0)
        {      
          $message[]='Login';
        	 
        	 $_SESSION['auth']=true;
        	 $userdata=mysqli_fetch_array($login_query_run);
          $userrid=$userdata['user_id'];
          $_SESSION['auth_user']=[
          	'user_id' =>$userrid,
          	'name' =>$name,
          	'email' =>$email
          ];	
          header('location:productss.php');
        }
	   else
       {
         $message[]='incorrect password or email';
       }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Universal Trading Company</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" type="text/css" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <header class="header" >
		<a href="#" class="logo"><i class="fa fa-handshake-o" aria-hidden="true">Universal Trading Company</i>
</a>
<nav class="navbar">
	<a href="#Home">Home</a>
    <a href="productss.php">Shop</a>
    <a href="#">Contact</a>
    	<a href="register.php">Register</a>
    	</nav>
    	<div class="icons">
<div class="fa fa-bars" id="menu-btn"></div>

<div class="fa fa-shopping-cart" id="cart-btn"></div>
	<div class="fa fa-user" id="login-btn"></div></div>
</header>
</head>

<body>
<?php
if(isset($message))
{
foreach($message as $message)
{
	echo '<div class="message" onClick="this.remove();" style="padding:500px;font-size:20rem;">'.$message.'</div>';
}
}
?>


		<form action="#" class="login-form" style="margin-top: 100px;"><h3>Login Form</h3>
		<input type="email" placeholder="Enter your email" class="box">
				<input type="password" placeholder="Enter your password" class="box">
				<p>Forget Your Password.<a href="#"> Click Here</a></p>
	<p>Don't Have an account.<a href="#"> Create Now</a></p>

				<input type="submit" name="submit" value="Login Now" class="btn">

	</form>
		<script src="js/script.js"></script>


</body>
</html>
