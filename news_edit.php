<?php
include("them-header.php");
$id = $_GET["id"];

// اتصال به دیتابیس و دریافت اطلاعات خبر
$link = mysqli_connect("localhost", "root", "", "onenewsdb");
$result = mysqli_query($link, "SELECT * FROM `news` WHERE id=$id");
$row = mysqli_fetch_array($result);
mysqli_close($link);

$title = $row["title"] ?? "";
$text = $row["text"] ?? "";
$imageurl = $row["imageurl"] ?? "";
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card honey-edit-card">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0"><i class="fas fa-edit"></i> ویرایش خبر</h4>
                </div>
                <div class="card-body">
                    <form action="news_edit_action.php" method="post" enctype="multipart/form-data">
                        <!-- فیلد مخفی برای ID -->
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                        
                        <!-- نمایش تصویر فعلی -->
                        <?php if(!empty($imageurl)): ?>
                        <div class="form-group text-center mb-4">
                            <label class="honey-label">تصویر فعلی:</label>
                            <img src="<?php echo htmlspecialchars($imageurl); ?>" class="img-thumbnail honey-current-image" alt="تصویر فعلی">
                            <small class="d-block text-muted mt-2">برای تغییر تصویر، فایل جدید انتخاب کنید</small>
                        </div>
                        <?php endif; ?>
                        
                        <!-- فیلد تصویر جدید -->
                        <div class="form-group mb-4">
                            <label for="image" class="honey-label">تصویر جدید:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label text-right" for="image"><?php echo empty($imageurl) ? 'انتخاب تصویر' : 'تغییر تصویر'; ?></label>
                            </div>
                        </div>
                        
                        <!-- فیلد عنوان -->
                        <div class="form-group mb-4">
                            <label for="title" class="honey-label">عنوان خبر:</label>
                            <input type="text" class="form-control honey-input" id="title" name="title" 
                                   placeholder="عنوان خبر را وارد کنید" value="<?php echo htmlspecialchars($title); ?>" required>
                        </div>
                        
                        <!-- فیلد متن خبر -->
                        <div class="form-group mb-4">
                            <label for="text" class="honey-label">متن خبر:</label>
                            <textarea class="form-control honey-input" id="text" name="text" rows="5" 
                                      placeholder="متن خبر را وارد کنید" required><?php echo htmlspecialchars($text); ?></textarea>
                        </div>
                        
                        <!-- دکمه‌های اقدام -->
                        <div class="d-flex justify-content-between">
                            <a href="news.php" class="btn btn-secondary honey-btn">
                                <i class="fas fa-times"></i> انصراف
                            </a>
                            <button type="submit" class="btn btn-warning honey-btn">
                                <i class="fas fa-save"></i> ذخیره تغییرات
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("them-footer.html");
?>