<?php
include("them-header.php");
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عضویت در کندو | سیستم مدیریت محتوا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bee-yellow: #FFD700;
            --bee-dark-yellow: #FFC600;
            --bee-black: #1A1A1A;
            --bee-red: #D32F2F;
            --bee-light-yellow: #FFF9C4;
            --honeycomb: #FFD700;
        }
        
        body {
            background: url('https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .bee-overlay {
            background: rgba(0, 0, 0, 0.6);
            min-height: 100vh;
            padding: 2rem 0;
            display: flex;
            align-items: center;
        }
        
        .bee-hive {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .bee-card {
            border-radius: 20px;
            border: 3px solid var(--bee-black);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            background: linear-gradient(135deg, var(--bee-light-yellow) 0%, var(--bee-yellow) 100%);
            transform: translateY(0);
            transition: transform 0.3s ease;
        }
        
        .bee-card:hover {
            transform: translateY(-5px);
        }
        
        .bee-header {
            background: var(--bee-black);
            color: var(--bee-yellow);
            border-bottom: 3px dashed var(--bee-yellow);
            padding: 1.5rem;
            text-align: center;
            position: relative;
        }
        
        .bee-header h2 {
            margin: 0;
            font-weight: 700;
        }
        
        .bee-header::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 10px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10"><path fill="%23FFD700" d="M0,5 Q25,10 50,5 T100,5" stroke="%231A1A1A" stroke-width="0.5"/></svg>') repeat-x;
        }
        
        .bee-body {
            padding: 2rem;
        }
        
        .bee-form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .bee-form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--bee-black);
        }
        
        .bee-input-group {
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .bee-input-prepend {
            background: var(--bee-black);
            color: var(--bee-yellow);
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
        }
        
        .bee-form-control {
            flex: 1;
            padding: 0.75rem 1rem;
            border: none;
            background: white;
            font-size: 1rem;
        }
        
        .bee-form-control:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.3);
        }
        
        .bee-password-toggle {
            background: var(--bee-black);
            color: var(--bee-yellow);
            border: none;
            padding: 0 1rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .bee-password-toggle:hover {
            background: var(--bee-yellow);
            color: var(--bee-black);
        }
        
        .bee-btn {
            background: var(--bee-black);
            color: var(--bee-yellow);
            border: 2px solid var(--bee-yellow);
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 700;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .bee-btn:hover {
            background: var(--bee-yellow);
            color: var(--bee-black);
            transform: translateY(-2px);
        }
        
        .bee-footer {
            text-align: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.8);
            border-top: 1px dashed var(--bee-black);
        }
        
        .bee-link {
            color: var(--bee-black);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .bee-link:hover {
            color: var(--bee-red);
            text-decoration: underline;
        }
        
        .bee-bubbles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }
        
        .bee-bubble {
            position: absolute;
            bottom: -100px;
            background: rgba(255, 215, 0, 0.2);
            border-radius: 50%;
            animation: rise 10s infinite ease-in;
        }
        
        @keyframes rise {
            0% {
                bottom: -100px;
                transform: translateX(0);
            }
            50% {
                transform: translateX(100px);
            }
            100% {
                bottom: 1080px;
                transform: translateX(-200px);
            }
        }
        
        @media (max-width: 768px) {
            .bee-hive {
                max-width: 90%;
            }
            
            .bee-body {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="bee-overlay">
        <div class="bee-bubbles">
            <?php 
            for($i=0; $i<15; $i++) {
                $left = rand(1, 100);
                $size = rand(20, 70);
                $delay = rand(0, 5);
                $duration = rand(5, 15);
                echo '<div class="bee-bubble" style="left: '.$left.'%; width: '.$size.'px; height: '.$size.'px; animation-delay: '.$delay.'s; animation-duration: '.$duration.'s;"></div>';
            }
            ?>
        </div>
        
        <div class="container">
            <div class="bee-hive">
                <div class="bee-card">
                    <div class="bee-header">
                        <h2><i class="fas fa-honey-pot"></i> عضویت در کندو</h2>
                    </div>
                    <div class="bee-body">
                        <form action="register_action.php" method="post">
                            <div class="bee-form-group">
                                <label for="name">نام کامل</label>
                                <div class="bee-input-group">
                                    <span class="bee-input-prepend">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           class="bee-form-control" 
                                           placeholder="نام و نام خانوادگی"
                                           required>
                                </div>
                            </div>
                            
                            <div class="bee-form-group">
                                <label for="username">نام کاربری</label>
                                <div class="bee-input-group">
                                    <span class="bee-input-prepend">
                                        <i class="fas fa-at"></i>
                                    </span>
                                    <input type="text" 
                                           id="username" 
                                           name="username" 
                                           class="bee-form-control" 
                                           placeholder="نام کاربری مورد نظر"
                                           required>
                                </div>
                            </div>
                            
                            <div class="bee-form-group">
                                <label for="password">رمز عبور</label>
                                <div class="bee-input-group">
                                    <span class="bee-input-prepend">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" 
                                           id="password" 
                                           name="password" 
                                           class="bee-form-control" 
                                           placeholder="رمز عبور قوی"
                                           required>
                                    <button type="button" class="bee-password-toggle toggle-password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <span class="bee-hint">حداقل 8 کاراکتر شامل حروف و اعداد</span>
                            </div>
                            
                            <div class="bee-form-group">
                                <button type="submit" class="bee-btn">
                                    <i class="fas fa-bee"></i> عضویت در کندو
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="bee-footer">
                        <p>قبلا عضو شده‌اید؟ <a href="login.php" class="bee-link">ورود به حساب کاربری</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // نمایش/مخفی کردن رمز عبور
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordInput = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });
    </script>
</body>
</html>

<?php
include("them-footer.html");
?>