<?php

class Model
{
    protected $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=your_database_name', 'username', 'password');
    }

    protected function executeQuery($sql, $params = [])
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);
        return $statement;
    }

    // Example method to retrieve all posts
    public function getAll()
    {
        $sql = "SELECT * FROM posts";
        $result = $this->executeQuery($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
