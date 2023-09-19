<?php
use Source\Inheritance\Address;
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new Source\Inheritance\Event\Event(
    "PumaSync Work",
    new DateTime("2023-04-01 16:00"),
    2500,
    "2"
);

var_dump($event);

$event->register("Clerison Oliveira", "cosclerison@gmail.com");
$event->register("Juliana Vieria", "julianadiasvs@hotmail.com");
$event->register("Bianca Dias", "bdslol@gmail.com");

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa suas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new \Source\Inheritance\Address("Estrada Santa Monica", "600", "MIX");
$event = new \Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2019-05-20 16:00"),
    2500,
    "2",
    $address
);

var_dump($event);

$event->register("Bianca Dias", "bdslol@gmail.com");
$event->register("Clerison Oliveira", "cosclerison@gmail.com");
$event->register("Juliana Vieria", "julianadiasvs@hotmail.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new \Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2019-05-20 16:00"),
    2500,
    "www.pumasync.com.br"
);

var_dump($event);

$event->register("Bianca Dias", "bdslol@gmail.com");
$event->register("Clerison Oliveira", "cosclerison@gmail.com");
$event->register("Juliana Vieria", "julianadiasvs@hotmail.com");
