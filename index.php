<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}
//adding product in whistlist
if (isset($_POST['add_to_wishlist'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    $cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    if (isset($_POST['add_to_wishlist'])) {
      
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];

    if (mysqli_num_rows($wishlist_number) > 0) {
        $message[] = 'Product already exists in wishlist';
    } else if (mysqli_num_rows($cart_num) > 0) {
        $message[] = 'Product already exists in cart';
    } else {
        mysqli_query($conn, "INSERT INTO `wishlist` (`user_id`,`pid`,`name`,`price`,`image`)VALUES('$user_id','$product_id','$product_name','$product_price','$product_image')");
        $message[] = 'Product successfully added to your wishlist';
    }
  }
}
//adding product in cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($cart_num) > 0) {
        $message[] = 'Product already exists in cart';
    } else {
        mysqli_query($conn, "INSERT INTO `cart` (`user_id`,`pid`,`name`,`price`,`quantity`,`image`)VALUES('$user_id','$product_id','$product_name','$product_price','$product_quantity','$product_image')");
        $message[] = 'Product successfully added to your cart';
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <link rel="stylesheet"href="main.css">
  </head>
  <body>
  	    <?php include 'header.php'?>
 <!------------------------home slider---------->
    <div class="cointainer-fluid">
	<div class="hero-slider slider">
		<div class="slider-item">
			<img src="img/slider.jpg">
			<div class="slider-caption">
				<span>Test The Quality</span>
				<h1>Organic Premium <br>Honey</h1>
				<p>Enjoy sweet, aromatic honey made by hardworking people of <br> ecologically clean raw materials in the most pure environtment!</p>
				<a href="shop.php" class="btn">shop now</a>
			</div>
		</div>
		<div class="slider-item">
			<img src="img/slider4.png">
			<div class="slider-caption">
				<span>Test The Quality</span>
				<h1>Organic Premium <br>Honey</h1>
				<p>Enjoy sweet, aromatic honey made by hardworking people of <br> ecologically clean raw materials in the most pure environtment!</p>
				<a href="shop.php" class="btn">shop now</a>
			</div>
		</div>
		<div class="slider-item">
			<img src="img/slider5.png">
			<div class="slider-caption">
				<span>Test The Quality</span>
				<h1>Organic Premium <br>Honey</h1>
				<p>Enjoy sweet, aromatic honey made by hardworking people of <br> ecologically clean raw materials in the most pure environtment!</p>
				<a href="shop.php" class="btn">shop now</a>
			</div>
		</div>
	</div>
	<div class="control">
		<i class="bi bi-chevron-left prev"></i>
		<i class="bi bi-chevron-right next"></i>
	</div>
</div>
<div class="line"></div>
<div class="services">
		<div class="row">
			<div class="box">
				<img src="img/Shipping.png">
				<div>
					<h1>Free Shipping Fast</h1>
					<p>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="box">
				<img src="img/money.png">
				<div>
					<h1>Money Back & Guarantee</h1>
					<p>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="box">
				<img src="img/online.png">
				<div>
					<h1>Online Support 24/7</h1>
					<p>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="line2"></div>
	<div class="story">
		<div class="row">
			<div class="box">
				<span>our story</span>
				<h1>Product tea honey sience 1990</h1>
				<p>Honey and tea are commonly consumed together. Many people perceive it just as a home remedy for a scratchy throat or the flu. Honey is proven to soothe infections and is also a cough suppressant. However, the combination shouldn’t be used only when sick because it has many other benefits and It’s incredibly delicious if made the right way. </p>
				<a href="shop.php" class="btn">show now</a>
			</div>
			<div class="box">
				<img src="img/15.png">
			</div>
		</div>
	</div>
	<div class="line3"></div>
	<!-------------------------testimonial--------------------->
	<div class="line4"></div>
    <div class="testimonial-fluid">
    	<h1>What Our Customers Say's</h1>
	<div class="testimonial-slider slider">
		<div class="testimonial-item">
			<img src="img/online.png" />
          <div class="testimonial-caption">
            <span>Test The Quality</span>
            <h1>Organic Premium Honey</h1>
            <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<div class="testimonial-item">
			<img src="img/online.png" />
          <div class="testimonial-caption">
            <span>Test The Quality</span>
            <h1>Organic Premium Honey</h1>
            <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<div class="testimonial-item">
			<img src="img/online.png" />
          <div class="testimonial-caption">
            <span>Test The Quality</span>
            <h1>Organic Premium Honey</h1>
            <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
	            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
	            aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>
	<div class="control">
		<i class="bi bi-chevron-left prev1"></i>
		<i class="bi bi-chevron-right next1"></i>
	</div>
</div>
	<div class="line"></div>
	<!-------------------------discover--------------------->
	<div class="line2"></div>
	<div class="discover">
		<div class="detail">
			<h1 class="title">Organic Honey Be Healthy</h1>
			<span>Buy Now And Save 30% Off!</span>
			<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<a href="shop.php" class="btn">discovery now</a>
		</div>
		<div class="img-box">
			<img src="img/16.png">
		</div>
	</div>
	<div class="line3"></div>
	<?php include 'homeshop.php';?>
	<div class="line2"></div>
	<div class="newslatter">
		<h1 class="title">Join Our To Newslatter</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nesciunt, laboriosam quae nobis deserunt explicabo voluptatem beatae, aperiam eius blanditiis sequi molestias similique?
		</p>
		<input type="text" name="" placeholder="Your Email Address...">
		<button>subscribe now</button>
	</div>
	<div class="line3"></div>
	<div class="client">
		<div class="box">
			<img src="img/online.png">
		</div>
		<div class="box">
			<img src="img/online.png">
		</div>
		<div class="box">
			<img src="img/online.png">
		</div>
		<div class="box">
			<img src="img/online.png">
		</div>
		<div class="box">
			<img src="img/online.png">
		</div>
	</div>
    <?php include 'footer.php';?>
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script
      src="slick.js"
      type="text/javascript"
      charset="utf-8"
    ></script>
    <script type="text/javascript" src="script2.js"></script>
  </body>
</html>