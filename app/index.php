<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents-2column">
            <aside class="sidebar__area">

                <ul class="category-list">
                    <li class="category-list__item">
                        <a href="" class="category-list__link">ダミー</a>
                        <button class="btn-delete"><i class="far fa-trash-alt "></i></button>
                    </li>
                    <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                    <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                    <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                </ul>

                <form method="post" action="" class="form-category">
                    <input type="text" name="category" class="form__input" placeholder="カテゴリーを追加">
                    <input type="submit" value="＋" class="btn-add-category">
                </form>

            </aside>

            <div class="main__area">

                <form method="post" action="" class="form-search">
                    <input type="text" name="search" class="form__input">
                    <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                </form>

                <ul class="error-list">
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date">2020/02/15</span></a></li>
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date"></span></a></li>
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date"></span></a></li>
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date"></span></a></li>
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date"></span></a></li>
                    <li class="error-list__item"><a href="" class="error-list__link">エラー<span class="error-list__date"></span></a></li>
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
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>