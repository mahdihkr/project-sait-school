<?php
session_start();

if (!isset($_SESSION["manager"])) {
    header("Location: index.php");
    exit();
}

$link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
if (!$link) {
    die("خطا در اتصال به پایگاه داده.");
}

$action = $_POST["action"] ?? $_GET["action"] ?? "";
$id = intval($_POST["id"] ?? $_GET["id"] ?? 0);

if ($action == "delete" && $id > 0) {
    $sql = "DELETE FROM comments WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
} elseif ($action == "edit" && $id > 0) {
    $new_comment = mysqli_real_escape_string($link, $_POST["new_comment"]);
    $sql = "UPDATE comments SET comment = ? WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "si", $new_comment, $id);
    mysqli_stmt_execute($stmt);
}

header("Location: comment-manager.php");
exit();