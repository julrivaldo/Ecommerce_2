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
if (isset($_POST['submit-btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name= '$name' AND email='$email' AND $number = '$number' AND message= '$message'") or die('query failed');
    if (mysqli_num_rows($select_message)>0) {
        echo 'message already send';
    }else{
        mysqli_query($conn, "INSERT INTO `message`(`user_id`,`name`,`email`,`number`,`message`)VALUES('$user_id','$name','$email','$number','$message')") or die ('query failed');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'header.php' ?>
    <div class="banner">
        <div class="detail">
            <h1>contact</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores corporis minus? Necessitatibus dolorum.</p>
            <a href="index.php">home</a><span>/ contact</span>
        </div>
    </div>
    <!------------------------------------------about us----------------------------->
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
    <div class="line4"></div>
    <div class="form-container">
        <h1 class="title">leave a message</h1>
        <form method="post">
            <div class="input-field">
                <label>your name</label><br>
                <input type="text" name="name"> 
            </div>
            <div class="input-field">
                <label>your email</label><br>
                <input type="text" name="email"> 
            </div>
            <div class="input-field">
                <label>number</label><br>
                <input type="number" name="number"> 
            </div>  
            <div class="input-field">
                <label>your message</label><br>
                <textarea name="message"></textarea>
            </div>
            <button type="submit" name="submit-btn">send message</button>
        </form>        
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="address">
        <h1 class="title">Our Contact</h1>
        <div class="row">
            <div class="box">
                <i class="bi bi-map-fill"></i>
                <div>
                    <h4>addess</h4>
                    <p>1093 marigold lane, coral way, <br> Miami, Florida, 33169</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <h4>phone number</h4>
                    <p>089972614416</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-envelope-fill"></i>
                <div>
                    <h4>email</h4>
                    <p>yooshimoyattr5@gmail.com</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="line3"></div>
    <?php include 'footer.php' ?>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
