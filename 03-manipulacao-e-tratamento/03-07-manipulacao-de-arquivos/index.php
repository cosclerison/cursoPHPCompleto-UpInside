<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/file.txt";

if(file_exists($file) && is_file($file)) {
    echo "<p>Existe!</p>";
} else {
    echo "<p>Não Existe!</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if (!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01" . PHP_EOL);
    fwrite($fileOpen, "Linha 02" . PHP_EOL);
    fwrite($fileOpen, "Linha 03" . PHP_EOL);
    fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry." . PHP_EOL);
    fclose($fileOpen);
} else {
    var_dump(
        file($file),
        pathinfo($file)
    );
}

echo "<br /><br />";
echo file($file)[2];
echo "<br /><br />";
echo file($file)[3];
echo "<br /><br />";
echo "<p>" . file($file)[3] . "</p>";
echo "<br /><br />";

$open = fopen($file, "r");
while (!feof($open)) {
    echo "<p>" . fgets($open) ."</p>";
}

fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__); 

$getContents = __DIR__ . "file2.txt";

if (file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents);
} else {
    $data = "<article><h1><strong>C</strong>lerison</h1><p>CEO PumaSYNC<br/>clerison@pumasync.com.br</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

// unlink($getContents);
// unlink($file);

if (file_exists(__DIR__ . "/texte3.txt") && is_file(__DIR__ . "/texte3.txt")) {
    unlink((__DIR__ . "/texte3.txt"));
}