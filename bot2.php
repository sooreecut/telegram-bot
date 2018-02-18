<?php

include('vendor/autoload.php');

try {
    $bot_api_key  = trim(file_get_contents('key'));
    $bot = new \TelegramBot\Api\Client($bot_api_key);
    $bot->command('devanswer', function ($message) use ($bot) {
        preg_match_all('/{"text":"(.*?)",/s', file_get_contents('http://devanswers.ru/'), $result);
        $bot->sendMessage($message->getChat()->getId(),
            str_replace("<br/>", "\n", json_decode('"' . $result[1][0] . '"')));
    });

    $bot->command('start', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), 'hahaha');
    });
    $bot->run();
} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}