<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 14:00
 */



namespace App\Core;



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


            // string PagesController@home
            /*
             *
             * parse it
             * new up the controller
             * call the method
             *
             * */

            return $this->callAction(

                //each item will be converted into function arguments
                ...explode('@', $this->routes[$requestType][$uri])

            );

        }

        throw new Exception('No route defined for this URI');

    }


    protected function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if (! method_exists($controller, $action)) {

            throw new Exception(

                "{$controller} does not respond to the {$action} action."

            );
        }

        return $controller->$action();

    }

}