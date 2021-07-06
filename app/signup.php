<?php 

require_once 'common/utility.php';
require_once 'common/validation.php';
require_once 'action/user.php';


if(!empty($_POST)) {
    
    $user_name = filter_input(INPUT_POST,'user_name');
    $mail_address = filter_input(INPUT_POST,'mail_address');
    $password = filter_input(INPUT_POST,'password');
    $password_re = filter_input(INPUT_POST,'password_re');
    
    $err_msg = array();

    validRequired($err_msg, $user_name, 'user_name');
    validRequired($err_msg, $mail_address, 'mail_address');
    validRequired($err_msg, $password, 'password');
    validRequired($err_msg, $password_re, 'password_re');
    
    
    if(empty($err_msg)) {
        validMaxLen($err_msg,$user_name,'user_name');
        validMaxLen($err_msg, $mail_address, 'mail_address');
        validMaxLen($err_msg, $password, 'password');
        validMinLen($err_msg, $password, 'password');
        
        validMail($err_msg, $mail_address);
        validMailDup($err_msg, $mail_address);
        
        validPassRe($err_msg,$password,$password_re);
        validHalf($err_msg, $password, 'password');

        if(empty($err_msg)) {

            registerUser($user_name, $mail_address, $password);

            // リダイレクト マイページ
            header('Location: mypage.php');

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
                <h2 class="form__title">ユーザー登録</h2>
                <div class="err-msg__area"><?= getErrMsg($err_msg,'common'); ?></div>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="user_name" class="form__label">ユーザーネーム</label>
                    <input type="text" name="user_name" class="form__input" id="user_name" value="<?= getFormData('user_name'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg,'user_name'); ?></span>
                </div>
                <div class="form__item">
                    <label for="mail_address" class="form__label">メールアドレス</label>
                    <input type="text" name="mail_address" class="form__input" id="mail_address" value="<?= getFormData('mail_address'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg,'mail_address'); ?></span>
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">パスワード<span class="form__note">半角英数字8文字以上</span></label>
                    <input type="password" name="password" class="form__input" id="password" value="<?= getFormData('password'); ?>">
                    <span class="err-msg"><?= getErrMsg($err_msg,'password'); ?></span>
                </div>
                <div class="form__item">
                    <label for="password_re" class="form__label">パスワード（確認）</label>
                    <input type="password" name="password_re" class="form__input" id="password_re" value="<?= getFormData('password_re'); ?>">
                    <span class="err-msg"><?php if(!empty($err_msg['password_re'])) echo $err_msg['password_re']; ?></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="登録" class="btn btn--form">
                </div>
            </div>
        </form>
    </div>

</main>

<script src="../public/js/app.js"></script>
</body>

</html>