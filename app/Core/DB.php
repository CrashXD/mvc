<?php

namespace App\Core;

use PDO;

class DB {
    public $connect;

    public function __construct()
    {
        global $dbConfig;
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $dsn = "mysql:dbname={$dbConfig['database']};host={$dbConfig['host']};port={$dbConfig['port']};";
        $this->connect = new PDO($dsn, $dbConfig['user'], $dbConfig['password'], $options);
    }

    public function execute($sql, $params = []) {
        $query = $this->connect->prepare($sql);
        $query->execute($params);
        return $query;
    }

    public function query($sql, $params = []) {
        $this->execute($sql, $params);
    }
}
