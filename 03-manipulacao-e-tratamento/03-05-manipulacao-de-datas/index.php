<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),
    "<br>",
    date(DATE_W3C),
    "<br>",
    date("d/m/Y h:i:s"),
    "<br>"
]);

define("DATE_BR", "d/m/Y H:i:s");
// define("DATE_TIMEZONE", "Pacific/Apia");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get(),
    "<br>",
    date(DATE_BR),
    "<br>",
]);

var_dump(getdate());

echo "<p> Hoje é dia ", getdate()["mday"], "!</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
    "strtotime NOW" => strtotime("now"),
    "<br />",
    "time" => time(),
    "<br />",
    "strtotime+10d" => strtotime("+10days"),
    "<br />",
    "date DATE_BR" => date(DATE_BR),
    "<br />",
    "date +10days" => date(DATE_BR, strtotime("+10days")),
    "<br />",
    "date +10days" => date(DATE_BR, strtotime("-10days")),
    "<br />",
    "date +3month" => date(DATE_BR, strtotime("+3month")),
    "<br />",
    "date +1years" => date(DATE_BR, strtotime("+1years")),
    "<br />"
]);

$format = "%d/%m/%Y %Hh%m minutos";
echo "<p> A data de hoje é ", strftime($format),"</p>";

echo "<br />";
echo strftime("<p>Hoje é dia %d do %m de %Y às %h horas e %M minutos.</p>");