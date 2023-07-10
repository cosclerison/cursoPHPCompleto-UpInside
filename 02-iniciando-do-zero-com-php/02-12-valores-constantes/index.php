<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP");
const AUTHOR = "Clerison";

$formation = true;
if ($formation) {
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Curso");
}

echo "<p>COURSE_TYPE COURSE AUTHOR</p>";
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>";
echo "<p>", COURSE_TYPE, " ", COURSE, " ", AUTHOR, "</p>";
echo "<p>". COURSE_TYPE. " ". COURSE. " ". AUTHOR. "</p>";

echo "<br><br>";

class Config
{
    const USER = "root";
    const PASS = "password";
    const HOST = "localhost/api";
}

echo "<p>" . Config::HOST ."</p>";
echo "<p>" . Config::USER ."</p>";
echo "<p>" . Config::PASS ."</p>";

var_dump(get_defined_constants(true)["user"]);

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    "<br><br>",
    __FILE__,
    "<br><br>",
    __DIR__,
    "<br><br>",
]);

function fullStackPHP()
{
    return __FUNCTION__;
}
var_dump(fullStackPHP());
echo "<br><br>";

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class FsPHP
{
    use MyTrait;
    public $className = __CLASS__;
}
var_dump(new FsPHP());
echo "<br><br>";

require __DIR__ . "/MyClass.php";
var_dump(new \Source\MyClass());
echo "<br><br>";
var_dump(\Source\MyClass::class);
