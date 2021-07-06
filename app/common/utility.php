<?php 

require_once 'database.php';

$err_msg = array();

/**
 * プリペアードステートメント
 * 
 * @param string $sql
 * @param array $params
 * @return object
 */
function execute(object $dbh, string $sql,array $params) {

    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);

    return $stmt;
}

/**
 * レコードを一行取得
 * 
 * @param string $sql
 * @param array $params
 * @return mixed
 */
function fetch(object $dbh, string $sql, array $params) {
    return $result = execute($dbh, $sql, $params)->fetch(PDO::FETCH_ASSOC);
}
/**
 * 全レコードを取得
 * 
 * @param string $sql
 * @param array $params
 * @return mixed
 */
function fetchAll(object $dbh, string $sql, array $params) {
    return execute($dbh, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
}

// エラーログ
ini_set('log_errors', 'on');
ini_set('error_log', '../../php.log');
ini_set('display_errors', "On");

// セッション
session_start();
session_regenerate_id();

/**
 * エスケープ処理
 * @param string $str
 * @return str
 */
function escape($str) {
    return htmlspecialchars($str,ENT_QUOTES);
}

/**
 * エラーメッセージ表示
 * 
 * @param array $err_msg
 * @param string $key
 * @return array
 */
function getErrMsg(&$err_msg, string $key) {
    if(!empty($err_msg[$key])) {
        return $err_msg[$key];
    }
}

/**
 * フォームの入力保持
 * 
 * @param string $key
 * @param bool $flg
 */
function getFormData(string $key, $flg = false) {
    if($flg) {
        $method = $_GET;
    } else {
        $method = $_POST;
    }
    if(!empty($method[$key])) {
        return escape($method[$key]);
    }
}