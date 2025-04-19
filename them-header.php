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
    <style>
        .nav-item a {
            border: 2px solid #f4a400;
            border-radius: 8px;
            padding: 8px 12px;
            margin: 5px;
            transition: all 0.3s;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #ffcc00;
            color: #222;
            font-weight: bold;
        }
        .nav-item a:hover {
            background-color: #f4a400;
            border-color: #d98d00;
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
            color: white;
        }
        .navbar {
            background-color: #222;
        }
        .navbar-brand {
            color: #ffcc00 !important;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
    /* ... سایر استایل‌ها ... */
    .navbar-brand img {
        width:  80px; /* افزایش به 80px */
        height: 80px; /* افزایش به 80px */
        margin-left: 10px;
        object-fit: cover; /* برای حفظ تناسب تصویر */
    }
    </style>
</head>
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            <img src="image10.jpg" alt="لوگو زنبورداری" class="footer-logo mr-3">کندو سایت
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">ثبت نام</a></li>
                    <?php if(isset($_SESSION["login"])): ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">خروج (<?php echo $_SESSION["name"]; ?>)</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">ورود</a></li>
                    <?php endif; ?>
                    <?php if(isset($_SESSION["manager"])): ?>
                        <li class="nav-item"><a class="nav-link" href="news.php">مدیریت</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="about.php">درباره ما</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">
