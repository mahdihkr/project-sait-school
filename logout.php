<?php
include("them-header.php");

// تخریب تمام متغیرهای سشن
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خروج از کندو | سیستم مدیریت محتوا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bee-yellow: #FFD700;
            --bee-black: #1A1A1A;
            --bee-red: #D32F2F;
            --bee-light-yellow: #FFF9C4;
        }
        
        body {
            background: url('https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        
        .bee-overlay {
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .bee-card {
            border-radius: 20px;
            border: 3px solid var(--bee-black);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, var(--bee-light-yellow) 0%, var(--bee-yellow) 100%);
        }
        
        .bee-header {
            background: var(--bee-black);
            color: var(--bee-yellow);
            border-bottom: 3px dashed var(--bee-yellow);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .bee-alert {
            background-color: rgba(255, 255, 255, 0.9);
            border-left: 5px solid var(--bee-yellow);
            border-radius: 10px;
        }
        
        .bee-progress {
            height: 8px;
            background-color: rgba(0, 0, 0, 0.1);
        }
        
        .bee-progress-bar {
            background-color: var(--bee-black);
            background-image: linear-gradient(
                45deg,
                var(--bee-yellow) 25%,
                transparent 25%,
                transparent 50%,
                var(--bee-yellow) 50%,
                var(--bee-yellow) 75%,
                transparent 75%,
                transparent
            );
            background-size: 1rem 1rem;
        }
        
        .bee-btn {
            background: var(--bee-black);
            color: var(--bee-yellow);
            border: 2px solid var(--bee-yellow);
            font-weight: bold;
            transition: all 0.3s;
            border-radius: 10px;
            padding: 10px 25px;
        }
        
        .bee-btn:hover {
            background: var(--bee-yellow);
            color: var(--bee-black);
            transform: translateY(-2px);
        }
        
        .bee-footer {
            background-color: rgba(255, 255, 255, 0.8);
        }
        
        .bee-flying {
            position: absolute;
            font-size: 1.5rem;
            animation: fly 8s linear infinite;
            opacity: 0.7;
        }
        
        @keyframes fly {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(50px, -30px) rotate(10deg);
            }
            50% {
                transform: translate(100px, 0) rotate(0deg);
            }
            75% {
                transform: translate(50px, 30px) rotate(-10deg);
            }
            100% {
                transform: translate(0, 0) rotate(0deg);
            }
        }
    </style>
</head>
<body>
    <div class="bee-overlay">
        <!-- زنبورهای پرنده -->
        <i class="fas fa-bee bee-flying" style="top: 20%; left: 10%; animation-delay: 0s;"></i>
        <i class="fas fa-bee bee-flying" style="top: 40%; left: 80%; animation-delay: 1s; animation-duration: 10s;"></i>
        <i class="fas fa-bee bee-flying" style="top: 70%; left: 20%; animation-delay: 2s; animation-duration: 12s;"></i>
        
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="bee-card">
                        <div class="card-header bee-header text-center py-3">
                            <h3 class="mb-0"><i class="fas fa-sign-out-alt me-2"></i>خروج از کندو</h3>
                        </div>
                        <div class="card-body p-4 text-center">
                            <div class="bee-alert p-4 mb-4">
                                <i class="fas fa-check-circle fa-3x mb-3" style="color: var(--bee-yellow);"></i>
                                <h4 class="alert-heading fw-bold">با موفقیت خارج شدید!</h4>
                                <p class="mb-0">شما از حساب کاربری خود خارج شده‌اید.</p>
                            </div>
                            
                            <div class="bee-progress mb-4">
                                <div class="bee-progress-bar progress-bar-striped progress-bar-animated" 
                                     role="progressbar" 
                                     style="width: 100%">
                                </div>
                            </div>
                            
                            <p class="text-muted mb-4">در حال انتقال به صفحه اصلی...</p>
                            
                            <a href="index.php" class="bee-btn btn">
                                <i class="fas fa-home me-2"></i>برگشت به کندو
                            </a>
                        </div>
                        <div class="card-footer bee-footer text-center py-3">
                            <small class="text-muted">سیستم مدیریت محتوا</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 3000); // انتقال بعد از 3 ثانیه
    </script>
</body>
</html>

<?php
include("them-footer.html");
?>