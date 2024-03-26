<?php

class Database extends MySqli
{
    private static $instance;

    public function __construct()
    {
        parent::__construct(
            DbConfig::$host,
            DbConfig::$user,
            DbConfig::$psw,
            DbConfig::$dbName,
            DbConfig::$port
        );
    }

    static function getInstance()
    {
        if (!isset($instance))
            $instance = new Database();
        return $instance;
    }

    
}
