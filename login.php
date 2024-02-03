<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <title>Login Page</title>
</head>

<body>
    <div class='container'>
        <h2>Login</h2>
        <form method="POST" action="authenticate.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input class="btn" type="submit" value="Login">
        </form>
        <br>
        <h4>Don't have an account?</h4>
        <a href="signup.php">Create a new account</a>
    </div>
</body>

</html>
