<?php

class db {
    // connection link
    protected $pdo;

    public function __construct() {
        $this->pdo = $this->dbConnect();
    }

    protected function dbConnect() {
        try {
            $pdo = new PDO('mysql:host='.CONFIG_DATABASE_HOST.';dbname='.CONFIG_DATABASE_NAME, CONFIG_DATABASE_USER, CONFIG_DATABASE_PASSWORD);
        } catch (PDOException $exception) {
            new monolog('ERROR', 'Unable to connect to the database: '.$exception->getMessage());
            die('1000');
        }
        return $pdo;
    }

    public function select($query) {
        $runQuery = $this->pdo->query($query);
        $results = $runQuery->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getForumDetails($forumsId) {
        $query = 'SELECT * FROM forums WHERE id = '. $forumsId;
        $runQuery = $this->pdo->query($query);
        $results = $runQuery->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getAccountDetails($forumsId) {
        $query = 'SELECT * FROM forum_accounts WHERE forums_id = '. $forumsId;
        $runQuery = $this->pdo->query($query);
        $results = $runQuery->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
}
