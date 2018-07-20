<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 15:53
 */

function dd($data) {
    die(var_dump($data));
}

function connectToDb()

{
    try {

        return new PDO('mysql:host=127.0.0.1;dbname=learning_php', 'root', 'Peacetoy');

    } catch (PDOException $e) {

        die($e->getMessage());

    }
}

function fetchAllTasks($pdo)
{
    //prepare sql query
    $statement = $pdo->prepare('select * from todos');

    //execute the query
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
