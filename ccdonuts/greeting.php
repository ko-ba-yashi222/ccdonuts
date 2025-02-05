<?php session_start(); ?>
    <div class="userGreeting">
        <?php
        // ログインしている場合、ユーザー名を表示
        if (isset($_SESSION['customers']['name'])) {
            echo 'ようこそ、' . htmlspecialchars($_SESSION['customers']['name'], ENT_QUOTES, 'UTF-8') . ' 様';
        } else {
            echo 'ようこそ、ゲスト様';
        }
?>
    </div>