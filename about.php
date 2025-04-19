<?php
include("them-header.php");
?>

<div class="container py-5">
    <!-- هدر با تم زنبوری -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold text-warning">
                <i class="fas fa-honeycomb me-2"></i>درباره ما
                <i class="fas fa-bee ms-2"></i>
            </h1>
            <div class="d-flex justify-content-center">
                <div class="honeycomb-divider">
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- محتوای اصلی -->
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card bee-theme-card shadow-lg">
                <div class="card-header bg-warning text-dark">
                    <h2 class="h4 mb-0">
                        <i class="fas fa-hive me-2"></i>زنبورداری
                    </h2>
                </div>
                <div class="card-body">
                    <p class="lead text-dark">
                        زنبورداری یکی از فعالیت‌های مهم و جذاب کشاورزی است که نه تنها به تولید عسل و سایر محصولات زنبور عسل مانند موم و ژل رویال کمک می‌کند، بلکه نقش بسزایی در گرده‌افشانی گیاهان و افزایش تولید محصولات زراعی نیز دارد.
                    </p>
                    

                    <p class="text-dark">
                        زنبورعسل به عنوان یکی از مهم‌ترین موجودات گرده‌افشان، در حفظ تنوع زیستی و سلامت اکوسیستم بسیار موثر است. به همین دلیل، زنبورداری نه تنها یک منبع درآمد پایدار برای زنبورداران به شمار می‌رود، بلکه به حفاظت از محیط زیست و کشاورزی پایدار نیز کمک می‌کند.
                    </p>
                    
                    <div class="alert alert-warning mt-4 d-flex align-items-center">
                        <i class="fas fa-info-circle fa-2x me-3"></i>
                        <div>
                            علاوه بر تولید عسل خالص و طبیعی، زنبورداری به عنوان یک صنعت می‌تواند اشتغال‌زایی و رونق اقتصادی را در مناطق روستایی به همراه داشته باشد.
                        </div>
                    </div>
                    
                    <p class="text-dark">
                        به همین دلیل، توجه به آموزش و ترویج زنبورداری در کشور می‌تواند به توسعه پایدار و بهبود معیشت کشاورزان کمک کند.
                    </p>
                </div>
                <div class="card-footer bg-light text-center">
                    <i class="fas fa-honey-pot text-warning me-2"></i>
                    <span class="text-muted">تولید عسل طبیعی با کیفیت بالا</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* استایل‌های سفارشی برای تم زنبوری */
    .bee-theme-card {
        border: 2px solid #ffc107;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .honeycomb-divider {
        display: flex;
        margin: 20px 0;
    }
    
    .hexagon {
        width: 30px;
        height: 17.32px;
        background-color: #ffc107;
        margin: 0 2px;
        position: relative;
    }
    
    .hexagon:before,
    .hexagon:after {
        content: "";
        position: absolute;
        width: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
    }
    
    .hexagon:before {
        bottom: 100%;
        border-bottom: 8.66px solid #ffc107;
    }
    
    .hexagon:after {
        top: 100%;
        width: 0;
        border-top: 8.66px solid #ffc107;
    }
    
    .honey-border {
        border: 3px dashed #ffc107;
        padding: 5px;
    }
    
    .card-header {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

<?php
include("them-footer.html");
?>