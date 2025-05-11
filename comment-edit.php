<?php
session_start();
if (!isset($_SESSION["manager"])) {
    header("Location: index.php");
    exit();
}

      $link=mysqli_connect("localhost","root","","onenewsdb");  
        $result = mysqli_query($link, "DELETE FROM `news` WHERE `id`=$id");$id = intval($_GET["id"] ?? 0);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $comment = mysqli_real_escape_string($link, $_POST["comment"]);
    mysqli_query($link, "UPDATE comments SET comment='$comment' WHERE id=$id");
    header("Location: comment_manager.php");
    exit();
}

$result = mysqli_query($link, "SELECT * FROM comments WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-4">
    <h3>ویرایش نظر</h3>
    <form method="post">
        <div class="mb-3">
            <textarea name="comment" rows="5" class="form-control"><?php echo htmlspecialchars($row['comment']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">ذخیره تغییرات</button>
        <a href="comment_manager.php" class="btn btn-secondary">بازگشت</a>
    </form>
</div>

<?php
mysqli_close($link);
?>
