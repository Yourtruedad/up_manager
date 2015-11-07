<?php

class db {
    protected $pdo;

    public function __construct() {
        $this->pdo = $this->dbConnect();
    }

    protected function dbConnect() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
        } catch (PDOException $exception) {
            print "Błąd połączenia z bazą: " . $exception->getMessage() . "<br/>";
            die('1000');
        }
        return $pdo;
    }

    public function select($query) {
        $runQuery = $this->pdo->query($query);  

        $results = $runQuery->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
