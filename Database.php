<?php

class Database {

    public $connection;

    public function __construct($config) {

        $dsn = "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}";
        
        $this->connection = new PDO($dsn, $config['user'], $config['pass'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); 
    } 

    public function query($query){

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;

    }
}

