<?php

require_once 'common/utility.php';
require_once 'common/auth.php';

?>

<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" action="" class="form">
            <div class="form__header">
                <h2 class="form__title">パスワード変更</h2>
                <div class="err-msg__area"></div>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="password" class="form__label">古いパスワード</label>
                    <input type="password" name="password_old" class="form__input" id="password">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">新しいパスワード<span class="form__note">半角英数字8文字以上</span></label>
                    <input type="password" name="password_new" class="form__input" id="password">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="password_re" class="form__label">新しいパスワード（確認）</label>
                    <input type="password" name="password_re" class="form__input" id="password_re">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="変更" class="btn btn--form">
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>