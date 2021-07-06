<?php 

/**
 * PDOを使ってDBに接続
 * @return PDO
 */
function dbConnect()
{
    $dsn = 'mysql:dbname=error_memo;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'root';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
    );

    try {
        $dbh = new PDO($dsn, $user, $password, $options);
        return $dbh;

    } catch(Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG_DB_CONNECT;
    }
}