<?php
// Hard Coded Users for Testing/Simplification Purposes
$users = array();
$initialTestUser = [
    'username' => 'test',
    'password' => 'Password!'
];
array_push($users, $initialTestUser);

// Password validation logic for user creation
function validatePassword($password, $confirm_password, $username)
{
    global $users;
    include_once('signup.php');

    // Confirm that username is not already taken
    if (isUsernameTaken($username, $users)) {
        echo '<script>alert("Username is already taken.")</script>';
        return;
    }

    // Confirm that passwords match
    if ($password != $confirm_password) {
        echo '<script>alert("Passwords do not match.")</script>';
        return;
    }

    // Confirm password length requirements
    if (strlen($password) <= 8) {
        echo '<script>alert("Password must be longer than 8 characters.")</script>';
        return;
    }

    // Confirm password uppercase requirements
    if (!preg_match('/[A-Z]/', $password)) {
        echo '<script>alert("Password must contain an uppercase character.")</script>';
        return;
    }

    // Confirm password symbol requirements
    if (!preg_match('/[\W]/', $password)) {
        echo '<script>alert("Password must contain a symbol.")</script>';
        return;
    }

    // If we pass all the tests, create new user and confirm registration
    $newUser = [
        'username' => "$username",
        'password' => "$password"
    ];
    array_push($users, $newUser);
    header('Location: ' . 'successCreate.php');
}
function isUsernameTaken($username, $users)
{
    for($i = 0; $i < count($users); $i++){
        if($users[$i]['username'] == $username){
            return true;
        }
    }
    return false;
}
// Login authentication logic
function login($username, $password, $users)
{
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            return true;
        }
    }
    return false;
}
if (isset($_POST['uname']) && isset($_POST['pword']) && isset($_POST['confirm_password'])) {
    // start validation for user creation
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $confirm_password = $_POST['confirm_password'];
    validatePassword($password, $confirm_password, $username);
} elseif (isset($_POST['username']) && isset($_POST['password'])) {
    global $users;
    // start validation for user login
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (login($username, $password, $users)) {
        header('Location: ' . 'successLogin.php');
    } else {
        header('Location: ' . 'invalid.php');
    }
}
