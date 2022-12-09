<?php

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Event;

include __DIR__.'/vendor/autoload.php';

$discord = new Discord([
    'token' => ''
]);

$discord->on('ready', function(Discord $discord) {
    echo 'Bot is ready!', PHP_EOL;

    // Listen for messages.
    $discord->on(Event::MESSAGE_CREATE, function(Message $message, Discord $discord){
        echo "{$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->run();