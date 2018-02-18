<?php

include('vendor/autoload.php');

$bot_api_key  = file_get_contents('key');
var_dump($bot_api_key);
$bot_username = 'Fisrt';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $result = \Longman\TelegramBot\Request::sendMessage(['chat_id' => 542587263, 'text' => '12123']);
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}