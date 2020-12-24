<?php

/**
 ** Класс конфигурации базы данных
 */

class DB
{
    const USER = "root";
    const PASS = "root";
    const HOST = "localhost";
    const DB = "alchanov";

    public static function connectToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        return new PDO("mysql:dbname=$db;host=$host;charset=UTF8", $user, $pass);
    }
}
