<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = "Clerison Oliveira";
$form->mail = "clerison@pumasync.com.br";

var_dump($_REQUEST);

$form->method = "post";
$form->method = "get";
include __DIR__ . "/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);

$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump([
    "<br><br>",
    $post,
    "<br><br>",
    $postArray
]);

if ($postArray) {
    if (in_array("", $postArray)) {
        echo "<p class='trigger warning'>Preencha todos os campos!</p>";
    } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail informado não e válido!</p>";
    } else {
        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $saveStrip);

        var_dump($save);
        echo "<p class='trigger accept'>Cadastrado com sucesso!</p>";
    }
}

$form->method = "post";
include __DIR__ . "/form.php";

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

var_dump($_GET);
$get = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);
$getArray = filter_input_array(INPUT_GET, FILTER_VALIDATE_EMAIL);

var_dump($get);
var_dump($getArray);


$form->method = "get";
include __DIR__ . "/form.php";

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

var_dump(
    "<br><br>",
    filter_list(),
    [
        "<br><br>",
        filter_id("validate_email"),
        "<br><br>",
        FILTER_VALIDATE_EMAIL,
        "<br><br>",
        filter_id("string"),
        "<br><br>",
        FILTER_SANITIZE_STRING,
        "<br><br>",
    ]
);

$filterForm = [
    "name" => FILTER_SANITIZE_STRIPPED,
    "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);
var_dump($getForm);

$email = "clerison@pumasync.com.br";

var_dump(
    [
    filter_var($email, FILTER_VALIDATE_EMAIL)
    ],
    filter_var_array($getForm, $filterForm)
);