<?php 

/**
 * メール送信
 * 
 * @param array $err_msg
 * @param string $from
 * @param string $to
 * @param string $subject
 * @param string $comment
 */
function sendMail(&$err_msg,$from, $to, $subject, $comment) {
    if (!empty($to) && !empty($subject) && !empty($comment)) {
        
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $result = mb_send_mail($to, $subject, $comment, "From: " . $from);

        if ($result) {
            $_SESSION['alert_msg'] = SUC_MSG_MAIL;
        } else {
            $err_msg['common'] = ERR_MSG_SEND_MAIL;
        }
    }
}