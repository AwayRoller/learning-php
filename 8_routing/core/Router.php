<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 14:00
 */

class Router
{

    protected $routes = [];

    public static function load($file)
    {

        $router = new static;

        require $file;

        return $router;

    }

    public function define($routes)
    {

        $this->routes = $routes;

    }

    public function direct($uri)
    {

        if (array_key_exists($uri, $this->routes)) {

            return $this->routes[$uri];

        }

        throw new Exception('No route defined for this URI');

    }

}