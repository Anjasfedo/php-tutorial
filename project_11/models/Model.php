<?php

class Model
{
    private $pdo;

    protected $table = '';

    // private function connectDb()
    // {

    // }

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $statement->execute(['id' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function store($data)
    {
        implode(",", array_keys($data));
        $statement = $this->pdo->prepare("INSERT INTO {$this->table} (".implode(",", array_keys($data)).") VALUES (:".implode(", :", array_keys($data)).")");
        $statement->execute($data);
    }

    public function update($data, $id)
    {

    }

    public function delete($id)
    {

    }
}