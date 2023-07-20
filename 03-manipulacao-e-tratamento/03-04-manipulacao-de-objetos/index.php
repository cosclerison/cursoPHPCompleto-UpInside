<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Clerison",
    "company" => "PumaSync",
    "mail" => "clerison@pumasync.com.br"
];
$objProfile = (object)$arrProfile;
// var_dump($arrProfile);

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

echo "<br><br>";

$company = new stdClass();
$company->company = "Puma Hard Soft";
$company->ceo = "Clerison Oliveira";
$company->manager = new stdClass();
$company->manager->name = "Juliana";
$company->manager->email = "juliana@pumasync.com.br";

var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__); 

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subClass" => is_subclass_of($date, "DateTime")
]);
echo "<br><br>";

$exception = new PDOException();
var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subClass" => is_subclass_of($exception, "Exception")
]);