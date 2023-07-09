<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos!</p>";
};

echo "<p><strong>Clerison</strong>{$myAge(1984)}</p>";
echo "<p>Juliana {$myAge(1988)}</p>";
echo "<p>Bianca {$myAge(2013)}</p>";

echo "<br><br>";

$priceBrl = function ($price) {
    /* number_format(
        1º a variavel que será formatada,
        2º quantos decimais para usar marcar o local da formatação,
        3º a formatação ou simbolo que vai ser inserido,
        4º qual simbolo será usado no milhar )
     */
    return "R$" . number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa {$priceBrl(3600)}. Vamos fechar?</p>";
echo "<br><br>";

$myCart = []; // Inicia um array vazio
$myCart["totalPrice"] = 0; // inicia com valor zero
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price; // calcula os valores inseridos, de quantidade e o valor
    $myCart["totalPrice"] += $myCart[$item]; // soma todos os itens inseridos na função
};

$cardAdd("HTML", 1, 497);
$cardAdd("jQuery", 2, 497);
$cardAdd("javaScript", 1, 550);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 100;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(5) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div><br><br>";


// função criada para que o PHP entregue todos os dados da pesquisa conforme vai 
// renderizando no processamento
function generetorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}"));
    }
}

echo "<div style='text-align: center'>";
foreach (generetorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div><br><br>";
