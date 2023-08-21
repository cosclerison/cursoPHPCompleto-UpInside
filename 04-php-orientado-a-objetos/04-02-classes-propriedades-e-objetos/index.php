<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 */
fullStackPHPClassSession("classe e objeto", __LINE__);

require __DIR__."/classes/User.php";

$user = new User();
var_dump($user);
 

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

$user->firstName = "Clerison";
$user->lastName = "Oliveira";
$user->email = "cosclerison";

var_dump($user);

echo "<p>O e-mail de {$user->firstName} é {$user->email}!</p>";

/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);

$user->setFirstName("Clerison");
$user->setLastName("Oliveira");
$user->setEmail("cosclerison@gmail.com");

if(!$user->setEmail("cosclerison@gmail.com")) {
    echo "<p class='trigger error'>O e-mail {$user->getEmail()} não é válido!</p>";
}

// acessando diretamente a variável
$user->email = "pumasync";

var_dump($user);
