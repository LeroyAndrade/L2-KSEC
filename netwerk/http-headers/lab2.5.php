<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="email" value="iemand@mail.com">
    <input type="password" name="password" value="wachtwoord">
    <input type="submit" name="submit" value="Inloggen">
</form>
<?php
if (isset($_POST['submit'])){
    echo "----------------- Backend -------------------";
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "<br>email: ".$email;
    echo "<br>wachtwoord: ".$password;
}
?>
</body>
</html>
