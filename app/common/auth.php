<?php 

// ログインしている場合
if(!empty($_SESSION['user_id'])) {

    // ログイン期限を超えている場合 再度ログイン
    if($_SESSION['login_date'] + $_SESSION['login_limit'] < time()) {
        require_once 'logout.php';

    } else {
        // ログイン期限を超えていない場合 ログイン日時を更新
        $_SESSION['login_date'] = time();

        // 現在のページがログインページの場合
        if (basename($_SERVER['PHP_SELF']) === 'login.php') {
            // マイページに遷移
            header("Location:mypage.php");
        }
    }

} else {
    // ログインしていない場合

    // ログインページでなければログインページに遷移
    if(basename($_SERVER['PHP_SELF']) !== 'login.php') {
        // ログインページに遷移
        header('Location: login.php');
    }
}
