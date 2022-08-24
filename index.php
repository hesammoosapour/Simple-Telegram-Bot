<?php
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;
$token = 'token_id';
$text = $message->text;

if ($text = 'user_id') {
    $txt = "Your chat id : $chat_id";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$txt");
}else
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text");
