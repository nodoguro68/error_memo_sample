<?php 

require_once 'database.php';

/**
 * プリペアードステートメント
 * 
 * @param string $sql
 * @param array $params
 * @return object
 */
function execute($sql,$params = array()) {
    $dbh = dbConnect();

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
function fetch($sql, $params = array()) {
    return $result = execute($sql, $params)->fetch(PDO::FETCH_ASSOC);
}
/**
 * 全レコードを取得
 * 
 * @param string $sql
 * @param array $params
 * @return mixed
 */
function fetchAll($sql, $params = array()) {
    return execute($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
}

// エラーログ
ini_set('log_errors', 'on');
ini_set('error_log', '../php.log');

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