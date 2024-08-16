<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>24</title>
</head>
<body>

<h2>Login</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    User<input type="text" name="user" id="user"><br>
    Password<input type="password" name="password" id="password"><br>
    <input type="submit" name="send" value="Send">
    <input type="reset" name="cancel" value="Cancel">
</form>

</body>
</html>