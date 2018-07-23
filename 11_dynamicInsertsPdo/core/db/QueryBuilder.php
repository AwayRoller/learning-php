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


    public function selectAll($table)
    {

        //prepare sql query
        $statement = $this->pdo->prepare("select * from $table");

        //execute the query
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }


    public function insert($table, $parameters)
    {
        //insert into %s (%s) values(%s)

        //insert into names (name) values(:name) ---> placeholder



        $sql = sprintf(

            'insert into %s (%s) values(%s)',

            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(': ', array_keys($parameters))

        );

        //die(var_dump($sql));



        try {

            $statement = $this->pdo->prepare($sql);


            $statement->execute($parameters);


        } catch (Exception $e) {

            die('Whoooops! Something went wrong');

        }




    }
    
}