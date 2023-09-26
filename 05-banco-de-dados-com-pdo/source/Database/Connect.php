<?php

namespace Source\Database;

use PDO;
use PDOException;

class Connect
{
    private const HOST  = "localhost";
    private const USER  = "root";
    private const DBNAME  = "fullstackphp";
    private const PASSWD  = "root";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8",
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_OBJ,
        PDO::ATTR_CASE                  => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * The function returns an instance of the PDO class for connecting to a MySQL database.
     * 
     * @return PDO The method is returning an instance of the PDO class.
     */
    public static function getInstance(): PDO
    { 
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS
                );

            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }

        }
        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }
}