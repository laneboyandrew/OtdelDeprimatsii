<?php


class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include($paramsPath);
        $dsn = "pgsql:host={$params['host']};port={$params['port']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['username'], $params['password']);
        return $db;
    }
}