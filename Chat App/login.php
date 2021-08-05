<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("localhost: users.php");
  }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>َLogin Form</title>

    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>
    <section class="form login">

<form class="box" action="#" method="post">
  
  <h1>Login</h1>
  <div class="error-txt"></div>

  <input type="text" name="email" placeholder="Username">

  <input type="password" name="password" placeholder="Password">
  <div class="field buttons">

  <input type="submit" value="Login">
  <div class="link">Not signed up? <a href="index.php">signup Now</a></div>

</form>
</section>

<script src="javascript/login.js"></script>
  </body>

</html>