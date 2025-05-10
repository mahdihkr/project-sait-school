<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مطالب زنبورداری</title>
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bee-yellow: #FFD700;
            --bee-dark-yellow: #FFC600;
            --bee-black: #1A1A1A;
            --bee-light-yellow: #FFF9C4;
        }
        
        .nav-item a {
            border: 2px solid var(--bee-yellow);
            border-radius: 8px;
            padding: 8px 12px;
            margin: 5px;
            transition: all 0.3s;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: var(--bee-yellow);
            color: var(--bee-black);
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .nav-item a:hover {
            background-color: var(--bee-dark-yellow);
            border-color: var(--bee-dark-yellow);
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
            color: white;
            transform: translateY(-2px);
        }
        
        .navbar {
            background-color: var(--bee-black);
            padding: 10px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            color: var(--bee-yellow) !important;
            font-weight: bold;
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            transition: all 0.3s;
        }
        
        .navbar-brand:hover {
            color: var(--bee-dark-yellow) !important;
            transform: scale(1.05);
        }
        
        .navbar-brand img {
            width: 80px;
            height: 80px;
            margin-left: 10px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--bee-yellow);
            transition: all 0.3s;
        }
        
        .navbar-brand:hover img {
            transform: rotate(15deg);
        }
        
        .badge {
            font-size: 0.7rem;
            margin-right: 5px;
        }
        
        .nav-link i {
            margin-left: 5px;
        }
        
        /* استایل برای دکمه سبد خرید */
        .cart-link {
            position: relative;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            left: -8px;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }
    </style>
</head>
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="image10.jpg" alt="لوگو زنبورداری" class="footer-logo mr-3">
                کندو سایت
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> خانه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">
                            <i class="fas fa-user-plus"></i> ثبت نام
                        </a>
                    </li>
                    <?php if(isset($_SESSION["login"])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> خروج (<?php echo $_SESSION["name"]; ?>)
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                <i class="fas fa-sign-in-alt"></i> ورود
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <!-- لینک سبد خرید برای همه کاربران -->
                    <li class="nav-item">
                        <a class="nav-link cart-link" href="cart.php">
                            <i class="fas fa-shopping-cart"> سبد خرید</i>
                            <?php if (!empty($_SESSION['cart'])): ?>
                                <span class="cart-count"><?php echo count($_SESSION['cart']); ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                    
                    <?php if(isset($_SESSION["manager"])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">
                                <i class="fas fa-cog"></i> مدیریت
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="fas fa-info-circle"></i> درباره ما
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">