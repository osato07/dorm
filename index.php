<?php
session_start();

// セッションが有効か確認
if (isset($_SESSION['userId'])) {
    // セッションが有効な場合、ホームページにリダイレクト
    header("Location: https://rollcall.jp/dorm/home");
    exit();
} else {
    // セッションが無効な場合、ログインページにリダイレクト
    header("Location: https://rollcall.jp/login");
    exit();
}
?>