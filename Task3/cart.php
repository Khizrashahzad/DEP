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
	
           <title>Universal Trading Company</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


          




</head>
<body>
		<div class="py-5">
			<div class="container">
				<div class=" ">
					
					<div class="row">
                        <div class="col-md-12">
                        	<div id="mycart">
                        	 <?php $items=getCart();
					
                   if(mysqli_num_rows($items)>0)
                   {
                  	   ?>
							<div class="row align-items-center">
								<div class="col-md-5">
									<h6>Product</h6>
								</div>
								<div class="col-md-3">
						           <h6>Price</h6>
                                </div>
                                 <div class="col-md-2">
								     <h6>Quantity</h6>
							     </div>
							     <div class="col-md-2">
								     <h6>Remove</h6>
							     </div>
                        </div>
                       
                      <div id="">
                         <?php  
						 foreach($items as $citem)
						 {?>
							<div class="card gallery shadow-sm mb-3">
                              <div class="row align-items-center">
								<div class="col-md-2">
								  <img src="images/<?=$citem['image']?>" alt="image" width="80px">
								</div>
								<div class="col-md-3">
									<h5><?= $citem['name'] ?></h5>
								</div>
								<div class="col-md-3">
								    <h5>Rs <?= $citem['price'] ?></h5>

								</div>
								<div class="col-md-2">
									<input type="hidden" class="prodId" value="<?=$citem['prod_id']?>">
									<div class="input-group mb-3" style="width:130px;">
                                        <button class="input-group-text decrement-btn updateQty">-</button>
                                        <input type="text" class="form-control text-center input-qty bg-white" value="<?=$citem['prod_qty']?>" disabled>
                                        <button class="input-group-text increment-btn updateQty">+</button>
                                    </div>
                                </div>
							        <div class="col-md-2">
								     <button class="btn btn-danger btn-sm deleteItem" value="<?=$citem['cid']?>">
								     <i class="fa fa-trash me-2"></i>Remove</button>
							       </div>
                            </div>
                            </div>


       
                            <?php
                             
						
						 }
						?>
						 
					 </div>
					 <div class="float-end">
					 	<a href="checkout.php" class="btn btn-outline-primary">Proceed to checkout</a>
					 </div>
					 <?php
					}
					else
					{?>
						<div class="card card-body shadow text-center">
							<h4 class="py-3">Your cart is empty</h4>
						</div>
						<?php


					}
					?>
					</div>
					</div>
                </div>

				</div>
			</div>
		</div>

<script src="js/jquery-3.7.1.min.js"></script>	
<script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
		

</body>
</html>