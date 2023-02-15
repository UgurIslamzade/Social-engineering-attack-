<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="stylenav.css">
    <title>User Dashboard</title>
</head>
<body>
    <nav>
  <div class="navicon">
    <div></div>
  </div>
  <a href="index.php">Home</a>
  <a href="contact.php">Contact us</a>
  <a href="about.php">About</a>
</nav>
    <div class="container">
        <a class="button-2" href="logout.php" role="button" style="text-decoration: none;">Logout</a>
    </div>
    <style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400');
</style>
<ul>
  <li>
    <a href="facebook.php">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <span> - Facebook</span>
    </a>
  </li>
  <li>
    <a href="linkedin.php">
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      <span> - Linkedin</span>
    </a>
  </li>
  <li>
    <a href="google.php">
      <i class="fa fa-google-plus" aria-hidden="true"></i>
      <span> - Google</span>
    </a>
  </li>
  <li>
    <a href="instagram.php">
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <span> - Instagram</span>
    </a>
  </li>
</body>
</html>
