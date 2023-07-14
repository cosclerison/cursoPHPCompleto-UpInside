<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge",
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

// insere um novo registro no inicio 
array_unshift($index, "", "Pearl Jam");
$assoc = ["Band_4" => "Pearl Jam", "Band_5" => ""] + $assoc;

// insere um novo registro no final
array_push($index, "");
$assoc = $assoc + ["Band_6" => ""];

// Remove o primeiro registro
array_shift($index);
array_shift($assoc);

// Remove o ultimo registro
array_pop($index);
array_pop($assoc);

// remove valores vazios
$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    "<br><br>",
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

// reverte a apresentação dos dados do array
$index = array_reverse($index);
$assoc = array_reverse($assoc);

// reverte os valores e não alterando o indice do array e deixa em ordem alfabetica
asort($index);
asort($assoc);
// Ordena pelo indice ignorando o valor
ksort($index);
ksort($assoc);

// Ordena pelo valor e ordenando o indice de acordo com o valor
krsort($index);
krsort($assoc);

// ordena pelo valor
sort($index);
sort($assoc);

// ordena pelo indice 
rsort($index);
rsort($assoc);

var_dump(
    $index,
    "<br><br>",
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    [
        array_keys($assoc),
       "<br><br>",
        array_values($assoc)
    ]
);

// fazendo verificação se o valor existe dentro do array
if (in_array("AC/DC", $assoc)) {
    echo "<p>Cause I'm Back!</p>";
}

// implodindo um array
$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

// explodindo ou seja retornando a um array
var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name"      => "Clerison",
    "company"   => "PumaSync",
    "mail"      => "clerison@pumasync.com.br"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>
            {{company}}<br />
            {{mail}}
            <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a>
        </p>

    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

// var_dump(explode("&", $replaces));
echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);
