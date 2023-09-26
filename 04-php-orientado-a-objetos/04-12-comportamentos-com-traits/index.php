<?php
use Source\Traits\Address;
use Source\Traits\Cart;
use Source\Traits\Register;
use Source\Traits\User;
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user       = new User("Clerison", "Oliveira", "cos@cos.com");
$address    = new Address("Santa Monica", "600", "Parque Santa Rosa");
$register   = new Register(
    $user,
    $address
);

var_dump(
    $user,
    "<br><br>",
    $address,
    "<br><br>",
    $register,
    "<br><br>",
);

var_dump(
    $register,
    "<br><br>",
    $register->getUser(),
    "<br><br>",
    $register->getAddress(),
    "<br><br>",
    $register->getUser()->getFirstName(),
    "<br><br>",
    $register->getAddress()->getStreet(),
    "<br><br>",
);


$cart = new Source\Traits\Cart();

$cart->add(1, "PHP", "1", 900);
$cart->add(2, "JavaScript", "3", 530);
$cart->add(3, "angular 13", "2", 240);
$cart->add(4, "JAVA", "1", 197);
$cart->remove(2,2);
$cart->remove(3,1);
$cart->remove(4,1);

$cart->checkout($user,$address);

var_dump($cart);
