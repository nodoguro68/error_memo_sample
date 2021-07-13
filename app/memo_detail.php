<?php

require_once 'common/utility.php';
require_once 'common/validation.php';
require_once 'common/auth.php';

$user_id = $_SESSION['user_id'];
$category_id = (!empty($_POST['category_id'])) ? filter_input(INPUT_GET, 'category_id') : '';
$edit_flg = (empty($dbFormData)) ? false : true;

if (!empty($category_id) && empty($db_form_data)) {
}

if (!empty($_POST)) {

    $memo_data = $_POST['memo'];

    // $memo_data = array_filter($_POST['']);

    // 配列で送信される
    // どう受け取るか
    // 配列の数だけ変数を作る
    // foreachで回す
    // それぞれバリデーションする必要がある
    // 関数に渡すときは配列で渡す

    validRequired($err_msg, $memo_data['title'], 'title');

    if(empty($err_msg)){

        validMaxLen($err_msg, $memo_data['title'], 'title');
        validMaxLen($err_msg, $memo_data['solution'], 'solution');
    //     validMaxLen($err_msg, $memo_data['attempt'], 'attempt');
    //     validMaxLen($err_msg, $memo_data['reference'], 'reference');

        if(empty($err_msg)) {

            try {

                $dbh = dbConnect();
                $dbh->beginTransaction();

                if($edit_flg) {

                    // 編集

                } else {

                    // 登録 memosテーブルに登録した後、idを使ってattemptsテーブルとreferenciesテーブルに登録する
                    registerMemo($user_id, $category_id, $memo_data);
                    $memo_id = $dbh->lastInsertId();
                    // registerAttempt($memo_id, $memo_data['attempt']);
                    // registerReference($memo_id, $memo_data['reference']);
                }

            } catch(Exception $e) {
                $dbh->rollBack();
                error_log('エラー発生:' . $e->getMessage());
                $err_msg['common'] = ERR_MSG;
            }


        }
    } 
}
?>

<?php
require_once 'template/head.php';
require_once 'template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="contents">

            <form method="post" action="" class="form form--error-memo" name="memoForm">
                <div class="form__header">
                    <span class="category">カテゴリー</span>
                    <span class="date">2020/07/01</span>
                </div>
                <div class="form__body">
                    <div class="form__item">
                        <label for="title" class="form__label">タイトル</label>
                        <input type="text" name="memo[title]" id="title" class="form__input">
                        <span class="err-msg"><?= getErrMsg($err_msg, 'title'); ?></span>
                    </div>
                    <div class="form__item">
                        <label for="solution" class="form__label">解決方法</label>
                        <input type="text" name="memo[solution]" id="solution" class="form__input">
                        <span class="err-msg"><?= getErrMsg($err_msg, 'solution'); ?></span>
                    </div>
                    <div class="form__item">
                        <label for="attempt" class="form__label">試したこと</label>
                        <div class="form__input-wrapper js-input-wrapper">
                            <input type="text" name="memo[attempt][]" id="attempt" class="form__input">
                        </div>
                        <label for="add-attempt" class="btn__label">
                            <button type="button" class="btn--add js-btn-add-attempt" id="add-attempt">＋</button>
                            試したことを追加
                            <button type="button" class="btn--cancel js-btn-cancel-attempt">キャンセル</button>
                        </label>
                        <span class="err-msg"><?= getErrMsg($err_msg, 'mail_address'); ?></span>
                    </div>
                    <div class="form__item">
                        <label for="reference" class="form__label">参考</label>
                        <div class="form__input-wrapper js-input-wrapper">
                            <input type="text" name="memo[reference][]" id="reference" class="form__input">
                        </div>
                        <label for="add-reference" class="btn__label">
                            <button type="button" class="btn--add js-btn-add-reference" id="add-reference">＋</button>
                            参考を追加
                            <button type="button" class="btn--cancel js-btn-cancel-reference">キャンセル</button>
                        </label>
                        <span class="err-msg"><?= getErrMsg($err_msg, 'mail_address'); ?></span>
                    </div>
                    <div class="form__item">
                        <label for="etc" class="form__label">その他</label>
                        <textarea name="memo[etc]" id="etc" class="form__textarea"></textarea>
                        <span class="err-msg"><?= getErrMsg($err_msg, 'mail_address'); ?></span>
                    </div>
                </div>
                <div class="form__footer">
                    <div class="link-container">
                        <a href="" class="link">戻る</a>
                    </div>
                    <button type="button" class="btn btn--submit" id="saveBtn">保存</button>
                </div>
            </form>

        </div>
    </div>

</main>

<script src="../public/js/app.js"></script>
<script src="../resource/js/form.js"></script>
</body>

</html>