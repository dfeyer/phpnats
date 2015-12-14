<?php
require_once __DIR__ . "/../../vendor/autoload.php";

$connectionOptions = new \Nats\ConnectionOptions();
$servers = ['localhost:4223', 'localhost:4222'];
$connectionOptions->setServers($servers);

echo "Server: nats://" . $connectionOptions->getHost() . ":" . $connectionOptions->getPort() . PHP_EOL;

$c = new Nats\Connection($connectionOptions);
$c->connect();

$c->publish("foo", "bar");

//$c->close();
$c->reconnect();
/*
$connectionOptions2 = new \Nats\ConnectionOptions();
$connectionOptions2
    ->setHost('localhost')
    ->setPort(4223);
$c2 = new Nats\Connection($connectionOptions2);
$c2->connect();
*/

$c->publish("foo", "bar");
$c->publish("foo", "bar");
