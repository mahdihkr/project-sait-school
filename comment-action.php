<?php
session_start();

if (!isset($_SESSION["manager"])) {
    header("Location: index.php");
    exit();
}

      $link=mysqli_connect("localhost","root","","onenewsdb");  
        $result = mysqli_query($link, "DELETE FROM `comments` WHERE 0");if (!$link) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}

$action = $_POST["action"] ?? $_GET["action"] ?? "";
$id = intval($_POST["id"] ?? $_GET["id"] ?? 0);

if ($action == "delete" && $id > 0) {
    $sql = "DELETE FROM comments WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    if ($stmt === false) {
        die("خطا در آماده‌سازی کوئری: " . mysqli_error($link));
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (!mysqli_stmt_execute($stmt)) {
        die("خطا در اجرای کوئری: " . mysqli_stmt_error($stmt));
    }
    mysqli_stmt_close($stmt);
} elseif ($action == "edit" && $id > 0) {
    $new_comment = mysqli_real_escape_string($link, $_POST["new_comment"]);
    $sql = "UPDATE comments SET comment = ? WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    if ($stmt === false) {
        die("خطا در آماده‌سازی کوئری: " . mysqli_error($link));
    }
    mysqli_stmt_bind_param($stmt, "si", $new_comment, $id);
    if (!mysqli_stmt_execute($stmt)) {
        die("خطا در اجرای کوئری: " . mysqli_stmt_error($stmt));
    }
    mysqli_stmt_close($stmt);
}

header("Location: comment-manager.php");
exit();