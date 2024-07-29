<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Chemical store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	      <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	</header>
<div class="products"><div class="box-container">
	<?php $select_product=mysqli_query($conn,"SELECT * FROM `products`") or die('query failed');
	if(mysqli_num_rows($select_product)>0)
	{
		while($fetch_product=mysqli_fetch_assoc($select_product))
		{
			?>
			<form method="post" class="box" action="">
				<img src="image/<? echo $fetch_product['image']; ?>" alt=">"
			</form>
			<?php
		};
	};
	?>
</div></div>
<script src="js/script.js"></script>
</body>
</html> 