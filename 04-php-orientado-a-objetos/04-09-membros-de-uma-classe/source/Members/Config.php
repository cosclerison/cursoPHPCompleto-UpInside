<?php 

namespace Source\Members;

class Config
{
    public const COMPANY    = "PumaSync";
    protected const DOMAIN  = "pumasync.com.br";
    private const SECTOR    = "Educação";

    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig($company, $domain, $sector)
    {
        self::$company  = $company;
        self::$domain   = $domain;
        self::$sector   = $sector;
    }
}