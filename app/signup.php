<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="logo header__logo"><a href="index.php" class="logo__link">Error Memo</a></h1>
            <nav class="nav header__nav">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="index.php" class="nav__link">トップページ</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">ログイン</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">

            <form method="post" action="" class="form">
                <div class="form__header">
                    <h2 class="form__title">ユーザー登録</h2>
                    <div class="err-msg__area">エラー</div>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="username" class="form__label">ユーザーネーム</label>
                        <input type="text" name="username" class="form__input" id="username">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="mail_address" class="form__label">メールアドレス</label>
                        <input type="text" name="mail_address" class="form__input" id="mail_address">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="password" class="form__label">パスワード</label>
                        <input type="password" name="password" class="form__input" id="password">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="password_re" class="form__label">パスワード（確認）</label>
                        <input type="password" name="password_re" class="form__input" id="password_re">
                        <span class="err-msg"></span>
                    </div>
                </div>
                <div class="form__footer">
                    <div class="btn-container">
                        <input type="submit" value="登録" class="btn btn--form">
                    </div>
                </div>
            </form>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>