<!DOCTYPE html>
<html lang="EN">
<?php // the html head.
  include("include/views/_head.php");
?>
<body>
<div class="register">
        <center><img src="https://i.ibb.co/XDZtMjx/podcastforum.png" width="50%"></center>
  <h3>Login</h3>
    <form name="logForm" action="login.php" onsubmit="return validateLogin()" method="POST" >
            <input type="text" placeholder="Email" name="email"><br>
            <input type="password" placeholder="Password" name="password"><br>
            <input type="submit" id="login" value="Login">
            </form>
          </div>
</body>
</html>
