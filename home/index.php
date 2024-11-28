<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DOME/HOME</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../subsequence/slide_window/style.css">
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
        <a href="" class="current"><img src="../image/nav/home.png" alt=""></a>
        <a href="../check"><img src="../image/nav/check.png" alt=""></a>
        <a href="../profile"><img src="../image/nav/mypage.png" alt=""></a>
    </nav>
    <!-- Body content -->
    <div id="main">

        <div class="rollcall_post">
            <div class="rollcall_post_info">
                <p class="info_subtitle">2024年11月25日(月)</p>
                <p class="info_title">本日の点呼</p>
                <div class="numbers_people"><p class="info_title">67/88</p><p class="info_subtitle">人</p></div>
                <div class="achieve_container"><div class="achieve"></div></div>
            </div>
            <img src="../image/home/homeItem.png" alt="">
        </div>
        <div class="todoke"><img src="../image/home/todoke.png" alt=""></div>
        <div class="buttons">
            <a href="../bicycle" class="bicycle_btnpost btnpost first_btnpost slideLink"><img src="../image/btnpost/bicycle_btnpost.png" alt=""></a>
            <a href="../gaisyutsu" class="gaisyutsu_btnpost btnpost slideLink"><img src="../image/btnpost/gaisyutsu_btnpost.png" alt=""></a>
            <a href="../gaihaku" class="gaihaku_btnpost btnpost slideLink"><img src="../image/btnpost/gaihaku_btnpost.png" alt=""></a>
            <a href="../luggage" class="luggage_btnpost btnpost slideLink"><img src="../image/btnpost/luggage_btnpost.png" alt=""></a>
            <a href="../equipment" class="equipment_btnpost btnpost slideLink"><img src="../image/btnpost/equipment_btnpost.png" alt=""></a>
        </div>
    </div>
    <script src="../subsequence/slide_window/script.js"></script>
</body>
</html>