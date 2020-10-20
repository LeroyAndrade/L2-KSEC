!<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Headers</title>
  </head>
  <body>


<p>hoi</p>
<form name="inloggen" action="" method="POST">
  <input type="text" name="email" value="iemand@gmail.com" />
  <input type="password" name="password" value="password" />
  <input type="submit" name="submit" value="Inloggen" />
</form>
<?php

if (isset($_post['submit'])){
  echo "------------- Backend ---------";
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  echo "<br>e-mail: $email";
  echo "<br>wachtwoord: $password";

}
?>
  </body>
</html>