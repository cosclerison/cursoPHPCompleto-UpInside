<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrZ = [0,1,2,3];

var_dump($arrA); 
var_dump($arrZ); 

echo "<br><br>";

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "Vocal"         => "Brian",
    "Solo_guitar"   => "Angus",
    "Base_guitar"   => "Malcolm",
    "Bass_guitar"   => "Cliff",
];
$arrayAssoc["Drums"] = "Phil";
$arrayAssoc["Rock_Band"] = "AC/DC";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "mic"];
$angus = ["name" => "Angus", "Instrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

echo "<br><br>";

var_dump([
    "Brian" => $brian,
    "Angus" => $angus
]);
/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "Band"          =>  "AC/DC",
    "Vocal"         => "Brian",
    "Solo_guitar"   => "Angus",
    "Base_guitar"   => "Malcolm",
    "Bass_guitar"   => "Cliff",
    "Drums"         => "Phil",
];

echo "<p>O vocal da banca AC/DC é {$acdc["Vocal"]}, e junto com {$acdc["Solo_guitar"]} fazem um ótimo show de rock!</p>";

echo "<br><br>";

$pearl = [
    "Band"          =>  "Pearl Jam",
    "Vocal"         => "Eddie",
    "Solo_guitar"   => "Mike",
    "Base_guitar"   => "Stone",
    "Bass_guitar"   => "Jeff",
    "Drums"         => "Jack",
];

$rockBands = [
    "acdc"          => $acdc,
    "pearl_jam"     => $pearl
];

var_dump($rockBands);

echo "<br><br>";

echo "<p>Vocal = {$rockBands["acdc"]["Vocal"]}</p><br><br>";
echo "<p>Vocal = {$rockBands["pearl_jam"]["Vocal"]}</p><br><br>";

foreach ($acdc  as $item) {
    echo "<p>{$item}</p>";
}

foreach ($acdc  as $key => $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
}

foreach ($rockBands  as $rockBand) {
    var_dump($rockBand);
}

foreach ($rockBands as $rockBand) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
}