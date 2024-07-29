<?php

include 'config.php';



if(isset($_POST['add'])){

   $name = $_POST['name'];

   $price = $_POST['price'];
   

   $image = $_FILES['image']['name'];
   $path="images";
   $image_ext=pathinfo($image,PATHINFO_EXTENSION);
   $filename=time().'.'.$image_ext;
   $product_query="INSERT INTO `products`(name,price,image) VALUES('$name','$price','$image')";
   $product_query_run=mysqli_query($conn,$product_query);
   if($product_query_run)
   {
      move_uploaded_file($_FILES['image']['tmp_name'], $path.'/.$filename');
   
   }
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Product</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<section class="product-form">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>product info</h3>
      <p>product name <span>*</span></p>
      <input type="text" name="name" placeholder="enter product name" class="box">
      <p>product price <span>*</span></p>
      <input type="number" name="price" placeholder="enter product price" class="box">
      <p>product image <span>*</span></p>
      <input type="file" name="image" required accept="images/*" class="box">
      <input type="submit" class="btn" name="add" value="add product">
   </form>

</section>








<script src="js/script.js"></script>



</body>
</html>