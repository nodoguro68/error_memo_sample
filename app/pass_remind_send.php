<?php

require_once 'common/utility.php';
require_once 'common/validation.php';
require_once 'common/mail.php';
require_once 'action/user.php';

if (!empty($_POST)) {

    $mail_address = filter_input(INPUT_POST, 'mail_address');
    validRequired($err_msg, $mail_address, 'mail_address');


    if (empty($err_msg)) {

        validMaxLen($err_msg, $mail_address, 'mail_address');
        validMail($err_msg, $mail_address);

        if (empty($err_msg)) {

            $result = getUserByMailAddress($err_msg, 'count(*) as count', $mail_address);

            if(!empty($result['count'])) {

                $auth_key = createRandomKey();

                $from = 'info@errormemo.com';
                $to = $mail_address;
                $subject = 'パスワード再発行認証';
                $contents = <<<EOT
本メールアドレス宛にパスワード再発行のご依頼がありました。
下記のURLにて認証キーをご入力頂くとパスワードが再発行されます。

パスワード再発行認証キー入力ページ：http://localhost:8888/error_memo/app/pass_remind_recieve.php
認証キー：{$auth_key}
※認証キーの有効期限は30分となります

認証キーを再発行されたい場合は下記ページより再度再発行をお願い致します。
http://localhost:8888/error_memo/app/pass_remind_send.php

////////////////////////////////////////
エラーメモ
URL  https://errormemo.com/
E-mail info@errormemo.com
////////////////////////////////////////
EOT;
    
                // sendMail($from, $to, $subject, $contents);
    
                $_SESSION['alert_msg'] = SUC_MSG_MAIL;
                $_SESSION['auth_key'] = $auth_key;
                $_SESSION['auth_mail_address'] = $mail_address;
                $_SESSION['auth_key_limit'] = time() + (60 * 30);
    
                header('Location: pass_remind_recieve.php');
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
                <p class="form__description">ご指定のメールアドレス宛にパスワード再発行用のURLと認証キーをお送り致します。</p>
                <span class="err-msg--common"><?= getErrMsg($err_msg, 'common'); ?></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="mail_address" class="form__label">メールアドレス</label>
                    <input type="text" name="mail_address" class="form__input" id="mail_address" value="<?= getFormData('mail_address'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg, 'mail_address'); ?></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="送信" class="btn btn--form">
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>