<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HOME/外出届</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../subsequence/slide_window/style.css">
    <link rel="stylesheet" href="../subsequence/form.css">
    <!-- iconのインポート先 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Webアプリ用の設定 -->
    <link rel="manifest" href="../manifest.json">
    <link rel="icon" href="https://rollcall.jp/image/favicon.ico" type="image/x-icon">
    <script>
    (function(d) {
        var config = {
        kitId: 'yid2rgc',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
</head>
<body>
    <!-- header画像 -->
    <div class="header">
        <img src="../image/header-img.png" alt="header-image">
    </div>
    <!-- navigation bar -->
    <nav>
        <a href="../home" class="current"><img src="../image/nav/home.png" alt=""></a>
        <a href="../check"><img src="../image/nav/check.png" alt=""></a>
        <a href="../profile"><img src="../image/nav/mypage.png" alt=""></a>
    </nav>
    <div id="main">
        <a href="../home" id="backLink"><img src="../image/backLink.png" alt=""></a>
        <img class="titleImage" src="../image/form/form-gaisyutsu.png" alt="">
        <form action="../submit/gaisyutsu.php" method="post">
            <div class="form-group">
                <p for="start_datetime">出発時間</p>
                <input type="datetime-local" id="start_datetime" name="start_datetime" required>
            </div>
            <div class="form-group">
                <p for="end_datetime">帰寮時間</p>
                <input type="datetime-local" id="end_datetime" name="end_datetime" required>
            </div>
            <div class="form-group">
                <p for="class">外出時間と被る授業名</p>
                <input type="text" id="class" name="class" value="なし" required>
            </div>
            <div class="form-group">
                <p for="place">行き先</p>
                <input type="text" id="place" name="place" required>
            </div>
            <div class="form-group">
                <p for="description">目的・備考</p>
                <textarea id="description" name="description" placeholder="例）SP活動、のような特別なもの"></textarea>
            </div>
            <input type="hidden" name="username" value="<?php echo $user['username']; ?>">
            <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>">
            <input type="hidden" name="email" value="<?php echo $user['parentEmail']; ?>">
            <input type="submit" value="送信">
        </form>
    </div>
    <script src="../subsequence/slide_window/script.js"></script>
    <script src="../subsequence/submit_control.js"></script>
    <script>

        // 【日付のminを二日後に指定】
        // 現在の日付を取得し、2日後の午前0時を設定
        const twoDaysLater = new Date();
        twoDaysLater.setDate(twoDaysLater.getDate() + 2); // 2日後の日付に設定
        twoDaysLater.setHours(0, 0, 0, 0); // 時間を00:00に設定
        // タイムゾーンのオフセットを取得し、ミリ秒に変換
        const timezoneOffset = twoDaysLater.getTimezoneOffset() * 60000;
        // ローカルタイムゾーンの日付をISO形式で取得
        const localDateISO = new Date(twoDaysLater.getTime() - timezoneOffset).toISOString().substring(0, 16);
        // 各input要素にmin属性を設定
        document.getElementById('start_datetime').min = localDateISO;
        document.getElementById('end_datetime').min = localDateISO;
    </script>
</body>
</html>