<?php



require "vendor/autoload.php";

$access_token = 'J1z6CFE+0AuI5jKTBCLqcy8e6+ITDdeg4OmInKirut/JuysbLmqJcrFxkb9jQkbZ6qdeDHGSYzF4q7OXppm3xxXbM3RMZEbgyhs41HYI8Xi1aKpBBSYNHs+8mV2qss5gX5RJa18PFqu9HGdWpZ0lvwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fc70db3a7c456a289310f576d452735a';

$pushID = 'U652ca63848f9e99eaf66cd64ec7a198c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('รักเธอว์แต่เธอว์ไม่รู้ววว');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







