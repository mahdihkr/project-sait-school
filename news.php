<?php
include("them-header.php");
if(!isset($_SESSION["manager"])){
    ?>
<script>
    location.replace("index.php");
</script>
    <?php
    exit();
}
?>

<style>
    :root {
        --bee-yellow: #FFD700;
        --bee-dark-yellow: #FFC600;
        --bee-black: #1A1A1A;
        --bee-red: #D32F2F;
        --bee-light-yellow: #FFF9C4;
    }
    
    .bee-card {
        transition: all 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #e0e0e0;
    }
    
    .bee-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        border-color: var(--bee-yellow);
    }
    
    .bee-btn-group {
        display: flex;
        gap: 8px;
    }
    
    .bee-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: all 0.3s ease;
        color: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        position: relative;
        overflow: hidden;
    }
    
    .bee-btn::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.2);
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .bee-btn:hover::after {
        transform: translateY(0);
    }
    
    .bee-btn-edit {
        background-color: var(--bee-yellow);
        color: var(--bee-black);
    }
    
    .bee-btn-edit:hover {
        background-color: var(--bee-dark-yellow);
        transform: scale(1.1) rotate(10deg);
    }
    
    .bee-btn-delete {
        background-color: var(--bee-red);
    }
    
    .bee-btn-delete:hover {
        background-color: #b71c1c;
        transform: scale(1.1);
    }
    
    .bee-btn i {
        transition: transform 0.3s ease;
    }
    
    .bee-btn:hover i {
        transform: scale(1.2);
    }
    
    .card-footer {
        background-color: rgba(255, 215, 0, 0.05);
    }
</style>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">
            <i class="fas fa-bee text-warning"></i> مدیریت اخبار
        </h2>
        <a href="news_add.php" class="btn btn-dark" style="background-color: var(--bee-black); color: var(--bee-yellow); border-color: var(--bee-yellow);">
            <i class="fas fa-plus"></i> افزودن خبر جدید
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
      $link=mysqli_connect("localhost","root","","onenewsdb");
      $result = mysqli_query($link, "SELECT * FROM `news`");
        mysqli_close($link);
        
        while($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col">
            <div class="card h-100 shadow-sm bee-card">
                <div class="position-relative">
                    <img src="<?php echo htmlspecialchars($row["imageurl"]); ?>" 
                         class="card-img-top img-fluid" 
                         alt="<?php echo htmlspecialchars($row["title"]); ?>"
                         style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 p-2">
                        <div class="bee-btn-group">
                            <button class="bee-btn bee-btn-edit"
                                    onclick="window.location.href='news_edit.php?id=<?php echo $row["id"]; ?>'"
                                    title="ویرایش خبر">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button class="bee-btn bee-btn-delete"
                                    onclick="if(confirm('آیا از حذف این خبر مطمئن هستید؟')) { window.location.href='news_delete.php?id=<?php echo $row["id"]; ?>' }"
                                    title="حذف خبر">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?php echo htmlspecialchars($row["title"]); ?></h5>
                    <p class="card-text text-muted"><?php echo htmlspecialchars($row["text"]); ?></p>
                </div>
                <div class="card-footer bg-transparent">
                    <small class="text-muted">آخرین ویرایش: <?php echo date('Y/m/d'); ?></small>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<script>
    // فعال کردن tooltip برای دکمه‌ها
    document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

<?php
include("them-footer.html");
?>