<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NoName</title>
</head>
<body>

<h1>Login</h1>

<form action="login.php" method="post">
    User<input type="text" name="user" id="user"><br>
    Password<input type="password" name="password" id="password"><br>
    Remember me<input type="checkbox" name="rememberme" id="rememberme"><br>
    <input type="submit" name="send" value="Send">
    <input type="reset" name="cancel" value="Cancel">
</form>

<a href="deletecookie.php">Delete cookie</a>

</body>
</html>