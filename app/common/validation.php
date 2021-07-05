<?php 

require_once 'message.php';

/**
 * 必須入力チェック
 * 
 * @param array $msg
 * @param string $str
 * @param string $key
 */
function validRequired(array $msg, string $str, string $key) {
    if(empty(trim($str))) {
        $msg[$key] = ERR_MSG_REQUIER;
    }
}
/**
 * 最大文字数チェック
 * 
 * @param array $msg
 * @param string $str
 * @param string $key
 * @param int $max
 */
function validMaxLen(array $msg, string $str, string $key, int $max = 256) {
    if(mb_strlen($str) > $max) {
        $msg[$key] = ERR_MSG_MAX_LEN;
    }
}
/**
 * 最小文字数チェック
 * 
 * @param array $msg
 * @param string $str
 * @param string $key
 * @param int $min
 */
function validMinLen(array $msg, string $str, string $key, int $min = 8) {
    if(mb_strlen($str) < $min) {
        $msg[$key] = ERR_MSG_MIN_LEN;
    }
}
/**
 * 半角英数字チェック
 * 
 * @param array $msg
 * @param string $str
 * @param string $key
 */
function validHalf(array $msg, string $str, string $key) {
    if(!preg_match("/^[a-zA-Z0-9]+$/", $str)) {
        $msg[$key] = ERR_MSG_HALF;
    }
}
/**
 * メールアドレス形式チェック
 * 
 * @param array $msg
 * @param string $mail
 * @param string $key
 */
function validMail(array $msg, string $mail, string $key) {
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)) {
        $msg[$key] = ERR_MSG_MAIL;
    }
}
/**
 * メールアドレス重複チェック
 * 
 * @param array $msg
 * @param string $mail
 * @param string $key
 */
function validMailDup(array $msg, string $mail_address, string $key) {

    $result = fetch(
        'SELECT count(*) FROM users WHERE mail_address = :mail_address AND delete_flg = 0',
        array(':mail_address' => $mail_address)
    );
    
    if(!empty(array_shift($result))) {
        $msg[$key] = ERR_MSG_MAIL_DUP;
    }
}
/**
 * パスワード再入力チェック
 * 
 * @param array $msg
 * @param string $pass
 * @param string $pass_re
 * @param string $key
 */
function validPassRe(array $msg, string $pass, string $pass_re, string $key) {
    if($pass !== $pass_re) {
        $msg[$key] = ERR_MSG_PASS_RE;
    }
}

