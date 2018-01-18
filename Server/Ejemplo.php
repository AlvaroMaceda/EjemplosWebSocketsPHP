<?php
require __DIR__ . '/vendor/autoload.php';

use Ratchet\Server\IoServer;
use \EjemploWebSockets\EchoServer;

$server = IoServer::factory(
    new EchoServer(),
    8080
);

$server->run();
