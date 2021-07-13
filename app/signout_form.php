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

        <section class="section">
            <form method="post" action="" class="form">
                <div class="form__header">
                    <h2 class="form__title">退会</h2>
                    <p class="form__description">退会を完了するためにはパスワードを入力してください。</p>
                    <div class="err-msg__area"></div>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="password" class="form__label">パスワード</label>
                        <input type="password" name="password" class="form__input" id="password">
                        <span class="err-msg"></span>
                    </div>
                </div>
                <div class="form__footer">
                    <div class="btn-container">
                        <input type="submit" value="退会する" class="btn btn--form">
                    </div>
                </div>
            </form>

            <div class="link-container">
                <a href="signout.php" class="page-link">戻る</a>
            </div>
        </section>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>