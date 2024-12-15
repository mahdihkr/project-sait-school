<?php 
session_start(); 
 
$valid_username = 'mahdi'; 
$valid_password = '1386'; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
 
    if ($username === $valid_username && $password === $valid_password) { 
        header("Location: index.html"); 
        exit(); 
    } else { 
        $error = "نام کاربری یا رمز عبور نادرست است."; 
    } 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title> 
    <link rel="stylesheet" href="login.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
 
</head> 
<body> 
    <div class="wrapper"> 
        <form method="POST" action=""> 
            <h1>Login</h1> 
            <div class="input-bux"> 
                <input type="text" placeholder="Username" id="username" name="username" required> 
                <i class='bx bxs-user'></i> 
            </div> 
            <div class="input-bux"> 
                <input type="password" placeholder="Password" id="password" name="password" required> 
                <i class='bx bxs-lock'></i> 
 
            </div> 
            <div class="remember-forgot"> 
                <label><input type="checkbox"> Remember me </label> 
                <a href="#">Forgot password ?</a> 
            </div> 
            <button type="submit" class="btn">Login</button> 
            <div class="sign-up"> 
                <p>Don't have an account?<a href="home.php">Register</a></p> 
            </div> 
        </form> 
    </div> 
</body> 
</html>