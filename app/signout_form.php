<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>退会</title>
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

            <section class="section">
                <form method="post" action="" class="form">
                    <div class="form__header">
                        <h2 class="form__title">退会</h2>
                        <p class="form__description">退会を完了するためにはパスワードを入力してください。</p>
                        <div class="err-msg__area"></div>
                    </div>
                    <div class="form__body">
                        <div class="form__item">
                            <label for="password" class="form__label">パスワード</label>
                            <input type="password" name="password" class="form__input" id="password">
                            <span class="err-msg"></span>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="btn-container">
                            <input type="submit" value="退会する" class="btn btn--form">
                        </div>
                    </div>
                </form>

                <div class="link-container">
                    <a href="signout.php" class="page-link">戻る</a>
                </div>
            </section>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>