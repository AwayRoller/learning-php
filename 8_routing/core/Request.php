<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 14:57
 */

class Request
{

    public static function uri()
    {

        return trim($_SERVER['REQUEST_URI'], '/');

    }

}