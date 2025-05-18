<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == "admin" && $password == "1234") {
        echo "<p>Login successful!  $username.</p>";
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}
?>

</body>
</html>
