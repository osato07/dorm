<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HOME/自転車届</title>
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
        <img class="titleImage" src="../image/form/form-bicycle.png" alt="">
        <form action="../submit/gaihaku.php" method="post">
            <div class="form-group">
                <p for="number">自転車番号</p>
                <select name="number" id="number" required>
                    <option value="1">1</option>
                </select>
            </div>
            <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>">
            <input type="submit" value="借りる">
        </form>
    </div>
    <script src="../subsequence/slide_window/script.js"></script>
    <script src="../subsequence/submit_control.js"></script>
</body>
</html>