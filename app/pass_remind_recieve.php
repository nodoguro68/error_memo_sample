<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再発行</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="index.php" class="nav__link">トップページ</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">ユーザー登録</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">

            <form method="post" action="" class="form">
                <div class="form__header">
                    <h2 class="form__title">パスワード再発行</h2>
                    <p class="form__description">ご指定のメールアドレスにお送りした「パスワード再発行認証」メール内にある「認証キー」をご入力ください</p>
                    <div class="err-msg__area"></div>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="mail_address" class="form__label">認証キー</label>
                        <input type="text" name="auth_key" class="form__input" id="mail_address">
                        <span class="err-msg"></span>
                    </div>
                </div>
                <div class="form__footer">
                    <div class="btn-container">
                        <input type="submit" value="再発行" class="btn btn--form">
                    </div>
                </div>
            </form>

            <div class="link-container">
                <a href="pass_remind_send.php" class="link">＜パスワード再発行メールを再度送信する</a>
            </div>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>