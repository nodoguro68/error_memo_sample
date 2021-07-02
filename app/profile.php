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

            <section class="profile-list">
                <div class="profile-list__header">
                    <h2 class="title">プロフィール</h2>
                </div>
                <div class="profile-list__body">
                    <ul class="profile-list__menu">
                        <li class="profile-list__item">
                            <img src="" alt="プロフィール画像" class="profile-list__img">
                        </li>
                        <li class="profile-list__item">
                            <span>ユーザーネーム</span>
                        </li>
                        <li class="profile-list__item">
                            <span>メールアドレス</span>
                        </li>
                        <li class="profile-list__item">
                            <span>githubアカウント</span>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="profile-list__link">aaaaaaaaaaaa</a>
                        </li>
                        <li class="profile-list__item">
                            <span>twitterアカウント</span>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="profile-list__link">aaaaaaaaaaaa</a>
                        </li>
                        <li class="profile-list__item">
                            <span>qiitaアカウント</span>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="profile-list__link">aaaaaaaaaaaa</a>
                        </li>
                        <li class="profile-list__item">
                            <span>ブログURL</span>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="profile-list__link">aaaaaaaaaaaa</a>
                        </li>
                    </ul>
                </div>
                <div class="profile-list__footer">
                    <div class="link-container">
                        <a href="profile_edit.php" class="btn btn-edit">編集する</a>
                    </div>
                </div>

            </section>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>