<?php
include("them-header.php");
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کندوی اخبار | سیستم مدیریت محتوا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bee-yellow: #FFD700;
            --bee-dark-yellow: #FFC600;
            --bee-black: #1A1A1A;
            --bee-light-yellow: #FFF9C4;
            --bee-text-dark: #333;
        }
        
        body {
            background-color: #f9f5e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .bee-container {
            background: url('https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .bee-overlay {
            background-color: rgba(255, 236, 179, 0.85);
            min-height: 100vh;
            padding: 2rem 0;
        }
        
        .bee-card {
            border-radius: 15px;
            border: 2px solid var(--bee-black);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom, #fff9e6 0%, #fff0b3 100%);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .bee-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .bee-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--bee-yellow);
        }
        
        .bee-card-img {
            height: 200px;
            object-fit: cover;
            border-bottom: 2px dashed var(--bee-black);
            transition: transform 0.5s ease;
        }
        
        .bee-card-img:hover {
            transform: scale(1.05);
        }
        
        .bee-card-body {
            padding: 1.5rem;
        }
        
        .bee-card-title {
            color: var(--bee-black);
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .bee-card-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--bee-yellow);
        }
        
        .bee-card-text {
            color: var(--bee-text-dark);
            line-height: 1.6;
        }
        
        .bee-read-more {
            color: var(--bee-black);
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 0.5rem;
            transition: all 0.3s;
        }
        
        .bee-read-more:hover {
            color: var(--bee-yellow);
            text-decoration: underline;
            transform: translateX(5px);
        }
        
        .bee-card-footer {
            background-color: rgba(255, 255, 255, 0.7);
            border-top: 1px dashed var(--bee-black);
            padding: 0.75rem 1.5rem;
        }
        
        .bee-badge {
            background-color: var(--bee-black);
            color: var(--bee-yellow);
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
        }
        
        .bee-modal-content {
            border: 3px solid var(--bee-black);
            border-radius: 15px;
            overflow: hidden;
        }
        
        .bee-modal-header {
            background-color: var(--bee-black);
            color: var(--bee-yellow);
            border-bottom: 2px dashed var(--bee-yellow);
        }
        
        .bee-modal-body {
            padding: 0;
        }
        
        .bee-modal-img {
            width: 100%;
            height: auto;
            max-height: 70vh;
            object-fit: contain;
        }
        
        .bee-modal-footer {
            background-color: var(--bee-light-yellow);
            border-top: 1px dashed var(--bee-black);
        }
        
        .bee-btn {
            background-color: var(--bee-black);
            color: var(--bee-yellow);
            border: 2px solid var(--bee-black);
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .bee-btn:hover {
            background-color: var(--bee-yellow);
            color: var(--bee-black);
            border-color: var(--bee-black);
        }
        
        .bee-flying {
            position: fixed;
            font-size: 1.5rem;
            color: var(--bee-black);
            opacity: 0.6;
            z-index: -1;
            animation: fly 15s linear infinite;
        }
        
        @keyframes fly {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(50vw, -20vh) rotate(10deg);
            }
            50% {
                transform: translate(100vw, 0) rotate(0deg);
            }
            75% {
                transform: translate(50vw, 20vh) rotate(-10deg);
            }
            100% {
                transform: translate(0, 0) rotate(0deg);
            }
        }
    </style>
</head>

<!-- زنبورهای پرنده در پس‌زمینه -->
    <i class="fas fa-bee bee-flying" style="top: 20%; left: 5%; animation-delay: 0s;"></i>
    <i class="fas fa-bee bee-flying" style="top: 40%; left: 80%; animation-delay: 3s; animation-duration: 18s;"></i>
    <i class="fas fa-bee bee-flying" style="top: 70%; left: 15%; animation-delay: 6s; animation-duration: 20s;"></i>
    
    <div class="bee-overlay">
        <div class="container py-4">
            <h1 class="text-center mb-5" style="color: var(--bee-black); position: relative;">
                
                <span class="bee-badge position-absolute top-0 start-50 translate-middle">جدیدترین مطالب زنبورداری</span>
            </h1>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                $link = mysqli_connect("localhost", "root", "", "onenewsdb");
                $result = mysqli_query($link, "SELECT * FROM `news`");
                mysqli_close($link);
                
                $counter = 0;
                while($row = mysqli_fetch_array($result)) {
                    $counter++;
                    $shortText = substr($row["text"], 0, 100);
                ?>
                <div class="col">
                    <div class="card h-100 bee-card">
                        <!-- تصویر با قابلیت کلیک برای نمایش بزرگ -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal<?php echo $counter; ?>">
                            <img src="<?php echo htmlspecialchars($row["imageurl"]); ?>" class="bee-card-img" alt="<?php echo htmlspecialchars($row["title"]); ?>">
                        </a>
                        
                        <div class="bee-card-body">
                            <h5 class="bee-card-title"><?php echo htmlspecialchars($row["title"]); ?></h5>
                            <p class="bee-card-text">
                                <span id="shortText<?php echo $counter; ?>">
                                    <?php echo htmlspecialchars($shortText); ?>
                                    <?php if(strlen($row["text"]) > 100): ?>...<?php endif; ?>
                                </span>
                                <span id="fullText<?php echo $counter; ?>" style="display:none;">
                                    <?php echo htmlspecialchars($row["text"]); ?>
                                </span>
                            </p>
                            
                            <?php if(strlen($row["text"]) > 100): ?>
                            <button class="btn btn-link bee-read-more p-0" 
                                    onclick="toggleText(<?php echo $counter; ?>)"
                                    data-more="مشاهده بیشتر" 
                                    data-less="مشاهده کمتر">
                                مشاهده بیشتر
                            </button>
                            <?php endif; ?>
                        </div>
                        
                        <div class="bee-card-footer d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                <?php echo date('Y/m/d'); ?>
                            </small>
                            <span class="badge bg-warning text-dark">
                                <i class="fas fa-eye me-1"></i>
                                <?php echo rand(100, 500); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Modal برای نمایش تصویر بزرگ -->
                <div class="modal fade" id="imageModal<?php echo $counter; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bee-modal-content">
                            <div class="modal-header bee-modal-header">
                                <h5 class="modal-title"><?php echo htmlspecialchars($row["title"]); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body bee-modal-body">
                                <img src="<?php echo htmlspecialchars($row["imageurl"]); ?>" class="bee-modal-img" alt="<?php echo htmlspecialchars($row["title"]); ?>">
                            </div>
                            <div class="modal-footer bee-modal-footer">
                                <button type="button" class="btn bee-btn" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-1"></i> بستن
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script>
  function toggleText(id) {
    // 1. انتخاب المان‌های مورد نیاز
    const shortText = document.getElementById(`shortText${id}`);
    const fullText = document.getElementById(`fullText${id}`);
    const btn = document.querySelector(`button[onclick="toggleText(${id})"]`);
    
    // 2. بررسی وضعیت فعلی متن
    if (shortText.style.display === 'none') {
        // 3. اگر متن کوتاه مخفی بود (یعنی متن کامل در حال نمایش است)
        shortText.style.display = 'inline'; // نمایش متن کوتاه
        fullText.style.display = 'none';    // مخفی کردن متن کامل
        btn.textContent = btn.getAttribute('data-more'); // تغییر متن دکمه به "مشاهده بیشتر"
        btn.classList.remove('text-warning'); // حذف کلاس رنگ زرد
    } else {
        // 4. اگر متن کوتاه در حال نمایش بود
        shortText.style.display = 'none';   // مخفی کردن متن کوتاه
        fullText.style.display = 'inline';  // نمایش متن کامل
        btn.textContent = btn.getAttribute('data-less'); // تغییر متن دکمه به "مشاهده کمتر"
        btn.classList.add('text-warning');  // اضافه کردن کلاس رنگ زرد
    }
}
    </script>

    <?php
    include("them-footer.html");
    ?>
</body>
</html>