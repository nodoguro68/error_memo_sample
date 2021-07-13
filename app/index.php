<?php

require_once 'common/utility.php';
require_once 'common/auth.php';
require_once 'common/validation.php';
require_once 'action/category.php';

$user_id = (!empty($_SESSION['user_id'])) ? $_SESSION['user_id']: null;
$categories = (!empty($_SESSION['user_id'])) ? getCategories($err_msg, $user_id): null;



if (isset($_POST['register_category'])) {

    if (!empty($user_id)) {

        $category = filter_input(INPUT_POST, 'category');
        $err_msg = array();

        validMaxLen($err_msg, $category, 'category');

        if (empty($err_msg)) {

            registerCategory($err_msg, $user_id, $category);
        }
    } else {
        header('Location: login.php');
    }
}

if (isset($_POST['category_id'])) {

    if (!empty($user_id)) {

        $category_id = filter_input(INPUT_POST, 'category_id');
        $err_msg = array();

        if (empty($err_msg)) {

            deleteCategory($err_msg, (int)$category_id, $user_id);
        }
    } else {
        header('Location: login.php');
    }
}

?>

<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents-2column">
            <aside class="sidebar__area">

                <ul class="category-list">
                    <?php if (!empty($categories)) : ?>
                        <?php foreach ($categories as $category) : ?>
                            <li class="category-list__item">
                                <a href="index.php?category_id=<?= escape($category['category_id']); ?>" class="category-list__link"><?= escape($category['title']); ?></a>
                                <form method="post" action="" name="delete_category">
                                    <button type="submit" name="category_id" value="<?= escape($category['category_id']); ?>" class="btn-delete"><i class="far fa-trash-alt "></i></button>
                                </form>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <form method="post" action="" class="form-category">
                    <input type="text" name="category" class="form__input" placeholder="カテゴリーを追加">
                    <input type="submit" name="register_category" value="＋" class="btn-add-category">
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
                    <a href="memo_detail.php" class="link-register">＋</a>
                </div>

            </div>

        </div>
    </div>

    <div class="modal">
        <div class="modal__inner">
            <div class="modal__description">
                <span class="modal__category">カテゴリー</span>を削除してもよろしいですか？
                <p class="modal__note">※カテゴリー内のメモも一緒に削除されます</p>
            </div>
            <form method="post" class="btn-container">
                <button class="btn-modal btn-modal--cancel">キャンセル</button>
                <button type="submit" name="category_id" value="<?= escape($category_id); ?>" class="btn-modal btn-modal--delete">削除</button>
            </form>
        </div>
    </div>

    <div class="modal__bg"></div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>