<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone=$_POST['phonenum'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' || phonenum = '$phone'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'email or number already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO user_form(name, email,phonenum, password, user_type) VALUES('$name','$email','$phone','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wellassa school</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/signup.css">
   <link rel="stylesheet" href="css/navfooter.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
   <div class="main">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
         <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Wellassa School</h2>
         </a>
         <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               <a href="index.php" class="nav-item nav-link ">Home</a>
               <a href="about.php" class="nav-item nav-link">About</a>
               <a href="contact.php" class="nav-item nav-link">Contact</a>
               <a href="register_form.php" class="nav-item nav-link active">Login</a>
            </div>

         </div>
      </nav>
      <!-- Navbar end -->
      
      <div class="form-container">
         
         <form action="" method="post">
            <h3>register now</h3>
            <?php
            if (isset($error)) {
               foreach ($error as $error) {
                  echo '<span class="error-msg">' . $error . '</span>';
               };
            };
            ?>
            <input type="text" name="name" required placeholder="enter your full name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="int" name="phonenum" required placeholder="enter your phone number">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type">
               <option value="user">student</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">login now</a></p>
         </form>

      </div>
   </div>
</body>

</html>