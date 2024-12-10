<?php
include 'connection.php';

$message = array(); // Initialize an empty array to store messages

if (isset($_POST['submit-btn'])) {
    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $filter_name);

    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);

    $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, $filter_password);

    $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
    $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('Query failed');

    if (mysqli_num_rows($select_user) > 0) {
        $message[] = 'User already exists.';
    } else {
        if ($password != $cpassword) {
            $message[] = 'Passwords do not match.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            $insert_query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $insert_result = mysqli_query($conn, $insert_query);

            if ($insert_result) {
                $message[] = 'Registered successfully.';
                header("Location: login.php");
            } else {
                $message[] = 'Registration failed. Please try again later.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--box icon link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Register page</title>
  </head>
  <body>
    <section class="form-container">
    <?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
                <div class="message">
                    <span>' . $message . '</span>
                    <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>


                </div>
              ';
    }
}
?>
      <form method="POST" action="" style="width: 35%">
        <h1>Register Now</h1>
        <input type="text" name="name" placeholder="Enter your name" required />
        <input type="email" name="email" placeholder="Enter your email" required />
        <input type="password" name="password" placeholder="Enter your password" required />
        <input type="password" name="cpassword" placeholder="Confirm your password" required />
        <input type="submit" name="submit-btn" value="Register Now" class="btn" />
        <p>Already have an account? <a href="login.php">Login Now</a></p>
      </form>
    </section>
  </body>
</html>
