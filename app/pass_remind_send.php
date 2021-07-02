<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" action="" class="form">
            <div class="form__header">
                <h2 class="form__title">パスワード再発行</h2>
                <p class="form__description">ご指定のメールアドレス宛にパスワード再発行用のURLと認証キーをお送り致します。</p>
                <span class="err-msg--common"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="mail_address" class="form__label">メールアドレス</label>
                    <input type="text" name="mail_address" class="form__input" id="mail_address">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="送信" class="btn btn--form">
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>