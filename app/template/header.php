<header class="header">
    <div class="header__inner">
        <h1 class="logo header__logo"><a href="index.php" class="logo__link">Error Memo</a></h1>
        <nav class="nav header__nav">
            <ul class="nav__menu">
                <li class="nav__item"><a href="index.php" class="nav__link">トップページ</a></li>
                <?php if(!empty($_SESSION['user_id'])): ?>
                    <li class="nav__item"><a href="mypage.php" class="nav__link">マイページ</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">ログアウト</a></li>
                <?php else: ?>
                    <li class="nav__item"><a href="signup.php" class="nav__link">ユーザー登録</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">ログイン</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>