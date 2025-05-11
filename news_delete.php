<?php
include("them-header.php");
$id = $_GET["id"];

// اتصال به دیتابیس و دریافت اطلاعات مطلب
$link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
$result = mysqli_query($link, "SELECT * FROM `news` WHERE `id`=$id;");
$row = mysqli_fetch_array($result);
mysqli_close($link);

// بررسی وجود مطلب قبل از حذف
if(!$row) {
    echo '<div class="container my-5">
            <div class="alert alert-danger text-center">
                <h4>مطلب مورد نظر یافت نشد!</h4>
                <a href="news.php" class="btn btn-warning mt-3">بازگشت به صفحه مطالب</a>
            </div>
          </div>';
    include("them-footer.html");
    exit();
}

// حذف مطلب
$deleted = false;
try {
    unlink($row["imageurl"]);
      $link=mysqli_connect("localhost","root","","onenewsdb");
          $result = mysqli_query($link, "DELETE FROM `news` WHERE `id`=$id");
    mysqli_close($link);
    $deleted = ($result === true);
} catch(Exception $e) {
    $deleted = false;
}
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if($deleted): ?>
                <div class="card border-success honey-delete-card">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0"><i class="fas fa-check-circle"></i> عملیات موفق</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="honey-success-icon">
                            <i class="fas fa-trash-alt"></i>
                        </div>
                        <h4 class="text-success mt-3">مطلب با موفقیت حذف شد</h4>
                        <p class="text-muted">مطلب با عنوان "<?php echo htmlspecialchars($row['title']); ?>" از سیستم حذف گردید.</p>
                        <a href="news.php" class="btn btn-warning honey-btn">
                            <i class="fas fa-arrow-left"></i> بازگشت به صفحه مطالب
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="card border-danger honey-delete-card">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0"><i class="fas fa-exclamation-circle"></i> خطا در حذف</h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="honey-error-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h4 class="text-danger mt-3">حذف مطلب ناموفق بود</h4>
                        <p class="text-muted">متاسفانه خطایی در حذف مطلب رخ داده است.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="news.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> بازگشت
                            </a>
                            <a href="news_delete.php?id=<?php echo $id; ?>" class="btn btn-danger">
                                <i class="fas fa-redo"></i> تلاش مجدد
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    <?php if($deleted): ?>
        // انتقال به صفحه مطالب پس از 3 ثانیه
        setTimeout(function() {
            window.location.href = "news.php";
        }, 2000);
    <?php endif; ?>
</script>

<?php
include("them-footer.html");
?>