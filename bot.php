<?php
require 'vendor/autoload.php';

use Mpociot\BotMan\BotManFactory;
use React\EventLoop\Factory;

$loop = Factory::create();
$botman = BotManFactory::createForRTM([
    'slack_token' => 'CCs26RQeROuCLhqof2ZMlcLKuZnTAj2ELMEW7lpyYB1ULGBgrSajcFdKCzq6xdSuauVOwwl2NhZBjKtcJT7gcxjhXPtFJmoooHcgeFWsO2wsjNMa1ia3wAt/DUKnIHVgfATdaO6htxsUFXG0JP7L2QdB04t89/1O/w1cDnyilFU='
], $loop);

$botman->hears('ดีจ้า', function($bot) {
    $bot->reply('หวัดดี เราชื่อ อีเปลี่ยน');
});

$botman->hears('convo', function($bot) {
    $bot->startConversation(new ExampleConversation());
});

$loop->run();
