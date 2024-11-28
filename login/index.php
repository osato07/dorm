<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HOME/ログイン</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../subsequence/slide_window/style.css">
    <link rel="stylesheet" href="../subsequence/form.css">
    <!-- iconのインポート先 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Webアプリ用の設定 -->
    <link rel="manifest" href="../manifest-green.json">
    <link rel="icon" href="https://rollcall.jp/image/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="main">
        <img class="topImage" src="../image/login/loginheader.jpg" alt="">
        <form action="" method="post">
            <div class="form-group">
                <p for="start_datetime">学籍番号</p>
                <input type="text" id="student_id" name="student_id" required>
            </div>
            <div class="form-group">
                <p for="end_datetime">パスワード</p>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="ログイン">
        </form>
        <img class="bottomImage" src="../image/login/kmcshadow.png" alt="">
    </div>
</body>
</html>