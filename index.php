<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
->setUsername('tcrazyone4dmintest@mail.ru')
->setPassword('Kdi7xxnYbp6GhiB4qSuh')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
->setFrom(['tcrazyone4dmintest@mail.ru' => 'Nick'])
->setTo(['morinnickhi@yandex.ru'])
->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);