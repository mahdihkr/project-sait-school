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
                <button class="back-button" onclick="goToHomePage()"><i class="fas fa-home icon"></i> <!-- آیکون خانه -->
                </button>
            </div> 
        </form> 
    </div> 
</body> 
</html>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>جایگزینی متن با آیکون</title>
    <style>
        .icon {
            font-size: 24px; /* سایز آیکون */
            color: #444; /* رنگ آیکون */
        }
    </style>
</head>
<body>
    <div>
       
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه دوم</title>
    <style>
        .back-button {
            padding: 10px 20px;
            background-color :rgba(90, 21, 209, 0.01);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color:rgba(0, 87, 179, 0.01);
        }
    </style>
</head>
<body>
    <script>
        function goToHomePage() {
            window.location.href = 'index.html'; // آدرس صفحه اصلی خود را اینجا وارد کنید
        }
    </script>

</body>
</html>

