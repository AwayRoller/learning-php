<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 12:15
 */

class Connection

{
    public static function make()
    {

        try {

            return new PDO('mysql:host=127.0.0.1;dbname=learning_php', 'root', 'Peacetoy');

        } catch (PDOException $e) {

            die($e->getMessage());

        }

    }
}

$pdo = Connection::make();