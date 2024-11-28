<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HOME/MYPAGE</title>
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
        <a href="../home"><img src="../image/nav/home.png" alt=""></a>
        <a href="../check"><img src="../image/nav/check.png" alt=""></a>
        <a href="" class="current"><img src="../image/nav/mypage.png" alt=""></a>
    </nav>
    <div id="main">
        <div class="top">
            <div class="info-header">
                <img src="" alt="">
                <div class="info">
                    <div class="info-top">
                        <p class="student_id">2326</p><p class="username">中本慧思</p>
                    </div>
                    <div class="info-bottom">
                        <div class="info-bottom-item">
                            <p class="info-bottom-item-caption">ユニット/部屋</p>
                            <p class="info-bottom-item-value">3-5/321</p>
                        </div>
                        <div class="info-bottom-item">
                            <p class="info-bottom-item-caption">電話番号</p>
                            <p class="info-bottom-item-value">08020205836</p>
                        </div>
                        <div class="info-bottom-item">
                            <p class="info-bottom-item-caption">親のEmail</p>
                            <p class="info-bottom-item-value">testexam@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="../bicycle" class="editbtn slideLink"><i class="fa-solid fa-pen-to-square"></i>プロフィールを編集</a>
        </div>
        <div class="spacer"></div>
        <div class="liststop">
            <div class="liststop-title"><img src="../image/mypage/approvewait.png" alt=""></div>
            <div class="liststop-approve-container"><div class="liststop-approve"><p>寮</p><p>保護者</p></div></div>
        </div>
        <div class="lists">
            <div class="listsitem">
                <img class="listsitem-image" src="../image/mypage/gaihaku.png" alt="">
                <div class="listsitem-info">
                    <p>2024/11/30/10:15-14:00</p>
                    <p>徳島駅,ショッピング</p>
                </div>
                <div class="listsitem-approve">
                    <img class="listsitem-approve-item" src="../image/mypage/check.png" alt="">
                    <img class="listsitem-approve-item" src="../image/mypage/check.png" alt="">
                </div>
            </div>
        </div>
        <div class="rollcall"></div>
    </div>
    <script src="../subsequence/slide_window/script.js"></script>
    <script src="../subsequence/submit_control.js"></script>
</body>
</html>