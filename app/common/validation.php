<?php 

require_once 'message.php';

/**
 * 必須入力チェック
 * 
 * @param array $err_msg
 * @param string $str
 * @param string $key
 */
function validRequired(&$err_msg, string $str, string $key) {
    if(empty(trim($str))) {
        $err_msg[$key] = ERR_MSG_REQUIER;
    }
}
/**
 * 最大文字数チェック
 * 
 * @param array $err_msg
 * @param string $str
 * @param string $key
 * @param int $max
 */
function validMaxLen(&$err_msg, string $str, string $key, int $max = 256) {
    if(mb_strlen($str) > $max) {
        $err_msg[$key] = $max.ERR_MSG_MAX_LEN;
    }
}
/**
 * 最小文字数チェック
 * 
 * @param array $err_msg
 * @param string $str
 * @param string $key
 * @param int $min
 */
function validMinLen(&$err_msg, string $str, string $key, int $min = 8) {
    if(mb_strlen($str) < $min) {
        $err_msg[$key] = $min.ERR_MSG_MIN_LEN;
    }
}
/**
 * 半角英数字チェック
 * 
 * @param array $err_msg
 * @param string $str
 * @param string $key
 */
function validHalf(&$err_msg, string $str, string $key) {
    if(!preg_match("/^[a-zA-Z0-9]+$/", $str)) {
        $err_msg[$key] = ERR_MSG_HALF;
    }
}
/**
 * メールアドレス形式チェック
 * 
 * @param array $err_msg
 * @param string $mail
 */
function validMail(&$err_msg, string $mail) {
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)) {
        $err_msg['mail_address'] = ERR_MSG_MAIL;
    }
}
/**
 * メールアドレス重複チェック
 * 
 * @param array $err_msg
 * @param string $mail
 */
function validMailDup(&$err_msg, string $mail_address) {

    $dbh = dbConnect();

    $result = fetch(
        $dbh,
        'SELECT count(*) FROM users WHERE mail_address = :mail_address AND delete_flg = 0',
        array(':mail_address' => $mail_address)
    );
    
    if(!empty(array_shift($result))) {
        $err_msg['mail_address'] = ERR_MSG_MAIL_DUP;
    }
}
/**
 * パスワード再入力チェック
 * 
 * @param array $err_msg
 * @param string $pass
 * @param string $pass_re
 */
function validPassRe(&$err_msg, string $pass, string $pass_re) {
    if($pass !== $pass_re) {
        $err_msg['password'] = ERR_MSG_PASS_RE;
    }
}

