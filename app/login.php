<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
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

            <form action="" class="form">
                <div class="form__header">
                    <h2 class="form_title">ログイン</h2>
                    <span class="err-msg--common"></span>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="mail_address" class="form__label">メールアドレス</label>
                        <input type="text" name="mail_address" class="form__input" id="mail_address">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="password" class="form__label">パスワード<span class="form__note">8文字以上の英数字</span></label>
                        <input type="password" name="password" class="form__input" id="password">
                        <span class="err-msg"></span>
                        <a href="" class="form__link">パスワードを忘れた場合</a>
                    </div>
                </div>
                <div class="form__footer">
                    <label>
                        <input type="checkbox" name="" id="">自動でログイン
                    </label>
                    <input type="submit" value="ログイン" class="btn btn--form">
                </div>
            </form>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>