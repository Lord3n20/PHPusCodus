<?php
use Discord\Discord;
use Discord\Parts\Channel\Message;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\Factory;
use React\Http\Browser;

require __DIR__ . '/vendor/autoload.php';

$loop = Factory::create();

$browser = new Browser($loop);

$discord = new Discord([
    'token' => 'YOUR_TOKEN_HERE',
    'loop' => $loop,
]);

function sagHallo($message){
    $cha = $message->channel;
    $na = $message->author;
    if ($na == '<@694480998636716032>') {
        $cha->sendMessage("Hi David");
    } elseif($na == '<@681464316863840337>') {
        $cha->sendMessage("Hi Enzo");
    } elseif($na == '<@293015092184875008>') {
        $cha->sendMessage('Guten Tag Herr Müller. Wären Sie so nett wieder zu gehen?');
    } else {
        $cha->sendMessage("Hi wer-auch-immer-du-bist");
    }
}
function ping($message){
    $message->reply("Pong");
    $chal = $message->channel;
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
    $chal->sendMessage("-lottokadse");
}
function spam($message){
    $chal = $message->channel;
    $chal->sendMessage("stop");
}

$discord->on('message', function (Message $message, Discord $discord) use ($browser) {
    if (strtolower($message->content) == 'hallo') {
        sagHallo($message);
    } if (str_starts_with($message->content, "=")){
	echo "jaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $nachricht = str_replace("=", "",$message->content);
        echo $nachricht;
	if($nachricht == "ping"){ping($message);}
	if($nachricht == "-spam"){spam($message);}
    }
});

$discord->run();
