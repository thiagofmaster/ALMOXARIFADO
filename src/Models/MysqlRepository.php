<?php

namespace Mvc\Models;

use PDO;
use \PDOException;

abstract class MysqlRepository{
    private static $connect = null;

    public static function getConnect($servename, $username, $passoword, $dbname){
        if(!is_null(self::$connect)){
            return self::$connect;
        }

        self::$connect = new PDO(
            "mysql:host={$servename} ;dbname{$dbname} ", $username, $passoword, 
            [PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION] 
        );
        return self::$connect;
    }   
}