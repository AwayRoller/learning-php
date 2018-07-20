<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */


require 'core/bootstrap.php';



/*$router = new Router;

require 'routes.php';

$uri = trim(($_SERVER['REQUEST_URI']), '/');


require $router->direct($uri);*/


require  Router::load('routes.php')

        ->direct(Request::uri());