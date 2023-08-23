<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Source\Qualifield\User;
use Sourse\Qualifield\User as QualifieldUser;
use Web\Template AS WebTemplate;

$appUseTemplate = new Template;
$webUseTemplate = new WebTemplate;

var_dump( 
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

// $user->firstName    = "Clerison";
// $user->lastName     = "Oliveira";

// $user->setFirstName("Clerison");
// $user->setLastName("Oliveira");

var_dump(
    $user,
    "<br><br>",
    get_class_methods($user)
);

echo "<p>O e-mail de {$user->getFirstName()} é o {$user->getEmail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$clerison = $user->setUser("Clerison", "Oliveira", "cosclerison@gmail.com");

if (!$clerison) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$juliana = new \Source\Qualifield\User();
$juliana->setUser(
    "Juliana", 
    "Dias", 
    "juliana@pumasync.com.br"
);

$bianca = new \Source\Qualifield\User();
$bianca->setUser(
    "bianca", 
    "Dias", 
    "bianca@pumasync.com.br"
);

var_dump(
    "<br><br>",
    $user,
    "<br><br>",
    $juliana,
    "<br><br>",
    $bianca
);
