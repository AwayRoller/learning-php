<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 12:20
 */

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table, $class)
    {

        //prepare sql query
        $statement = $this->pdo->prepare("select * from $table");

        //execute the query
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $class);

    }

}