<?php

/**
 * ユーザー登録
 * 
 * @param array $err_msg
 * @param string $user_name
 * @param string $mail_address
 * @param string $password
 */
function registerUser(&$err_msg, string $user_name, string $mail_address, string $password)
{

    try {
        $dbh = dbConnect();
    
        $sql = 'INSERT INTO users (name, mail_address, password, login_time, created_at) VALUES(:name, :mail_address, :password, :login_time, :created_at)';
    
        $data = array(
            ':name' => $user_name,
            ':mail_address' => $mail_address,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':login_time' => date('Y-m-d H:i:s'),
            ':created_at' => date('Y-m-d H:i:s'),
        );
    
        if (execute($dbh, $sql, $data)) {
    
            // セッション
            $session_limit = 60 * 60;
            $_SESSION['login_date'] = time();
            $_SESSION['login_limit'] = $session_limit;
    
            // ユーザーIDを格納
            $_SESSION['user_id'] = $dbh->lastInsertId();
    
        } 
        
    } catch (Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}

/**
 * メールアドレスを使ってユーザーのデータを取得
 * 
 * @param array $err_msg
 * @param string $column
 * @param string $mail_address
 * @return mixed
 */
function getUserByMailAddress(&$err_msg, string $column ,string $mail_address) {

    try {

        $dbh = dbConnect();

        $sql = 'SELECT '. $column .' FROM users WHERE mail_address = :mail_address';
        $data = array(':mail_address' => $mail_address);

        $user_data = fetch($dbh, $sql, $data);
        return $user_data;

    } catch(Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}
/**
 * ログイン
 * 
 * @param array $err_msg
 * @param string $mail_address
 * @param string $password
 * @param bool $pass_save
 * @return 
 */

function login(&$err_msg, string $mail_address, string $password, bool $pass_save) {

    $user_data = getUserByMailAddress($err_msg, 'user_id,password' ,$mail_address);

    if (!empty($user_data) && password_verify($password, $user_data['password'])) {

        // セッション
        $session_limit = 60 * 60;
        $_SESSION['login_date'] = time();
        $_SESSION['user_id'] = $user_data['user_id'];

        if ($pass_save) {
            $_SESSION['login_limit'] = $session_limit * 24 * 30;
        } else {
            $_SESSION['login_limit'] = $session_limit;
        }
    } else {
        $err_msg['common'] = ERR_MSG_LOGIN;
    }
}

/**
 * ユーザー情報取得
 * 
 * @param array $err_msg
 * @param int $user_id
 * @return mixed
 */
function getUser(&$err_msg,int $user_id) {
    try {

        $dbh = dbConnect();

        $sql = 'SELECT user_id,name,mail_address,created_at FROM users WHERE user_id = :user_id';
        $data = array(':user_id' => $user_id);

        $user_data = fetch($dbh, $sql, $data);
        return $user_data;

    } catch (Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}
/**
 * パスワード取得
 * 
 * @param array $err_msg
 * @param int $user_id
 * @return mixed
 */
function getPassword(&$err_msg,int $user_id) {
    try {

        $dbh = dbConnect();

        $sql = 'SELECT password FROM users WHERE user_id = :user_id';
        $data = array(':user_id' => $user_id);

        $user_data = fetch($dbh, $sql, $data);
        return $user_data;

    } catch (Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}

/**
 * パスワード変更
 * 
 * @param array $err_msg
 * @param int $user_id
 * @param string $password_new
 * @return bool
 */
function updatePass(&$err_msg, int $user_id, string $password_new) {
    try {

        $dbh = dbConnect();

        $sql = 'UPDATE users SET password = :password WHERE user_id = :user_id';
        $data = array(
            ':user_id' => $user_id,
            ':password' => password_hash($password_new, PASSWORD_DEFAULT),
        );

        return execute($dbh, $sql, $data);

    } catch (Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}

/**
 * パスワード再発行
 * 
 * @param array $err_msg
 * @param string $mail_address
 * @param string $password
 * @return bool
 */
function reissuePass(&$err_msg, string $mail_address, string $password)
{
    try {

        $dbh = dbConnect();

        $sql = 'UPDATE users SET password = :password WHERE mail_address = :mail_address';
        $data = array(
            ':mail_address' => $mail_address,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
        );

        return execute($dbh, $sql, $data);

    } catch (Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}