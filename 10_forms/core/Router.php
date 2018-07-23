<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 14:00
 */

class Router
{

    protected $routes = [

        //register routes specifically

        'GET' => [],

        'POST' => []

    ];

    public static function load($file)
    {

        $router = new static();

        require $file;

        return $router;

    }

    /*GET request*/
    public function get($uri, $controller)
    {

        /*EXPLANATION*/

        /*$getRoutes = [];

        $getRoutes[] = 'foo';
        $getRoutes[] = 'bar';
        $getRoutes[uri] = 'baz';

        [
            0 => 'foo',

            1=> 'bar',

            'uri' => 'baz'

        ]*/


        /*See EXPL.*/
        return $this->routes['GET'][$uri] = $controller;

    }

    /*POST request*/
    public function post($uri, $controller)
    {

        return $this->routes['POST'][$uri] = $controller;

    }

    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->routes[$requestType][$uri];

        }

        throw new Exception('No route defined for this URI');

    }

}