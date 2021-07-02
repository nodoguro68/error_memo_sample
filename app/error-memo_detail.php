<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents">

            <form method="post" action="" class="form form--error-memo">
                <div class="form__header">
                    <span class="date">2020/07/01</span>
                    <span class="category">カテゴリー</span>
                </div>
                <div class="form__main">
                    <div class="form__item">
                        <label for="title" class="form__label">タイトル</label>
                        <input type="text" name="title" id="title" class="form__input">
                    </div>
                    <div class="form__item">
                        <label for="solution" class="form__label">解決方法</label>
                        <input type="text" name="solution" id="solution" class="form__input">
                    </div>
                    <div class="form__item">
                        <label for="attempt" class="form__label">試したこと</label>
                        <input type="text" name="attempt" id="attempt" class="form__input">
                        <button class="btn--add">＋</button>
                    </div>
                    <div class="form__item">
                        <label for="reference" class="form__label">参考</label>
                        <input type="text" name="reference" id="reference" class="form__input">
                        <button class="btn--add">＋</button>
                    </div>
                    <div class="form__item">
                        <label for="etc" class="form__label">その他</label>
                        <textarea name="etc" id="etc" class="form__textarea"></textarea>
                    </div>
                </div>
                <div class="form__footer">
                    <div class="link-container">
                        <a href="" class="link">戻る</a>
                    </div>
                    <input type="submit" value="保存" class="btn btn--submit">
                </div>
            </form>

        </div>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>