<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード変更</title>
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

            <form action="" class="form">
                <div class="form__header">
                    <h2 class="form_title">パスワード変更</h2>
                    <span class="err-msg--common"></span>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="password" class="form__label">古いパスワード</label>
                        <input type="password" name="password_old" class="form__input" id="password">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="password" class="form__label">新しいパスワード</label>
                        <input type="password" name="password_new" class="form__input" id="password">
                        <span class="err-msg"></span>
                    </div>
                    <div class="form__item">
                        <label for="password_re" class="form__label">新しいパスワード（確認）</label>
                        <input type="password" name="password_re" class="form__input" id="password_re">
                        <span class="err-msg"></span>
                    </div>
                </div>
                <div class="form__footer">
                    <input type="submit" value="変更" class="btn btn--form">
                </div>
            </form>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>