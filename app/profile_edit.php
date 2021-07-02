<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール編集</title>
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
                <form method="post" action="" class="form form--profile">
                    <div class="form__header">
                        <h2 class="form__title">プロフィール編集</h2>
                        <div class="err-msg__area"></div>
                    </div>
                    <div class="form__body">
                        <div class="form__item form__item-img">
                            <input type="file" name="profile_img" class="form__input-file">
                            <img src="" alt="プロフィール画像" class="form__preview">
                            <input type="hidden" name="MAX_FILE_SIZE">
                        </div>
                        <div class="form__item">
                            <label for="username" class="form__label">ユーザーネーム</label>
                            <input type="text" name="username" class="form__input" id="username">
                            <span class="err-msg"></span>
                        </div>
                        <div class="form__item">
                            <label for="mail_address" class="form__label">メールアドレス</label>
                            <input type="email" name="mail_address" class="form__input" id="mail_address">
                            <span class="err-msg"></span>
                        </div>
                        <div class="form__item">
                            <label for="github" class="form__label">githubアカウント</label>
                            <input type="text" name="github" class="form__input" id="github">
                            <span class="err-msg"></span>
                        </div>
                        <div class="form__item">
                            <label for="twitter" class="form__label">twitterアカウント</label>
                            <input type="text" name="twitter" class="form__input" id="twitter">
                            <span class="err-msg"></span>
                        </div>
                        <div class="form__item">
                            <label for="qiita" class="form__label">qiitaアカウント</label>
                            <input type="text" name="qiita" class="form__input" id="qiita">
                            <span class="err-msg"></span>
                        </div>
                        <div class="form__item">
                            <label for="blog" class="form__label">ブログURL</label>
                            <input type="text" name="blog" class="form__input" id="blog">
                            <span class="err-msg"></span>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="btn-container">
                            <input type="submit" value="変更" class="btn btn--form">
                        </div>
                    </div>
                </form>

                <div class="link-container">
                    <a href="" class="">＜マイページへ戻る</a>
                </div>

            </section>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>