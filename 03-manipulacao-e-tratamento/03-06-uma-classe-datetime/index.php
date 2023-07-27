<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1984-04-01");
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/03/2023");

var_dump(
    $dateNow,
    "<br />",
    "<br />",
    get_class_methods($dateNow),
    "<br />",
    "<br />",
    $dateStatic,
    "<br />",
    "<br />",
);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("d"),
]);

echo "<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")} </p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    "<br />",
    "<br />",
    $newTimeZone,
    "<br />",
    "<br />",
    $newDateTime,
    "<br />",
    "<br />",
    $dateNow,
    "<br />",
    "<br />",
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");
var_dump($dateInterval);
echo "<br /><br />";

$dateTime = new DateTime("now");
$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump($dateTime);
echo "<br /><br />";

$birth = new DateTime("2023-04-01");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);
var_dump($birth, $diff);
echo "<br /><br />";

if ($diff->invert) {
    echo "<p>Seu aniversário foi a {$diff->days} dias.</p>";
} else {
    echo "<p>Faltam {$diff->days} para seu aniversário!</p>";
}
echo "<br /><br />";

$dateResources = new DateTime("now");
var_dump([
    "<br /><br />",
    $dateResources->format(DATE_BR),
    "<br /><br />",
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
    "<br /><br />",
    $dateResources->add(DateInterval::createFromDateString("15days"))->format(DATE_BR),
    "<br /><br />",
]);
/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2025-04-01");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    "<br /><br />",
    $start->format(DATE_BR),
    "<br /><br />",
    $interval,
    "<br /><br />",
    $end->format(DATE_BR),
    "<br /><br />",
], $period, get_class_methods($period));

echo "<h1>Sua Assinatura?</h1>";
foreach ($period as $recurrences) {
    echo "<p>Proximo vencimento {$recurrences->format(DATE_BR)}</p>";
}