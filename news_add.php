<?php
include("them-header.php");
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card honey-card">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">افزودن مطلب جدید</h4>
                </div>
                <div class="card-body">
                    <form action="news_add_action.php" method="post" enctype="multipart/form-data">
                        <!-- فیلد تصویر -->
                        <div class="form-group mb-4">
                            <label for="image" class="honey-label">تصویر مطلب:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label class="custom-file-label text-right" for="image">فایلی انتخاب نشده</label>
                            </div>
                        </div>
                        
                        <!-- فیلد عنوان -->
                        <div class="form-group mb-4">
                            <label for="title" class="honey-label">عنوان مطلب:</label>
                            <input type="text" class="form-control honey-input" id="title" name="title" placeholder="عنوان مطلب را وارد کنید" required>
                        </div>
                        
                        <!-- فیلد متن -->
                        <div class="form-group mb-4">
                            <label for="text" class="honey-label">متن مطلب:</label>
                            <textarea class="form-control honey-input" id="text" name="text" rows="5" placeholder="متن مطلب را وارد کنید" required></textarea>
                        </div>
                        
                        <!-- دکمه ارسال -->
                        <div class="text-center">
                            <button type="submit" class="btn honey-btn">ذخیره مطلب</button>
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