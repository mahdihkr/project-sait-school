<?php
// comment-manager.php

include("them-header.php");

// بررسی ورود مدیر
if (!isset($_SESSION["manager"])) {
    echo "<script>location.replace('index.php');</script>";
    exit();
}

// اتصال به پایگاه داده
$link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
if (!$link) {
    die("خطا در اتصال به پایگاه داده.");
}

// دریافت نظرات از دیتابیس
$query = "SELECT c.*, n.title AS news_title 
          FROM comments c 
          LEFT JOIN news n ON c.news_id = n.id 
          ORDER BY c.created_at DESC";

$result = mysqli_query($link, $query);
?>

<style>
.comment-card {
    border-left: 4px solid #FFD700;
    margin-bottom: 15px;
    transition: all 0.3s ease;
}
.comment-card:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.comment-actions {
    opacity: 0;
    transition: opacity 0.3s ease;
}
.comment-card:hover .comment-actions {
    opacity: 1;
}
.edit-form {
    display: none;
    margin-top: 10px;
}
.bee-btn-group {
    display: flex;
    gap: 6px;
}
.bee-btn {
    border: none;
    border-radius: 50%;
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
}
.bee-btn-edit {
    background-color: #FFD700;
    color: black;
}
.bee-btn-delete {
    background-color: #D32F2F;
}
.bee-btn:hover {
    opacity: 0.9;
}
</style>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fas fa-comments text-warning"></i> مدیریت نظرات</h2>
    </div>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($comment = mysqli_fetch_assoc($result)): ?>
            <div class="card comment-card" id="comment-<?php echo $comment['id']; ?>">
                <div class="card-body">
                    <!-- نمایش فعلی نظر -->
                    <div class="comment-view">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong><?php echo htmlspecialchars($comment["name"]); ?></strong>
                                <span class="mx-2"><?php echo date("Y/m/d H:i", strtotime($comment["created_at"])); ?></span>
                            </div>
                            <div class="comment-actions">
                                <div class="bee-btn-group">
                                    <button class="bee-btn bee-btn-edit" onclick="showEditForm(<?php echo $comment['id']; ?>)" title="ویرایش">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="bee-btn bee-btn-delete" onclick="deleteComment(<?php echo $comment['id']; ?>)" title="حذف">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($comment["news_title"])): ?>
                            <p class="mt-2 mb-1">
                                <i class="fas fa-newspaper"></i>
                                <a href="news_view.php?id=<?php echo $comment["news_id"]; ?>">
                                    <?php echo htmlspecialchars($comment["news_title"]); ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <p class="comment-text"><?php echo nl2br(htmlspecialchars($comment["comment"])); ?></p>
                    </div>

                    <!-- فرم ویرایش -->
                    <div class="edit-form" id="edit-form-<?php echo $comment['id']; ?>">
                        <form method="post" action="comment-action.php">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id" value="<?php echo $comment['id']; ?>">
                            <textarea name="new_comment" class="form-control mb-2" required><?php echo htmlspecialchars($comment["comment"]); ?></textarea>
                            <button type="submit" class="btn btn-success btn-sm">ثبت تغییرات</button>
                            <button type="button" class="btn btn-secondary btn-sm" onclick="hideEditForm(<?php echo $comment['id']; ?>)">لغو</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info">هیچ نظری یافت نشد.</div>
    <?php endif; ?>

</div>

<script>
function showEditForm(id) {
    document.querySelector("#comment-"+id+" .comment-view").style.display = "none";
    document.querySelector("#edit-form-"+id).style.display = "block";
}

function hideEditForm(id) {
    document.querySelector("#comment-"+id+" .comment-view").style.display = "block";
    document.querySelector("#edit-form-"+id).style.display = "none";
}

function deleteComment(id) {
    if (confirm("آیا از حذف این نظر مطمئن هستید؟")) {
        window.location.href = "comment_action.php?action=delete&id=" + id;
    }
}
</script>

<?php
mysqli_close($link);
include("them-footer.html");
?>