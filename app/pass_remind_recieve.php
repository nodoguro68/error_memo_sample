<?php

require_once 'common/utility.php';
require_once 'common/validation.php';
require_once 'common/mail.php';
require_once 'action/user.php';

if (empty($_SESSION['auth_key'])) {
    header("Location: pass_remind_send.php");
}

if (!empty($_POST)) {

    $auth_key = filter_input(INPUT_POST, 'auth_key_token');
    validRequired($err_msg, $auth_key, 'auth_key_token');

    if (empty($err_msg)) {

        validHalf($err_msg, $auth_key, 'auth_key_token');
        validAuthKeyLimit($err_msg, $_SESSION['auth_key_limit']);
        validMatch($err_msg, $auth_key, $_SESSION['auth_key']);
        validLength($err_msg, $auth_key, 'auth_key_token');

        if (empty($err_msg)) {

            $password = createRandomKey();

            if (reissuePass($err_msg, $_SESSION['auth_mail_address'], $password)) {

                $from = 'info@errormemo.com';
                $to = $_SESSION['auth_mail_address'];
                $subject = 'パスワード再発行完了';
                $contents = <<<EOT
本メールアドレス宛にパスワードの再発行を致しました。
下記のURLにて再発行パスワードをご入力頂き、ログインください。

ログインページ：http://localhost:8888/error_memo/app/login.php
再発行パスワード：{$password}
※ログイン後、パスワードのご変更をお願い致します

////////////////////////////////////////
エラーメモ
URL  https://errormemo.com/
E-mail info@errormemo.com
////////////////////////////////////////
EOT;

                // sendMail($from, $to, $subject, $comment);
                session_unset();
    
                // header('Location: login.php');
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

        <form method="post" action="" class="form">
            <div class="form__header">
                <h2 class="form__title">パスワード再発行</h2>
                <p class="form__description">ご指定のメールアドレスにお送りした「パスワード再発行認証」メール内にある「認証キー」をご入力ください</p>
                <div class="err-msg__area"><?= getErrMsg($err_msg, 'common'); ?></div>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="auth_key_token" class="form__label">認証キー</label>
                    <input type="text" name="auth_key_token" class="form__input" id="auth_key_token" value="<?= getFormData('auth_key_token'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg, 'auth_key_token'); ?></span>
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