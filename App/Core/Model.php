<?php

namespace App\Core;

class Model {

    private static $conexao;

    public static function getConn(){

        $host = $_ENV["database_host"];
        $user = $_ENV["database_user"];
        $pass = $_ENV["database_pass"];

        if(!isset(self::$conexao)){
            self::$conexao = new \PDO("mysql:host=$host;port=3306;dbname=fastparking;", "$user", "$pass");
        }

        return self::$conexao;
    }

}
