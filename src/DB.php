<?php

namespace App;

use App\Models\Article;
use \PDO;
use \PDOException;

class DB {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
    }

    public function all() {
        $stmt = $this->conn->prepare("SELECT * FROM articles");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, Article::class);
        return $stmt->fetchAll();
    }
}