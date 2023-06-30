<?php

use phpDocumentor\Reflection\DocBlock\Tags\Var_;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

// camelCase
$userFirstName = "Clerison";
$userLastName = "Oliveira";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

// Underscore
$user_first_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "39";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos.</span></p>";

$userEmail = "cosclerison@gmail.com";
echo $userEmail;

// variável variável
$company = "Upinside";
$$company = "Treinamentos";

// apresenta erro dependendo da versão do PHP
echo "<h3>{UpInside}</h3>";

$calcA = 10;
$calcB = 20;
// $calcB = $calcA;

// Fazendo referencia a variável
$calcB = &$calcA;
$calcB = 50; 

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump('true', $true, 'false', $false);

$bestAge = ($userAge > 50);
var_dump('Melhor idade:', $bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump(
    $a,
    $b,
    $c,
    $d,
    $e
);

if($a || $b || $c || $d || $e) {
    var_dump(true);
} else {
    var_dump(false);
};

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", "code");

var_dump($code, $codeClear);

$codeMore = function($code) {
    var_dump($code);
};
$codeMore("#boraProgramar");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo!";
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 12321;
$float = 1.23213;

var_dump([
    $string,
    $array,
    $object,
    $object,
    $null,
    $int,
    $float
]);
