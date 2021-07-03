<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents">

            <div class="contents__header">
                <div class="img-container">
                    <img src="" alt="プロフィール画像" class="profile__img">
                </div>

                <div class="user-info-container">
                    <h3 class="username">ユーザーさん</h3>
                </div>
            </div>

            <form method="post" action="" class="form-container">

                <div class="form-search">
                    <input type="text" name="search" class="form__input">
                    <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                </div>

                <select name="select" id="" class="selectbox">
                    <option value="" class="">新しい順</option>
                    <option value="" class="">古い順</option>
                </select>

            </form>

            <ul class="error-list error-list-mypage">
                <li class="error-list__item">
                    <a href="" class="error-list__link">
                        <span class="error-list__category">カテゴリー</span>
                        エラー
                        <span class="error-list__date">2020/12/11</span>
                    </a>
                </li>
            </ul>

            <ul class="pagenation-list">
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">&lt;&lt;</a></li>
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">&lt;</a></li>
                <li class="pagenation-list__item pagenation-list__item-active"><a href="" class="pagenation-list__link">1</a></li>
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">2</a></li>
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">3</a></li>
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">&gt;</a></li>
                <li class="pagenation-list__item"><a href="" class="pagenation-list__link">&gt;&gt;</a></li>
            </ul>

            <div class="link__container">
                <a href="register_error-memo.php" class="link-register">＋</a>
            </div>

        </div>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>