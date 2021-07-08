<?php 

/**
 * カテゴリー登録
 * 
 * @param array $err_msg
 * @param int $user_id
 * @param string $category
 */
function registerCategory(&$err_msg, int $user_id, string $category) {

    try{

        $dbh = dbConnect();

        $sql = 'INSERT INTO categories (user_id, title, created_at) VALUES(:user_id, :title, :created_at)';
        $data = array(
            ':user_id' => $user_id,
            ':title' => $category,
            ':created_at' => date('Y-m-d H:i:s'),
        );
        
        if(execute($dbh, $sql, $data)) {
            header('Location: index.php');
        }

    } catch(Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}