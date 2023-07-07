<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

// Enquanto (condição) faça
while ($looping <= 5) {
    $while[] = $looping;
    // utilizando um incremento para fazer a somatoria toda vez que o registro passar com o valor abaixo do limite especificado no while
    $looping++;
}

var_dump("<br><br> While", $while);

$looping = 5;
$while = [];

// Enquanto (condição) faça
do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 1);

var_dump("<br><br> do while", $while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for ($i = 5; $i <= 10; $i++) {
    echo "<p>{$i}</p>";
}


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for ($c = 5; $c <= 10; $c++) {
    if ($c % 2 == 0) {
        continue;
    }

    if ($c > 7) {
        break;
    }

    echo "<p>Pulor + 2 :: {$c}</p>";
}


/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];
for($ar = 0; $ar <=2; $ar++) {
    $array[] = $ar;
}

var_dump("<br><br>for", $array);

foreach ($array as $item) {
    var_dump($item);
}
var_dump("<br><br>foreach", $array);

foreach ($array as $key => $value) {
    var_dump("{$key} = {$value}");
}