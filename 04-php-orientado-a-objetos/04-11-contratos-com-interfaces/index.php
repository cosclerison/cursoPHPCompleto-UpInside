<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.11 - Contratos com interfaces");

require __DIR__ . "/source/autoload.php";

/*
 * [ implementacão ] Um contrato de quais métodos a classe deve implementar
 * http://php.net/manual/pt_BR/language.oop5.interfaces.php
 */
fullStackPHPClassSession("implementacão", __LINE__);

$user = new Source\Contracts\User(
    "Clerison",
    "Oliveira",
    "email@email.com"
);

$admin = new Source\Contracts\UserAdmin(
    "Clerison",
    "Silva",
    "cos@cos.com",
);

var_dump(
    $user,
    "<br><br>",
    $admin
);
/*
 * [ associação ] Um exemplo associando ao login
 */
fullStackPHPClassSession("associação", __LINE__);

$login = new Source\Contracts\Login();

$loginUser = $login->loginUser($user);
$loginAdmin = $login->loginAdmin($admin);

var_dump(
    $loginUser,
    "<br><br>",
    $loginAdmin
);

/*
 * [ dependência ] Dependency Injection ou DI, é um contrato de relação entre objetos, onde
 * um método assina seus atributos com uma interface.
 */
fullStackPHPClassSession("dependência", __LINE__);

var_dump(
    $login->login($user),
    "<br><br>",
    $login->login($user)->getLastName(),
    "<br><br>",
    $login->login($admin),
    "<br><br>",
    $login->login($admin)->getFirtName(),
);