<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$connectionOptions = new \Nats\ConnectionOptions();
$servers = ['localhost:4223', 'localhost:4222'];
$connectionOptions->setServers($servers);

echo "Server: nats://" . $connectionOptions->getHost() . ":" . $connectionOptions->getPort() . PHP_EOL;

$c = new Nats\Connection($connectionOptions);
$c->connect();

$callback = function ($payload) {
    printf("Data: %s\r\n", $payload);
};

$sid = $c->subscribe("foo", $callback);

$c->wait(2);
