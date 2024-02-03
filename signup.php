<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Sign Up Page</title>
</head>

<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form method="POST" action="authenticate.php">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" required><br><br>
            <label for="pword">Password:</label>
            <input type="password" id="pword" name="pword" required><br><br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <input class="btn" type="submit" value="Register">
        </form>
        <br>
        <h4>Already have an account?</h4>
        <a href="login.php">Login</a>
    </div>
</body>

</html>