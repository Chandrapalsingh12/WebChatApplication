<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Signup Form</title>

    <link rel="stylesheet" href="css/signup.css">

  </head>

  <body>
  <section class="form signup">
<form class="box" action="#" method="post" enctype="multipart/form-data">

  <h1>Chat App Signup</h1>
  <div class="error-txt"></div>

  <input type="text" name="fname" placeholder="First Name"required>
  <input type="text" name="lname" placeholder="Last Name" required>
  <input type="text" name="email" placeholder="Email Address" required>

  <input type="password" name="password" placeholder="Password" required>

  <input type="file" name="image" required>
  <div class="field button">
  <input type="submit" name="" value="Signup">
  <div class="link">already signup then <a href="login.php">Login Now</a></div>
</div>


</form>
<script src="javascript/signup.js"></script>
</section>
  </body>

</html>