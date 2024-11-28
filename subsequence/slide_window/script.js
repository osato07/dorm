const slideLinks = document.querySelectorAll('.slideLink');

// 各リンクに対してイベントリスナーを設定
slideLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();  // デフォルトの遷移をキャンセル
        const targetUrl = e.currentTarget.href;  // 遷移先URLを取得
        const page = document.getElementById("main");

        // 現在のページをスライドアウト
        page.classList.add('body-slide-exit');
        setTimeout(() => {
            page.classList.add('body-slide-exit-active');
        }, 10);

        // スライドアウト後に新しいページへ遷移
        setTimeout(() => {
          window.location = targetUrl;
        }, 300); // 0.5秒後に遷移
    });
});

document.getElementById('backLink').addEventListener('click', function(e) {
    e.preventDefault();  // デフォルトの遷移をキャンセル
    const targetUrl = e.currentTarget.href;  // 遷移先URLを取得
    const page = document.getElementById("main");
    console.log(targetUrl);
  
    // 現在のページをスライドアウト（逆方向）
    page.classList.add('body-slideback-exit');
    setTimeout(() => {
      page.classList.add('body-slideback-exit-active');
    }, 10);
  
    // スライドアウト後に新しいページへ遷移
    setTimeout(() => {
      window.location = targetUrl;
    }, 300); // 0.5秒後に遷移
  });
  
  