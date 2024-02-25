import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

(function () {
    // アラートを削除するボタンを設置
    const alert_button = document.querySelectorAll('.alert-close');
    alert_button.forEach(element => {
        // 要素にクリックイベントを追加
        element.addEventListener('click', () => {
            // 親ノードを取得し、親ノードを削除
            const alert_message = element.parentNode;
            alert_message.remove();
        });
    });
}());