<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
                <aside class="sidebar__area">

                    <ul class="category-list">
                        <li class="category-list__item">
                            <a href="" class="category-list__link">ダミー</a>
                            <button class="btn-delete"><i class="far fa-trash-alt "></i></button>
                        </li>
                        <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                        <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                        <li class="category-list__item"><a href="" class="category-list__link">ダミー</a></li>
                    </ul>

                    <form method="post" action="" class="form-category">
                        <input type="text" name="category" class="form__input" placeholder="カテゴリーを追加">
                        <input type="submit" value="＋" class="btn-add">
                    </form>

                </aside>

                <div class="main__area">

                    <form method="post" action="" class="form--search">
                        <input type="text" name="search" class="form__input">
                        <input type="submit" value="検索">
                    </form>

                    <ul class="list">
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                        <li class="list__item"><a href="" class="list__link">エラー<span class="date"></span></a></li>
                    </ul>

                    <ul class="pagenation-list">
                        <li class="pagenation-list__item"><a href="">&lt;</a></li>
                        <li class="pagenation-list__item"><a href="">&gt;</a></li>
                    </ul>

                    <div class="btn__link">
                        <a href="register_error-memo.php" class="link">＋</a>
                    </div>

                </div>

            </div>
        </div>

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>