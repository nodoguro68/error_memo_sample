<?php 

/**
 * メモ登録
 * 
 * @param int $user_id
 * @param int $category_id
 * @param array $memo_data
 */
function registerMemo(int $user_id, int $category_id, array $memo_data) {

    $dbh = dbConnect();

    $sql = 'INSERT INTO memos (user_id, category_id, title, solution, created_at) VALUES(:user_id, :category_id, :title, :solution, :created_at)';

    $data = array(
        ':user_id' => $user_id,
        ':category_id' => $category_id,
        ':title' => $memo_data['title'],
        ':solution' => $memo_data['solution'],
        'created_at' => date('Y-m-d H:i:s'),
    );

    if (execute($dbh, $sql, $data)) {

        header('Location: index.php');
    } 
}

/**
 * 複数の試したことを登録
 * 
 */
function registerAttempt(object $dbh, int $memo_id, array $attempt_data) {

    $sql = 'INSERT INTO attempts memo_id, content, created_at VALUES';

    foreach ($attempt_data as $key => $val) {
        // プレースホルダーと値の数分作る必要がある
        // $sql .= implode(',',$ary_sql);
    }

    $data = array(
        ':memo_id' => $memo_id,
        ':created_at' => date('Y-m-d H:i:s'),
    );
    $stmt = execute($dbh, $sql, $data);
}

/**
 * 複数の参考リンクを登録
 * 
 */
function registerReference( int $memo_id , array $reference_data) {

    // SQLを複数作る データベースのアクセスが膨大に増える
    // 複数の値をまとめて1文で登録する
    
    foreach ($reference_data as $reference) {
        
        $sql = 'INSERT INTO references memo_id, link, created_at VALUES(:memo_id, :link, :created_at)';
    }
}