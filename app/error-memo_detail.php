<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エラーメモ</title>
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

            <div class="contents">

                <form method="post" action="" class="form form--error-memo">
                    <div class="form__header">
                        <span class="date">2020/07/01</span>
                        <span class="category">カテゴリー</span>
                    </div>
                    <div class="form__main">
                        <div class="form__item">
                            <label for="title" class="form__label">タイトル</label>
                            <input type="text" name="title" id="title" class="form__input">
                        </div>
                        <div class="form__item">
                            <label for="solution" class="form__label">解決方法</label>
                            <input type="text" name="solution" id="solution" class="form__input">
                        </div>
                        <div class="form__item">
                            <label for="attempt" class="form__label">試したこと</label>
                            <input type="text" name="attempt" id="attempt" class="form__input">
                            <button class="btn--add">＋</button>
                        </div>
                        <div class="form__item">
                            <label for="reference" class="form__label">参考</label>
                            <input type="text" name="reference" id="reference" class="form__input">
                            <button class="btn--add">＋</button>
                        </div>
                        <div class="form__item">
                            <label for="etc" class="form__label">その他</label>
                            <textarea name="etc" id="etc" class="form__textarea"></textarea>
                        </div>
                    </div>
                    <div class="form__footer">
                        <div class="link-container">
                            <a href="" class="link">戻る</a>
                        </div>
                        <input type="submit" value="保存" class="btn btn--submit">
                    </div>
                </form>

            </div>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>