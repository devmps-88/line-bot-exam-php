<?php



require "vendor/autoload.php";

$access_token = 'q+k/WTK2yggtJx28RfCr4jET9vryHh5dLzcTQtg+j0h9COdcTp0T51dVlml1t3BmlNOWul1AtlS6gNgS+iwG5K/L39uHzhnOAvryeeBZdldskkWmOFM2/WTcSiB9MnHunWdKqoMcKZQcM88cQyYGbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'eb38603dae08732ce2a5d02be66a377e';

$pushID = 'U25947640ddd7aa4b7d31900a382e0ba3';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('หงส์หำน้อย');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







