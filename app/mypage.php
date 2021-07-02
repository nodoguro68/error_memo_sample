<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="index.php" class="nav__link">トップページ</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">

            <div class="contents">

                <div class="contents__header">
                    <div class="img-container">
                        <img src="" alt="プロフィール画像" class="profile__img">
                    </div>

                    <div class="user-info-container">
                        <h3 class="username">ユーザーさん</h3>
                    </div>
                </div>

                <form method="post" action="" class="form-container">

                    <div class="form-search">
                        <input type="text" name="search" class="form__input">
                        <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                    </div>

                    <select name="select" id="" class="selectbox">
                        <option value="" class="">新しい順</option>
                        <option value="" class="">古い順</option>
                    </select>

                </form>

                <ul class="list">
                    <li class="list__item"><span class="category">カテゴリー</span><a href="" class="list__link">エラー<span class="date"></span></a></li>
                    <li class="list__item"><span class="category">カテゴリー</span><a href="" class="list__link">エラー<span class="date"></span></a></li>
                    <li class="list__item"><span class="category">カテゴリー</span><a href="" class="list__link">エラー<span class="date"></span></a></li>
                    <li class="list__item"><span class="category">カテゴリー</span><a href="" class="list__link">エラー<span class="date"></span></a></li>
                    <li class="list__item"><span class="category">カテゴリー</span><a href="" class="list__link">エラー<span class="date"></span></a></li>
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

    </main>

    <script src="../public/js/app.js"></script>
</body>

</html>