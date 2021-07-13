<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents-2column contents-2column-reverse">

            <aside class="sidebar__area">
                <div class="sidebar__header">
                    <div class="img-container">
                        <img src="" alt="プロフィール画像" class="profile__img">
                    </div>
    
                    <div class="user-info-container">
                        <h3 class="username">ユーザー</h3>
                    </div>
                </div>

                <div class="sidebar__body">
                    <ul class="sidebar-list">
                        <li class="sidebar-list__item"><a href="profile.php" class="sidebar-list__link">プロフィール</a></li>
                        <li class="sidebar-list__item"><a href="pass_edit.php" class="sidebar-list__link">パスワード変更</a></li>
                        <li class="sidebar-list__item"><a href="signout.php" class="sidebar-list__link">退会</a></li>
                    </ul>
                </div>
            </aside>

            <div class="main__area">
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
            </div>

            <div class="link__container">
                <a href="memo_detail.php" class="link-register">＋</a>
            </div>

        </div>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>