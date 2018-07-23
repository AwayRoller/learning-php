<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 12:15
 */

class Connection

{
    public static function make($config)
    {

        try {

            return new PDO(
                $config ['connection'].
                ';dbname='.$config ['name'],
                $config ['username'],
                $config ['password'],
                $config ['options']
            );

        } catch (PDOException $e) {

            die($e->getMessage());

        }

    }
}