<?php

use Source\Loading\Company as LoadingCompany;
use Source\Related\Company;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();
$company->bootCompany(
    "PumaSync",
    "Nome da Rua"
);

var_dump(
    $company,
    "<br><br>"
);

$address = new \Source\Related\Address("Estrada Santa Mônica", 600, "Concreto BR-MIX");
$company->boot(
    "PumaSync",
    $address
);

var_dump($address);
echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()} N:{$company->getAddress()->getNumber()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new \Source\Related\Products("Full Stack PHP", 1997);
$laradev    = new \Source\Related\products("Laravel Developer", 997);

var_dump(
    $fsphp,
    $laradev,
    "<br><br>"
);

$company->addProducts($fsphp);
$company->addProducts($laradev);
$company->addProducts(
    new \Source\Related\Products("Curso PHP", 1399)
);

var_dump(
    $company,
    "<br><br>"
);

/**
 * @var \Source\Related\Products $Products 
 */
foreach($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Clerison", "Oliveira");
$company->addTeamMember("Direct", "Juliana", "Vieira");
$company->addTeamMember("Develop", "Bianca", "Dias");
$company->addTeamMember("jr", "Tiger", "Turtle");

var_dump($company);

/**
 * @var \Source\Related\User $member
 */
foreach($company->getTeam() as $member)
{
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}









