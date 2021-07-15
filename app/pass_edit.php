<?php

require_once 'common/utility.php';
require_once 'common/auth.php';
require_once 'common/validation.php';
require_once 'common/mail.php';
require_once 'action/user.php';

$user_id = $_SESSION['user_id'];

if(!empty($_POST)){

    $password_old = filter_input(INPUT_POST,'password_old');
    $password_new = filter_input(INPUT_POST,'password_new');
    $password_re = filter_input(INPUT_POST,'password_re');

    validRequired($err_msg, $password_old, 'password_old');
    validRequired($err_msg, $password_new, 'password_new');
    validRequired($err_msg, $password_re, 'password_re');

    if(empty($err_msg)) {
        
        validPass($err_msg, $password_old, 'password_old');
        validPass($err_msg, $password_new, 'password_new');
        
        $user_data = getPassword($err_msg, $user_id);
        
        validOldPass($err_msg, $password_old, $user_data['password']);
        validNewPass($err_msg, $password_old, $password_new);
        validPassRe($err_msg,$password_new,$password_re, 'password_new');

        if(empty($err_msg)) {

            if(updatePass($err_msg, $user_id, $password_new)) {

                $user_data = getUser($err_msg, $user_id);

                $username = ($user_data['name']) ? $user_data['name'] : '名無し';
                $from = 'info@errormemo.com';
                $to = $user_data['mail_address'];
                $subject = 'パスワード変更通知｜エラーメモ';
                $comment = <<<EOT
{$username}　さん
パスワードが変更されました。
                      
////////////////////////////////////////
エラーメモ
URL  https://errormemo.com/
E-mail info@errormemo.com
////////////////////////////////////////
EOT;
                // sendMail($err_msg, $from, $to, $subject, $comment);

                header('Location: mypage.php');
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
                <h2 class="form__title">パスワード変更</h2>
                <div class="err-msg__area"><?= getErrMsg($err_msg, 'common'); ?></div>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="password" class="form__label">古いパスワード</label>
                    <input type="password" name="password_old" class="form__input" id="password" value="<?= getFormData('password_old'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg, 'password_old'); ?></span>
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">新しいパスワード<span class="form__note">半角英数字8文字以上</span></label>
                    <input type="password" name="password_new" class="form__input" id="password" value="<?= getFormData('password_new'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg, 'password_new'); ?></span>
                </div>
                <div class="form__item">
                    <label for="password_re" class="form__label">新しいパスワード（確認）</label>
                    <input type="password" name="password_re" class="form__input" id="password_re" value="<?= getFormData('password_re'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg, 'password_re'); ?></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="変更" class="btn btn--form">
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>