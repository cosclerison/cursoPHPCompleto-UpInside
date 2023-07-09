<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

// include "file.php";
// echo "<p>Continue</p>";

include "./header.php";

$profile = new stdClass();
$profile->name = "Clerison";
$profile->company = "PumaSync";
$profile->email = "clerison@pumasync.com.br";

include __DIR__ . "/profile.php";

$profile = new stdClass();
$profile->name = "Juliana";
$profile->company = "PumaSync";
$profile->email = "julianadias@pumasync.com.br";

// somente se for incluir o arquivo uma vez, otimo para usar em configurações
// include_once __DIR__ . "/profile.php";

// Pode ser chamado varias vezes no mesmo arquivo
include __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

// informa que o arquivo e obrigatorio é requerido para o funcionamento
require __DIR__ . "/config.php";
// informa que o arquivo e requerido e pergunta se ele ja foi chamado, senão ele chamo apenas uma vez
require_once __DIR__ . "/config.php";

echo "<h1>".COURSE."</h1>";

var_dump(require_once __DIR__ . "/config.php");
