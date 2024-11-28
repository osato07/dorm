document.addEventListener('DOMContentLoaded', () => {
    // 全ての送信ボタンの状態をリセット
    const allSubmitButtons = document.querySelectorAll('input[type="submit"]');
    allSubmitButtons.forEach(button => {
        button.disabled = false; // 初期状態は有効
    });

    // 外出・外泊フォームの送信制御
    const forms = document.querySelectorAll('form');

    function handleFormSubmit(event) {
        event.preventDefault(); // イベントのデフォルト動作を停止
        const form = event.target;
        const submitButton = form.querySelector('input[type="submit"]');

        // 送信ボタンを無効化
        if (submitButton) {
            submitButton.disabled = true; // ボタンを無効化
            submitButton.value = '送信中...'; // ボタンのテキストを更新
        }

        // フォームを手動で送信
        setTimeout(() => {
            form.submit(); // 実際の送信処理
        }, 100); // 小さな遅延を設けて視覚的フィードバックを確認
    }

    // 全てのフォームに送信イベントリスナーを追加
    forms.forEach(form => {
        form.addEventListener('submit', handleFormSubmit);
    });
});