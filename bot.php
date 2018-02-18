<?php

include('vendor/autoload.php');

$bot_api_key  = file_get_contents('key');
$bot_username = 'Fisrt';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $result = \Longman\TelegramBot\Request::sendMessage(['chat_id' => 542587263, 'text' => 'Your utf8 text 😜 ...']);
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}