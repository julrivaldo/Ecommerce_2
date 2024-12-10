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

?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <link rel="stylesheet"href="main.css">
  </head>
  <body>
  	    <?php include 'header.php'?>
  	    <div class="banner">
        	<div class="detail">
            <h1>about</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Labore asperiores corporis minus? Necessitatibus dolorum.</p>
                <a href="index.php">home</a><span>/ about us</span>
        </div>
    </div>
    <div class="line"></div>
    <!---------------------------about us---------------------------------->
    <div class="line2"></div>
    <div class="about-us">
    	<div class="row">
    		<div class="box">
    			<div class="title">
    				<span>ABOUT OUR ONLINE SHOP</span>
    				<h1>Hello, With 25 years of experience</h1>
    			</div>
    			<p>Over 25 Years Ecommerce helping companies reach their financial and branding goals.
    			</p>
    		</div>
    		<div class="img-box">
    			<img src="img/14.png">
    			
    		</div>
    	</div>
    	
    </div>
    <div class="line3"></div>
    <!--------------------------- features ---------------------------------->
    <div class="line4"></div>
    <div class="features">
    	<div class="title">
    		<h1>Complete Customer Ideas</h1>
    		<span>best features</span>
    </div> 
    <div class="row">
    <div class="box">
    	<img src="img/online.png">
    	<h4>24 X 7</h4>
    	<p>Online Support 27/7</p>
    		</div>
    		<div class="box">
    	<img src="img/money.png">
    	<h4>Money Back Guarentee</h4>
    	<p>100% secure payment</p>
    		</div>
    		<div class="box">
    	<img src="img/online.png">
    	<h4>Special Gift Card</h4>
    	<p>Give The Perfect Gift</p>
    		</div>
    		<div class="box">
    	<img src="img/online.png">
    	<h4>Worlwide Shipping</h4>
    	<p>On order Over $99</p>
    		</div>
    </div>
  </div>
    <div class="line"></div>
    <!--------------------------- team section ---------------------------------->
    <div class="line2"></div>
    <div class="team">
    	<div class="title">
    		<h1>Our Workable Team</h1>
    		<span>best team</span>
    	</div>
    	<div class="row">
    		<div class="box">
    			<div class="img-box">
    				<img src="img/logo1.png">
    			</div>
    			<div class="detail">
    				<span>Finance Manager</span>
    				<h4>Miguel Roadrigez</h4>
    				<div class="icons">
								<i class="bi bi-instagram"></i>
								<i class="bi bi-youtube"></i>
								<i class="bi bi-twitter"></i>
								<i class="bi bi-behance"></i>
								<i class="bi bi-whatsapp"></i>
						</div>    				
    			</div>    			
    		</div>  
    		<div class="box">
    			<div class="img-box">
    				<img src="img/logo1.png">
    			</div>
    			<div class="detail">
    				<span>Finance Manager</span>
    				<h4>Miguel Roadrigez</h4>
    				<div class="icons">
								<i class="bi bi-instagram"></i>
								<i class="bi bi-youtube"></i>
								<i class="bi bi-twitter"></i>
								<i class="bi bi-behance"></i>
								<i class="bi bi-whatsapp"></i>
						</div>    				
    			</div>    			
    		</div>
    		<div class="box">
    			<div class="img-box">
    				<img src="img/logo1.png">
    			</div>
    			<div class="detail">
    				<span>Finance Manager</span>
    				<h4>Miguel Roadrigez</h4>
    				<div class="icons">
								<i class="bi bi-instagram"></i>
								<i class="bi bi-youtube"></i>
								<i class="bi bi-twitter"></i>
								<i class="bi bi-behance"></i>
								<i class="bi bi-whatsapp"></i>
						</div>    				
    			</div>    			
    		</div>
    		<div class="box">
    			<div class="img-box">
    				<img src="img/logo1.png">
    			</div>
    			<div class="detail">
    				<span>Finance Manager</span>
    				<h4>Miguel Roadrigez</h4>
    				<div class="icons">
								<i class="bi bi-instagram"></i>
								<i class="bi bi-youtube"></i>
								<i class="bi bi-twitter"></i>
								<i class="bi bi-behance"></i>
								<i class="bi bi-whatsapp"></i>
						</div>    				
    			</div>    			
    		</div>
    		<div class="box">
    			<div class="img-box">
    				<img src="img/logo1.png">
    			</div>
    			<div class="detail">
    				<span>Finance Manager</span>
    				<h4>Miguel Roadrigez</h4>
    				<div class="icons">
								<i class="bi bi-instagram"></i>
								<i class="bi bi-youtube"></i>
								<i class="bi bi-twitter"></i>
								<i class="bi bi-behance"></i>
								<i class="bi bi-whatsapp"></i>
						</div>    				
    			</div>    			
    		</div>  		
    	</div>    	
    </div>
    <div class="line3"></div>
    <div class="line4"></div>
    <div class="project">
    	<div class="title">
    		<h1>Our Best Project</h1>
    		<span>how it works</span>    		
    	</div>
    	<div class="row">
    		<div class="box">
    			<img src="img/logo.png">    			
    		</div> 
    		<div class="box">
    			<img src="img/logo.png">    			
    		</div>    		
    	</div>    	
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="ideas">
    	<div class="title">
    		<h1>We And Our Clients Are Happy To Cooperate With Our Company</h1>
    		<span>Our features</span>
    	</div>
    	<div class="row">
    		<div class="box">
    			<i class="bi bi-stack"></i>
    			<div class="detail">
    				<h2>What We Really Do</h2>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua.</p>			
    			</div>
    		</div>
    		<div class="box">
    			<i class="bi bi-grid-1x2-fill"></i>
    			<div class="detail">
    				<h2>History Beginning</h2>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua.</p>			
    			</div>
    		</div>
    		<div class="box">
    			<i class="bi bi-vinyl"></i>
    			<div class="detail">
    				<h2>Our Vision</h2>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua.</p>			
    			</div>
    		</div>
    		
    	</div>
    	
    </div>
    <div class="line3"></div>
 				<?php include 'footer.php'?>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>