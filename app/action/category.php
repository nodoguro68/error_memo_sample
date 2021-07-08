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

/**
 * カテゴリー一覧表示
 * 
 * @param array $err_msg
 * @param int $user_id
 */
function getCategories(&$err_msg, int $user_id) {

    try{

        $dbh = dbConnect();

        $sql = 'SELECT category_id, title FROM categories WHERE user_id = :user_id';
        $data = array(
            ':user_id' => $user_id,
        );

        $categories = fetchAll($dbh, $sql, $data);
        return $categories;
        header('Location: index.php');

    } catch(Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}

/**
 * カテゴリー削除
 * 
 * @param array $err_msg
 * @param int $category_id
 * @param int $user_id
 */
function deleteCategory(&$err_msg, int $category_id, int $user_id) {

    try{

        $dbh = dbConnect();

        $sql = 'DELETE FROM categories WHERE category_id = :category_id AND user_id = :user_id';
        $data = array(
            ':category_id' => $category_id,
            ':user_id' => $user_id,
        );

        if (execute($dbh, $sql, $data)) {
            header('Location: index.php');
        }

    } catch(Exception $e) {
        error_log('エラー発生:' . $e->getMessage());
        $err_msg['common'] = ERR_MSG;
    }
}

