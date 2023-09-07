<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

// $user = new \Source\Interpretation\User();

/* The code is creating a new instance of the `\Source\Interpretation\User` class and assigning it to
the `` variable. The constructor of the `User` class is being called with the arguments
"Clerison", "Oliveira", and "cosclerison@gmail.com". */
$user = new \Source\Interpretation\User(
    "Clerison",
    "Oliveira",
    "cosclerison@gmail.com"
);
var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);
$clerison = $user;

$juliana = $clerison;
$juliana->setFirstName("Juliana");
$juliana->setLastName("Dias");

$clerison->setFirstName("Clerison");
$clerison->setLastName("Oliveira");

$juliana = clone $clerison;
$juliana->setFirstName("Juliana");
$juliana->setLastName("Vieira");

$bianca = clone $clerison;
$bianca->setFirstName("bianca");
$bianca->setLastName("Dias");

var_dump(
    $clerison,
    "<br><br>",
    $juliana,
    "<br><br>",
    $bianca,
    "<br><br>",
);


/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);