<?php
/**
 * Autoloader Personalizado
 *
 * Este código define uma função de autoloader personalizado que carrega automaticamente classes PHP com base em namespaces.
 * Ele foi projetado para funcionar com classes sob o namespace "Source" e carregá-las a partir do mesmo diretório do script que faz a chamada.
 */

// Registra uma função de autoloader personalizado usando spl_autoload_register
spl_autoload_register(function ($class) {
    // Define o prefixo do namespace para as classes a serem carregadas automaticamente
    $prefix = "Source\\";

    // Obtém o diretório base onde o script de chamada está localizado
    $baseDir = __DIR__ . "/";

    // Calcula o comprimento do prefixo do namespace
    $len = strlen($prefix);

    // Verifica se o nome da classe começa com o prefixo de namespace especificado
    if (strncmp($prefix, $class, $len)) {
        return; // A classe não pertence ao namespace especificado, então não faz nada
    }

    // Extrai o nome da classe relativo (sem o prefixo)
    $relativeClass = substr($class, $len);

    // Gera o caminho do arquivo com base no namespace e na estrutura de diretórios
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";

    // Verifica se o arquivo existe
    if (file_exists($file)) {
        // Requer o arquivo, efetivamente carregando a classe
        require $file;
    }
});

// Fim do autoloader personalizado
