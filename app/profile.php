<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="index.php" class="nav__link">トップページ</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">ログアウト</a></li>
                    <li class="nav__item"><a href="mypage.php" class="nav__link">マイページ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">

            <section class="profile">
                <h2 class="title">プロフィール</h2>
                <ul class="profile-list">
                    <li class="profile-list__item--img">
                        <img src="" alt="">
                    </li>
                    <li class="profile-list__item">
                        ユーザーネーム
                    </li>
                    <li class="profile-list__item">
                        メールアドレス
                    </li>
                    <li class="profile-list__item">
                        github
                        <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                    </li>
                    <li class="profile-list__item">
                        twitter
                        <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                    </li>
                    <li class="profile-list__item">
                        qiita
                        <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                    </li>
                    <li class="profile-list__item">
                        blog
                        <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                    </li>
                </ul>

                <div class="link-container">
                    <a href="profile_edit.php">編集する</a>
                </div>

            </section>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>