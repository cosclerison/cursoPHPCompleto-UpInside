<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),
];
var_dump($operators);

echo "<br /><br />";

$incrementA = 5;
$decrementB = 5;
$increment = [ 
    "<br /> Pós-incremento" => $incrementA++, // insere o valor apos apresentar, o valor atual só será mostrado quando for chamado novamente
    "<br /> Res-incremento" => $incrementA, // apresenta o valor atualizado ou valor real
    "<br /> Pré-incremento" => ++$incrementA, // insere o valor e ja apresenta com o valor incrementado ou preincrementado
    "<br /> Pós-decremento" => $decrementB--, // subtrai o valor apos apresentar, o valor atual só será mostrado quando for chamado novamente
    "<br /> Res-decremento" => $decrementB, // apresenta o valor atualizado ou valor real
    "<br /> Pré-decremento" => --$decrementB, // subtrai o valor e ja apresenta com o valor subtraido ou predecrementado
];
var_dump($increment);
/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;

$related = [
    "<br />a == b" => ($relatedA == $relatedB),
    "<br />a === b" => ($relatedA === $relatedB),
    "<br />a != b" => ($relatedA != $relatedB),
    "<br />a !== b" => ($relatedA !== $relatedB),
    "<br />a > c" => ($relatedA > $relatedC),
    "<br />a < b" => ($relatedA < $relatedC),
    "<br />a >= b" => ($relatedA >= $relatedB),
    "<br />a >= b" => ($relatedA >= $relatedC),
    "<br />a <= b" => ($relatedA <= $relatedC),
];
var_dump($related);
/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    "<br /> a && b" => ($logicA && $logicB),
    "<br /> a || b" => ($logicA || $logicB),
    "<br /> a" => ($logicA),
    "<br /> ! a" => (!$logicA),
    "<br /> ! b" => ($logicB),
];
var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    "<br /> a + b" => ($calcA + $calcB),
    "<br /> a - b" => ($calcA - $calcB),
    "<br /> a * b" => ($calcA * $calcB),
    "<br /> a / b" => ($calcA / $calcB),
    "<br /> a % b" => ($calcA % $calcB),
];
var_dump($calc);