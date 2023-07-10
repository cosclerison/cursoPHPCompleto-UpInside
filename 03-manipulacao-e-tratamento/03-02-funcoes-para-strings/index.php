<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível";

var_dump([
    "string" => $string,
    "<br><br>",
    "strlen" => strlen($string),
    "<br><br>",
    "mb_strlen" => mb_strlen($string),
    "<br><br>",
    "substr" => substr($string, "9"),
    "<br><br>",
    "mb_substr" => mb_substr($string, "9"),
    "<br><br>",
    "strtoupper" => strtoupper($string),
    "<br><br>",
    "mb_strtoupper" => mb_strtoupper($string),
    "<br><br>",
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "<br><br>",
    "mb_strtolower" => mb_strtolower($mbString),
    "<br><br>",
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "<br><br>",
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "<br><br>",
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
    "<br><br>",
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString . " Fui, iria novamente, e foi épico";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "<br><br>",
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "<br><br>",
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "<br><br>",
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "<br><br>",
    // mb_strstr por padrão entra com o valor false, determinando trazer os dados apos o segundo atributo ", "
    "mb_strstr" => mb_strstr($mbReplace, ", ", false),
    "<br><br>",
    // mb_strstr por padrão entra com o valor false, determinando trazer os dados apos o segundo atributo ", ".
    // atribuindo como true é retornado os valores antes do segundo atributo
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "<br><br>",
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true),
    "<br><br>",
]);

$mbStrReplace = $string;

echo "<p>". $mbStrReplace ."</p>";
echo "<p>". str_replace("AC/DC", "STAUROS", $mbStrReplace) ."</p>";
echo "<p>". str_replace(["AC/DC", "eu fui", "último"], "STAUROS", $mbStrReplace) ."</p>";
echo "<p>". str_replace(["AC/DC", "último"], ["STAUROS", "Melhor"], $mbStrReplace) ."</p>";

$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
ROCK;

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);
/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Clerison&email=clerison@pumasync.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    "<br><br>",
    $parseEndPoint,
    "<br><br>",
    (object)$parseEndPoint
]);