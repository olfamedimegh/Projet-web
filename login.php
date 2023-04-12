<!-- php
    include 'components/ConnexionBD.php';
    if (isset($_COOKIE[user_id])){
        $user_id = $_COOKIE[user_id];
    }else{
        $user_id = '';
    }

    if (isset($_POST['submit'])){
        $email = $_POST['email'];
    }
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<section class="form-container">

   <form action="" method="post">
      <h3>welcome !</h3>
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <p>don't have an account? <a href="register.php">register new</a></p>
      <input type="submit" value="login" name="submit" class="btn">
   </form>

</section>
    
</body>
</html>