<?php

// connect to database
$pdo = new PDO('mysql:host=localhost;dbname=php-tutorial', 'root', '');

// insert

$count = $pdo->exec("INSERT INTO example (name) VALUES ('John Doe')");
$lastId = $pdo->lastInsertId();
echo "$count rows inserted and last id is $lastId" . PHP_EOL;

// $pdo->beginTransaction();
// $pdo->exec("INSERT INTO example (name) VALUES ('Jane Doe')");
// $pdo->exec("INSERT INTO example (name) VALUES ('Lorem')");
// $pdo->exec("INSERT INTO example (name) VALUES ('Ipsum')");
// $pdo->commit();

// $name = "alex";
// $statement = $pdo->prepare("INSERT INTO example (name) VALUES (?)");
// $statement->bindValue(1, $name);
// $statement->execute();

// $statement = $pdo->prepare("INSERT INTO example (name) VALUES (:name)")->execute(['name' => 'alole']);

// update
$pdo->exec("UPDATE example SET name = 'alose' WHERE id = 1");
$pdo->prepare("UPDATE example SET name = :name WHERE id = :id")->execute(['name' => 'alose juga', 'id' => 2]);

// delete
$pdo->exec("DELETE FROM example WHERE id = 1");
$pdo->prepare("DELETE FROM example WHERE id = :id")->execute(['id' => 2]);

// select
$statement = $pdo->query("SELECT * FROM example");
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

$statement = $pdo->prepare("SELECT * FROM example WHERE id = :id");
$statement->execute(['id' => 4]);
$row = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($row);