<?php
ob_start(); // ⬅️ این خط فعال می‌کنه بافر خروجی برای جلوگیری از خطای header
include("them-header.php");

$link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
$id = intval($_GET['id']); // گرفتن id خبر

// ثبت نظر اگر فرم ارسال شده باشد
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit_comment'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $comment = mysqli_real_escape_string($link, $_POST['comment']);
    if (!empty($name) && !empty($comment)) {
        mysqli_query($link, "INSERT INTO comments (news_id, name, comment) VALUES ($id, '$name', '$comment')");
        header("Location: news-view.php?id=$id"); // بازنشانی فرم پس از ارسال
        exit;
    }
}

// گرفتن اطلاعات خبر
$result = mysqli_query($link, "SELECT * FROM news WHERE id = $id");
$row = mysqli_fetch_assoc($result);

// گرفتن نظرات مرتبط
$comments = mysqli_query($link, "SELECT * FROM comments WHERE news_id = $id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($row['title']); ?></title>
    <style>
        body {
            background-color: #fffce8;
            font-family: sans-serif;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid #ccc;
        }
        .comment-box {
            background: #f8f8f8;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
        }
        input, textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #1A1A1A;
            color: #FFD700;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #FFD700;
            color: #1A1A1A;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo htmlspecialchars($row['title']); ?></h1>
    <img src="<?php echo htmlspecialchars($row['imageurl']); ?>" alt="" style="width: 100%; border-radius: 10px; margin: 1rem 0;">
    <p style="line-height: 1.8;"><?php echo nl2br(htmlspecialchars($row['text'])); ?></p>
    <a href="index.php" style="display: inline-block; margin-top: 2rem;">⬅ بازگشت</a>

    <hr style="margin: 2rem 0;">

    <!-- نمایش نظرات -->
    <h3>نظرات کاربران</h3>
    <?php while ($c = mysqli_fetch_assoc($comments)): ?>
        <div class="comment-box">
            <strong><?php echo htmlspecialchars($c['name']); ?></strong><br>
            <small><?php echo $c['created_at']; ?></small>
            <p><?php echo nl2br(htmlspecialchars($c['comment'])); ?></p>
        </div>
    <?php endwhile; ?>

    <!-- فرم ارسال نظر -->
    <h4>ارسال نظر شما</h4>
    <form method="post">
        <input type="text" name="name" placeholder="نام شما" required>
        <textarea name="comment" placeholder="نظر خود را بنویسید..." required></textarea>
        <button type="submit" name="submit_comment">ارسال نظر</button>
    </form>
</div>

</body>
</html>

<?php
include("them-footer.html");
ob_end_flush(); // ⬅️ تمام خروجی رو ارسال می‌کنه
?>