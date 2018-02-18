<?php

include('vendor/autoload.php');

$bot_api_key  = file_get_contents('key');
$bot_api_key  = trim(file_get_contents('key'));
$bot = new \TelegramBot\Api\BotApi($bot_api_key);
$bot->setWebhook('https://1918e972.ngrok.io/456488167:AAEnjkt0wEPMD4XPuFhaeSrHXm2Bjd5U5G4/webhook');