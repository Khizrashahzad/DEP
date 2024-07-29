<?php
session_start();

$conn=mysqli_connect('127.0.0.1','root','','shop_db') or die('connection failed');
function getCart()
{    global $conn;
    $userId=$_SESSION['auth_user']['user_id'];
	$query="SELECT c.id as cid,c.prod_id,c.prod_qty,p.id as pid,p.name,p.image,p.price FROM carts c,products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC";
	return $query_run=mysqli_query($conn,$query);
}
function getOrders()
{
	global $conn;
    $userId=$_SESSION['auth_user']['user_id'];
    $query="SELECT * FROM `orders` WHERE user_id='$userId' ORDER BY id DESC";
    return $query_run=mysqli_query($conn,$query);

}
function checkTrackingNoValid($trackingNo)
{
  global $conn;
    $userId=$_SESSION['auth_user']['user_id'];
    $query="SELECT * FROM `orders` WHERE user_id='$userId' AND tracking_no='$trackingNo'";
    return mysqli_query($conn,$query);
}
if(isset($_GET['t']))
{
  $tracking_no=$_GET['t'];
  $orderData=checkTrackingNoValid($tracking_no);
  if(mysqli_num_rows($orderData)<0)
  {
    ?>
   <h4>Something went wrong</h4>
   <?php
   die();
  }

}
else
{
  ?>
  <h4>Something went wrong</h4>
  <?php
  die();
}
$data=mysqli_fetch_array($orderData);
?>
<!DOCTYPE html>
<html>
<head>
	
           <title>Universal Trading Company</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="css/style.css">
           <link rel="icon" href="12.jpg">




          




</head>
<body style="background-color:white; ">
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

      <h1 style="margin-top: 120px;text-align: center;font-size:35px;font-weight:bold;color:#00008B;font-family: serif;position:relative;animation-duration: 6s;">Order</h1>
		<div class="py-5">
			<div class="container">
				<div class="">
					<div class="row">
               <div class="col-md-12">
                 <div class="card">
                  <div style="background-color:#00008B;" class="card-header">
                    <span class="text-white fs-4">View Order</span>
                    <a href="my-orders.php" class="btn btn-warning float-end" style="background-color:#00008B;color:white;font-size: 15px;  "><i class="fa fa-reply"></i>Back</a>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4>Delivery Details</h4>
                        <hr>
                        <div class="row">
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Name</label>
                             <div class="border p-1">
                               <?=$data['name'];?>
                              </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Email</label>
                             <div class="border p-1">
                               <?=$data['email'];?>
                              </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Phone</label>
                             <div class="border p-1">
                               <?=$data['phone'];?>
                              </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Tracking No.</label>
                             <div class="border p-1">
                               <?=$data['tracking_no'];?>
                              </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Address</label>
                             <div class="border p-1">
                               <?=$data['address'];?>
                              </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label class="fw-bold">Pin Code</label>
                             <div class="border p-1">
                               <?=$data['pincode'];?>
                              </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-md-6">
                        <h4>Order Details</h4>
                        <hr>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Quantity</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                             $userId=$_SESSION['auth_user']['user_id'];
                             $order_query="SELECT o.id as oid,o.tracking_no,o.user_id,oi.*,oi.qty as orderqty,p.* FROM orders o,order_items oi,products p WHERE o.user_id='$userId' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no'";
                               $order_query_run=mysqli_query($conn,$order_query);
                             if(mysqli_num_rows($order_query_run)>0)
                             {
                                foreach ($order_query_run as $item) {
                                    ?>
                                    <tr>
                                      <td class="align-middle">
                                        <img src="images/<?=$item['image'];?>" height="50px" width="50px" alt="<?=$item['name'];?>">
                                        <?=$item['name'];?>


                                      </td>
                                      <td class="align-middle"><?=$item['price'];?></td>
                                      <td class="align-middle"><?=$item['orderqty'];?></td>
                                    </tr>
                                    <?php
                                   }
                              }
                            ?>
                            </tbody>
                          </table>
                          <hr>
                          <h5>Total Price :<span class="float-end fw-bold"><?=$data['total_price'];?></span></h5>
                          <hr>
                          <label class="fw-bold">Payment Mode</label>

                          <div class="border p-1 mb-3">
                           <?=$data['payment_mode']?>
                          </div>
                          <label class="fw-bold">Status</label>

                          <div class="border p-1 mb-3">
                            <?php
                                if($data['status']==0)
                                {
                                  echo "Under Process";
                                }else if($data['status']==1)
                                {
                                  echo "Delievered";
                                }
                                else if($data['status']==2)
                                {
                                  echo "Cancelled";
                                }

                            ?>
                          </div>


                      </div>
                    </div>
                  </div>
                 </div>       	                            
					    </div>
					</div>
         </div>
			</div>
		</div>
 <footer style="margin-bottom: -600px;">
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
    </div>   <div class="col">
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