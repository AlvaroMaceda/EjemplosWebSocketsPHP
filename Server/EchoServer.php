<?php
namespace EjemploWebSockets;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class EchoServer implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $conn)
    {
        echo "Conectado\n";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        echo "Mensaje:$msg\n";
    }

    public function onClose(ConnectionInterface $conn)
    {
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Error";
    }
}