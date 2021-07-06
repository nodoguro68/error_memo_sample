<?php

// require '../common/database.php';

/**
 * ユーザー登録
 * 
 * @param string $user_name
 * @param string $mail_address
 * @param string $password
 */
function registerUser(string $user_name, string $mail_address, string $password)
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