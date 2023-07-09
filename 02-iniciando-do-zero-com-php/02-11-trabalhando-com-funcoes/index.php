<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/functions.php";

var_dump(functionName("Clerison", "Juliana", "Bianca"), "<br><br>");
var_dump(functionName("Tiger", "Maggie", "Peixe"), "<br><br>");

var_dump(optionArgs("Clerison"), "<br><br>");
var_dump(optionArgs("Clerison", "Tiger"), "<br><br>");
var_dump(optionArgs("Clerison", "Maggie", "Peixe"), "<br><br>");

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 65;
$height = 1.65;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);

echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Clerison", "Juliana", "Bianca", "Tiger", "Maggie", "Peixes"));
